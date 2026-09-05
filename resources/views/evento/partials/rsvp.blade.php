{{-- CONFIRMACIÓN DE ASISTENCIA (RSVP) --}}
<div class="rsvp-wrapper" id="confirmacion">
    <div class="rsvp-box">
        <span class="sec-pill">Confirmación Requerida</span>
        <h3 class="sec-title" style="margin-top: 10px;">ASEGURA TU LUGAR</h3>
        <p class="rsvp-p">
            Sé parte del evento automotriz más exclusivo de Cajamarca. Por motivos de aforo y protocolo, le solicitamos confirmar su asistencia.
        </p>

        <div class="cta-actions-row" style="margin-bottom: 20px;">
            {{-- Botón 1: Formulario Oficial --}}
            <a href="{{ $evento['rsvp']['formulario_url'] }}" target="_blank" rel="noopener" class="btn-pill btn-primary-red">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                <span>FORMULARIO DE REGISTRO</span>
            </a>

            {{-- Botón 2: Confirmación Directa por WhatsApp --}}
            @php
                $waMsg = urlencode($evento['rsvp']['whatsapp_mensaje'] . (!empty($invitado) ? ' Invitado: ' . $invitado : ''));
                $waUrl = 'https://wa.me/' . $evento['rsvp']['whatsapp_numero'] . '?text=' . $waMsg;
            @endphp
            <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn-pill btn-wa-green">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.652c1.746.951 3.71 1.452 5.71 1.453h.005c6.554 0 11.89-5.335 11.893-11.893a11.82 11.82 0 00-3.48-8.413z"/></svg>
                <span>CONFIRMAR POR WHATSAPP</span>
            </a>
        </div>

        <small style="color: var(--text-muted); font-size: 0.8rem; letter-spacing: 0.05em;">
            Cupos limitados · Invitación personal e intransferible.
        </small>
    </div>
</div>
