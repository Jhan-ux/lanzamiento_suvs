/**
 * COUNTDOWN TIMER
 * Cronómetro regresivo preciso en vivo hacia el evento
 */

class CountdownTimer {
    constructor() {
        this.elDays = document.getElementById('cd-days');
        this.elHours = document.getElementById('cd-hours');
        this.elMinutes = document.getElementById('cd-minutes');
        this.elSeconds = document.getElementById('cd-seconds');
        
        // Target: Domingo 13 de Septiembre 2026 a las 10:00 AM (Zona horaria Perú GMT-5)
        const targetAttr = document.querySelector('[data-target-date]')?.getAttribute('data-target-date');
        this.targetDate = targetAttr ? new Date(targetAttr).getTime() : new Date('2026-09-13T10:00:00-05:00').getTime();
        
        if (this.elDays && this.elHours && this.elMinutes && this.elSeconds) {
            this.start();
        }
    }

    start() {
        this.update();
        this.timer = setInterval(() => this.update(), 1000);
    }

    update() {
        const now = new Date().getTime();
        const distance = this.targetDate - now;

        if (distance < 0) {
            this.render('00', '00', '00', '00');
            if (this.timer) clearInterval(this.timer);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        this.render(
            String(days).padStart(2, '0'),
            String(hours).padStart(2, '0'),
            String(minutes).padStart(2, '0'),
            String(seconds).padStart(2, '0')
        );
    }

    render(d, h, m, s) {
        if (this.elDays.textContent !== d) this.elDays.textContent = d;
        if (this.elHours.textContent !== h) this.elHours.textContent = h;
        if (this.elMinutes.textContent !== m) this.elMinutes.textContent = m;
        if (this.elSeconds.textContent !== s) this.elSeconds.textContent = s;
    }
}

window.CountdownTimer = CountdownTimer;
