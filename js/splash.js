/**
 * SPLASH & PARTICLE CANVAS
 * Efecto de partículas suspendidas y transición cinemática
 */

class SplashAnimation {
    constructor() {
        this.splash = document.getElementById('splash');
        this.canvas = document.getElementById('splash-canvas');
        this.ctaBtn = document.getElementById('splashCtaBtn');
        this.ctx = this.canvas ? this.canvas.getContext('2d') : null;
        this.particles = [];
        this.particleCount = window.innerWidth < 768 ? 35 : 75;
        this.animationFrame = null;
        
        if (this.canvas && this.ctx) {
            this.init();
        }

        if (this.ctaBtn) {
            this.ctaBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.enterExperience();
            });
        }
    }

    init() {
        this.resize();
        window.addEventListener('resize', () => this.resize());
        this.createParticles();
        this.animate();
    }

    resize() {
        if (!this.canvas) return;
        this.width = this.canvas.width = window.innerWidth;
        this.height = this.canvas.height = window.innerHeight;
    }

    createParticles() {
        this.particles = [];
        const colors = [
            'rgba(217, 4, 41, ',   // Rojo MSA
            'rgba(234, 161, 31, ',  // Dorado Chevrolet
            'rgba(255, 255, 255, '  // Blanco
        ];

        for (let i = 0; i < this.particleCount; i++) {
            this.particles.push({
                x: Math.random() * (this.width || window.innerWidth),
                y: Math.random() * (this.height || window.innerHeight),
                radius: Math.random() * 2 + 0.8,
                colorBase: colors[Math.floor(Math.random() * colors.length)],
                alpha: Math.random() * 0.6 + 0.2,
                vx: (Math.random() - 0.5) * 0.4,
                vy: -Math.random() * 0.5 - 0.2, // Flotan suavemente hacia arriba
                pulseSpeed: Math.random() * 0.02 + 0.01
            });
        }
    }

    animate() {
        if (!this.ctx) return;
        this.ctx.clearRect(0, 0, this.width, this.height);

        for (let p of this.particles) {
            p.y += p.vy;
            p.x += p.vx;
            p.alpha += Math.sin(Date.now() * p.pulseSpeed) * 0.01;

            if (p.y < 0) {
                p.y = (this.height || window.innerHeight) + 10;
                p.x = Math.random() * (this.width || window.innerWidth);
            }
            if (p.x < 0) p.x = (this.width || window.innerWidth);
            if (p.x > (this.width || window.innerWidth)) p.x = 0;

            const safeAlpha = Math.max(0.1, Math.min(0.8, p.alpha));
            this.ctx.beginPath();
            this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            this.ctx.fillStyle = p.colorBase + safeAlpha + ')';
            this.ctx.shadowBlur = 8;
            this.ctx.shadowColor = p.colorBase + '0.6)';
            this.ctx.fill();
        }

        this.animationFrame = requestAnimationFrame(() => this.animate());
    }

    enterExperience() {
        // 0. Asegurar que siempre se muestre desde la parte superior (Hero / Inicio)
        window.scrollTo(0, 0);
        if (window.location.hash) {
            try {
                history.replaceState(null, null, window.location.pathname + window.location.search);
            } catch (e) {}
        }

        const splashEl = this.splash || document.getElementById('splash');
        if (splashEl) {
            splashEl.classList.add('hide');
            setTimeout(() => {
                splashEl.style.display = 'none';
                window.scrollTo(0, 0);
                if (this.animationFrame) {
                    cancelAnimationFrame(this.animationFrame);
                }
            }, 650);
        }

        // 1. Audio ambiental
        try {
            if (window.AudioManager && typeof window.AudioManager.playAmbient === 'function') {
                window.AudioManager.playAmbient();
            }
        } catch (e) {
            console.warn('Audio playAmbient error:', e);
        }

        // 3. Autoplay de video
        try {
            if (window.videoGalleryInstance && typeof window.videoGalleryInstance.startAutoplay === 'function') {
                window.videoGalleryInstance.startAutoplay();
            }
        } catch (e) {
            console.warn('Video startAutoplay error:', e);
        }
    }
}

// Asegurar que al cargar o recargar siempre inicie en la parte superior
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}
window.scrollTo(0, 0);

// Función global accesible inmediatamente
window.enterExperience = function() {
    window.scrollTo(0, 0);
    if (window.location.hash) {
        try {
            history.replaceState(null, null, window.location.pathname + window.location.search);
        } catch (e) {}
    }

    if (window.splashInstance && typeof window.splashInstance.enterExperience === 'function') {
        window.splashInstance.enterExperience();
    } else {
        const s = document.getElementById('splash');
        if (s) {
            s.classList.add('hide');
            setTimeout(() => { 
                s.style.display = 'none'; 
                window.scrollTo(0, 0);
            }, 650);
        }
    }
};

window.SplashAnimation = SplashAnimation;
