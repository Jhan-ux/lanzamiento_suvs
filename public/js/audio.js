/**
 * AUDIO CONTROLLER & ENGINE SYNTHESIZER
 * Maneja la música ambiental y el sonido de arranque de motor (con Web Audio API)
 */

class AudioManager {
    constructor() {
        this.toggleBtn = document.getElementById('musicToggleBtn');
        this.isPlaying = false;
        this.audioCtx = null;
        this.ambientAudio = document.getElementById('ambientAudioElement');
        
        if (this.toggleBtn) {
            this.toggleBtn.addEventListener('click', () => this.toggleAudio());
        }
    }

    getAudioContext() {
        if (!this.audioCtx) {
            const AudioContext = window.AudioContext || window.webkitAudioContext;
            if (AudioContext) {
                this.audioCtx = new AudioContext();
            }
        }
        if (this.audioCtx && this.audioCtx.state === 'suspended') {
            this.audioCtx.resume();
        }
        return this.audioCtx;
    }

    playEngineRev() {
        try {
            const ctx = this.getAudioContext();
            if (!ctx) return;

            const now = ctx.currentTime;

            // 1. Curva de distorsión / Saturación M-Performance (Rugido agresivo y metálico)
            const distortion = ctx.createWaveShaper();
            function makeDistortionCurve(amount) {
                const k = typeof amount === 'number' ? amount : 50;
                const n_samples = 44100;
                const curve = new Float32Array(n_samples);
                const deg = Math.PI / 180;
                for (let i = 0; i < n_samples; ++i) {
                    const x = (i * 2) / n_samples - 1;
                    curve[i] = ((3 + k) * x * 20 * deg) / (Math.PI + k * Math.abs(x));
                }
                return curve;
            }
            distortion.curve = makeDistortionCurve(42);
            distortion.oversample = '4x';

            // Master Gain del motor
            const masterGain = ctx.createGain();
            masterGain.gain.setValueAtTime(0.001, now);
            masterGain.gain.linearRampToValueAtTime(0.48, now + 0.22);
            masterGain.gain.setValueAtTime(0.48, now + 1.1);
            masterGain.gain.exponentialRampToValueAtTime(0.001, now + 2.5);

            // 2. Filtro de escape principal con resonancia metálica BMW M
            const exhaustFilter = ctx.createBiquadFilter();
            exhaustFilter.type = 'lowpass';
            exhaustFilter.Q.setValueAtTime(3.8, now);
            exhaustFilter.frequency.setValueAtTime(140, now);
            exhaustFilter.frequency.exponentialRampToValueAtTime(2400, now + 0.45);
            exhaustFilter.frequency.exponentialRampToValueAtTime(380, now + 2.0);

            // Filtro de resonancia rasp metálica (Peak característico BMW M inline-6)
            const raspFilter = ctx.createBiquadFilter();
            raspFilter.type = 'peaking';
            raspFilter.frequency.setValueAtTime(1850, now);
            raspFilter.Q.setValueAtTime(4.2, now);
            raspFilter.gain.setValueAtTime(11, now);

            // 3. Cilindros BMW M Straight-6 (Frecuencia base agresiva)
            const oscInline6 = ctx.createOscillator();
            oscInline6.type = 'sawtooth';
            oscInline6.frequency.setValueAtTime(80, now);
            oscInline6.frequency.exponentialRampToValueAtTime(460, now + 0.45);
            oscInline6.frequency.exponentialRampToValueAtTime(115, now + 1.9);

            // 4. Armónicos cruzados de orden 3 y 6 (Aullido metálico BMW TwinPower)
            const oscHarmonics = ctx.createOscillator();
            oscHarmonics.type = 'sawtooth';
            oscHarmonics.frequency.setValueAtTime(160, now);
            oscHarmonics.frequency.exponentialRampToValueAtTime(920, now + 0.45);
            oscHarmonics.frequency.exponentialRampToValueAtTime(230, now + 1.9);

            const harmonicsGain = ctx.createGain();
            harmonicsGain.gain.setValueAtTime(0.35, now);

            // 5. Silbido del Twin-Turbo (Spooling boost)
            const turboOsc = ctx.createOscillator();
            turboOsc.type = 'sine';
            turboOsc.frequency.setValueAtTime(1900, now);
            turboOsc.frequency.exponentialRampToValueAtTime(4800, now + 0.48);
            turboOsc.frequency.exponentialRampToValueAtTime(2200, now + 1.8);

            const turboGain = ctx.createGain();
            turboGain.gain.setValueAtTime(0.001, now);
            turboGain.gain.linearRampToValueAtTime(0.12, now + 0.4);
            turboGain.gain.exponentialRampToValueAtTime(0.001, now + 1.8);

            // 6. Ruido de flujo de gases de escape en alta presión
            const bufferSize = Math.floor(ctx.sampleRate * 2.5);
            const noiseBuffer = ctx.createBuffer(1, bufferSize, ctx.sampleRate);
            const output = noiseBuffer.getChannelData(0);
            for (let i = 0; i < bufferSize; i++) {
                output[i] = (Math.random() * 2 - 1) * Math.exp(-i / (ctx.sampleRate * 1.0));
            }
            const noiseSource = ctx.createBufferSource();
            noiseSource.buffer = noiseBuffer;

            const noiseFilter = ctx.createBiquadFilter();
            noiseFilter.type = 'bandpass';
            noiseFilter.Q.setValueAtTime(2.2, now);
            noiseFilter.frequency.setValueAtTime(240, now);
            noiseFilter.frequency.exponentialRampToValueAtTime(1400, now + 0.45);
            noiseFilter.frequency.exponentialRampToValueAtTime(320, now + 1.9);

            const noiseGain = ctx.createGain();
            noiseGain.gain.setValueAtTime(0.01, now);
            noiseGain.gain.linearRampToValueAtTime(0.32, now + 0.28);
            noiseGain.gain.exponentialRampToValueAtTime(0.001, now + 2.2);

            // 7. Petardeos y Pops de escape al desacelerar (Overrun Burbles / Crackle & Pop BMW M)
            const popTimes = [1.22, 1.38, 1.54, 1.72, 1.92];
            popTimes.forEach((tOffset, idx) => {
                const popTime = now + tOffset;
                const popNoise = ctx.createBufferSource();
                const popLen = Math.floor(ctx.sampleRate * 0.06);
                const popBuf = ctx.createBuffer(1, popLen, ctx.sampleRate);
                const popData = popBuf.getChannelData(0);
                for (let i = 0; i < popLen; i++) {
                    popData[i] = (Math.random() * 2 - 1) * Math.exp(-i / (ctx.sampleRate * 0.012));
                }
                popNoise.buffer = popBuf;

                const popFilter = ctx.createBiquadFilter();
                popFilter.type = 'bandpass';
                popFilter.frequency.setValueAtTime(340 + (idx % 2) * 180, popTime);
                popFilter.Q.setValueAtTime(4.0, popTime);

                const popGain = ctx.createGain();
                popGain.gain.setValueAtTime(0.38 - idx * 0.04, popTime);
                popGain.gain.exponentialRampToValueAtTime(0.001, popTime + 0.055);

                popNoise.connect(popFilter);
                popFilter.connect(popGain);
                popGain.connect(exhaustFilter);

                popNoise.start(popTime);
                popNoise.stop(popTime + 0.06);
            });

            // Conexiones del grafo de audio
            oscInline6.connect(exhaustFilter);
            oscHarmonics.connect(harmonicsGain);
            harmonicsGain.connect(exhaustFilter);

            turboOsc.connect(turboGain);
            turboGain.connect(exhaustFilter);

            noiseSource.connect(noiseFilter);
            noiseFilter.connect(noiseGain);
            noiseGain.connect(exhaustFilter);

            exhaustFilter.connect(raspFilter);
            raspFilter.connect(distortion);
            distortion.connect(masterGain);
            masterGain.connect(ctx.destination);

            // Arranque sincronizado
            oscInline6.start(now);
            oscHarmonics.start(now);
            turboOsc.start(now);
            noiseSource.start(now);

            // Parada sincronizada
            oscInline6.stop(now + 2.5);
            oscHarmonics.stop(now + 2.5);
            turboOsc.stop(now + 2.5);
            noiseSource.stop(now + 2.5);
        } catch (e) {
            console.warn('Audio Context error:', e);
        }
    }

    playAmbient() {
        if (this.ambientAudio) {
            this.ambientAudio.volume = 0.35;
            this.ambientAudio.play().then(() => {
                this.isPlaying = true;
                this.updateUI();
            }).catch(() => {
                this.isPlaying = false;
                this.updateUI();
            });
        }
    }

    toggleAudio() {
        if (this.ambientAudio) {
            if (this.ambientAudio.paused) {
                this.ambientAudio.play();
                this.isPlaying = true;
            } else {
                this.ambientAudio.pause();
                this.isPlaying = false;
            }
        } else {
            this.isPlaying = !this.isPlaying;
        }
        this.updateUI();
    }

    updateUI() {
        if (!this.toggleBtn) return;
        if (this.isPlaying) {
            this.toggleBtn.classList.add('playing');
            this.toggleBtn.title = 'Silenciar música';
        } else {
            this.toggleBtn.classList.remove('playing');
            this.toggleBtn.title = 'Activar música';
        }
    }
}

window.AudioManager = new AudioManager();
