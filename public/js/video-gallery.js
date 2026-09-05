/**
 * VIDEO GALLERY & SHOWCASE
 * Manejador del reproductor principal de videos y pestañas interactivas
 */

class VideoGallery {
    constructor() {
        this.videoPlayer = document.getElementById('mainVideoElement');
        this.playOverlay = document.getElementById('videoPlayOverlay');
        this.tabs = document.querySelectorAll('.video-tab-item');
        
        if (this.videoPlayer) {
            this.init();
        }
    }

    init() {
        if (this.playOverlay) {
            this.playOverlay.addEventListener('click', () => this.togglePlay());
        }

        this.videoPlayer.addEventListener('play', () => {
            if (this.playOverlay) this.playOverlay.style.display = 'none';
        });

        this.videoPlayer.addEventListener('pause', () => {
            if (this.playOverlay) this.playOverlay.style.display = 'flex';
        });

        this.tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const videoSrc = tab.getAttribute('data-video-src');
                const videoPoster = tab.getAttribute('data-video-poster');
                this.switchVideo(videoSrc, videoPoster, tab);
            });
        });
    }

    togglePlay() {
        if (!this.videoPlayer) return;
        if (this.videoPlayer.paused) {
            this.videoPlayer.muted = false; // Desmutear al hacer clic intencional
            this.videoPlayer.play().catch(e => {
                console.warn('Autoplay bloqueado con audio, reproduciendo silenciado:', e);
                this.videoPlayer.muted = true;
                this.videoPlayer.play();
            });
        } else {
            this.videoPlayer.pause();
        }
    }

    switchVideo(src, poster, activeTab) {
        if (!this.videoPlayer || !src) return;

        this.tabs.forEach(t => t.classList.remove('active'));
        if (activeTab) activeTab.classList.add('active');

        this.videoPlayer.pause();
        
        // Transición de cambio
        this.videoPlayer.style.opacity = '0.3';
        setTimeout(() => {
            this.videoPlayer.src = src;
            if (poster) this.videoPlayer.poster = poster;
            this.videoPlayer.load();
            this.videoPlayer.play().catch(() => {});
            this.videoPlayer.style.opacity = '1';
        }, 200);
    }

    startAutoplay() {
        if (!this.videoPlayer) return;
        this.videoPlayer.muted = true;
        this.videoPlayer.play().catch(() => {});
    }
}

window.VideoGallery = VideoGallery;
