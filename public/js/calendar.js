/**
 * CALENDAR INTEGRATION
 * Permite agregar el evento directamente a Google Calendar o descargar archivo .ics
 */

class CalendarHelper {
    static getEventData() {
        return {
            title: 'Lanzamiento Chevrolet: Descubre el Nuevo Mundo SUV · MSA Automotriz',
            description: 'Lanzamiento oficial de la Nueva Generación de SUVs Chevrolet (All-New Traverse, Tahoe y Suburban) en Cajamarca. ¡Te esperamos!',
            location: 'La Ensenada Hotel, Fundo los Sauces KM.5 (Car. Baños del Inca), Cajamarca, Perú',
            // Formato UTC: Domingo 13 de Septiembre 2026, 10:00 AM Perú (15:00 UTC) a 14:00 PM Perú (19:00 UTC)
            startUtc: '20260913T150000Z',
            endUtc: '20260913T190000Z'
        };
    }

    static addToGoogleCalendar() {
        const ev = this.getEventData();
        const url = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(ev.title)}&dates=${ev.startUtc}/${ev.endUtc}&details=${encodeURIComponent(ev.description)}&location=${encodeURIComponent(ev.location)}`;
        window.open(url, '_blank');
    }

    static downloadIcsFile() {
        const ev = this.getEventData();
        const icsContent = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//MSA Automotriz//Invitacion SUV//ES',
            'CALSCALE:GREGORIAN',
            'METHOD:PUBLISH',
            'BEGIN:VEVENT',
            `SUMMARY:${ev.title}`,
            `DESCRIPTION:${ev.description}`,
            `LOCATION:${ev.location}`,
            `DTSTART:${ev.startUtc}`,
            `DTEND:${ev.endUtc}`,
            'STATUS:CONFIRMED',
            'END:VEVENT',
            'END:VCALENDAR'
        ].join('\r\n');

        const blob = new Blob([icsContent], { type: 'text/calendar;charset=utf-8' });
        const link = document.createElement('a');
        link.href = window.URL.createObjectURL(blob);
        link.setAttribute('download', 'Lanzamiento_Chevrolet_Mundo_SUV.ics');
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
}

window.CalendarHelper = CalendarHelper;
