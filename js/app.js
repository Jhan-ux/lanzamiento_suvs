/**
 * APP INITIALIZER
 * Coordinador principal de la Invitación Digital
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Inicializar Splash y animación de partículas
    if (window.SplashAnimation) {
        window.splashInstance = new window.SplashAnimation();
    }

    // 2. Inicializar Cronómetro regresivo
    if (window.CountdownTimer) {
        window.countdownInstance = new window.CountdownTimer();
    }

    // 3. Inicializar Galería de Videos
    if (window.VideoGallery) {
        window.videoGalleryInstance = new window.VideoGallery();
    }

    // 4. Asignar eventos de Calendario
    const btnGoogleCal = document.getElementById('btnGoogleCal');
    const btnAppleCal = document.getElementById('btnAppleCal');

    if (btnGoogleCal) {
        btnGoogleCal.addEventListener('click', (e) => {
            e.preventDefault();
            if (window.CalendarHelper) window.CalendarHelper.addToGoogleCalendar();
        });
    }

    if (btnAppleCal) {
        btnAppleCal.addEventListener('click', (e) => {
            e.preventDefault();
            if (window.CalendarHelper) window.CalendarHelper.downloadIcsFile();
        });
    }

    // 5. Asignar evento de seguridad al botón de splash si existe
    const splashBtn = document.getElementById('splashCtaBtn');
    if (splashBtn) {
        splashBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.enterExperience();
        });
    }

    console.log('Invitación Digital Chevrolet & MSA Automotriz inicializada con éxito.');
});
