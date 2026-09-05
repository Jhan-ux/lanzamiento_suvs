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

            // Síntesis de sonido de aceleración de motor V8 con Web Audio API
            const osc = ctx.createOscillator();
            const gain = ctx.createGain();
            const filter = ctx.createBiquadFilter();

            osc.type = 'sawtooth';
            filter.type = 'lowpass';
            filter.frequency.setValueAtTime(140, ctx.currentTime);
            filter.frequency.exponentialRampToValueAtTime(850, ctx.currentTime + 0.6);
            filter.frequency.exponentialRampToValueAtTime(220, ctx.currentTime + 1.4);

            osc.frequency.setValueAtTime(45, ctx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(160, ctx.currentTime + 0.5);
            osc.frequency.exponentialRampToValueAtTime(65, ctx.currentTime + 1.4);

            gain.gain.setValueAtTime(0.01, ctx.currentTime);
            gain.gain.linearRampToValueAtTime(0.28, ctx.currentTime + 0.3);
            gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 1.5);

            osc.connect(filter);
            filter.connect(gain);
            gain.connect(ctx.destination);

            osc.start(ctx.currentTime);
            osc.stop(ctx.currentTime + 1.5);
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
