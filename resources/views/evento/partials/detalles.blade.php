{{-- DETALLES DEL EVENTO --}}
<div class="section-bleed" id="detalles">
    <div class="section-wrapper">
        <div class="sec-header">
            <span class="sec-pill">Coordenadas Oficiales</span>
            <h3 class="sec-title">HORA Y LUGAR</h3>
            <p class="sec-desc">Te esperamos en un entorno exclusivo para vivir la experiencia del lanzamiento más importante del año.</p>
        </div>

        <div class="details-grid">
            {{-- Tarjeta 1: Fecha --}}
            <div class="detail-card">
                <div class="detail-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                </div>
                <span class="detail-tag">Fecha Oficial</span>
                <div class="detail-main">{{ $evento['fecha']['dia_semana'] }} {{ $evento['fecha']['dia'] }}</div>
                <div class="detail-sub">{{ $evento['fecha']['mes'] }} de {{ $evento['fecha']['anio'] }}</div>
            </div>

            {{-- Tarjeta 2: Hora --}}
            <div class="detail-card">
                <div class="detail-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <span class="detail-tag">Horario de Ingreso</span>
                <div class="detail-main">{{ $evento['fecha']['hora'] }}</div>
                <div class="detail-sub">Recepción & Cóctel de Bienvenida</div>
            </div>

            {{-- Tarjeta 3: Lugar --}}
            <div class="detail-card">
                <div class="detail-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <span class="detail-tag">Ubicación</span>
                <div class="detail-main">{{ $evento['ubicacion']['lugar'] }}</div>
                <div class="detail-sub">{{ $evento['ubicacion']['direccion'] }}<br><small style="color: var(--msa-red); font-weight: 600;"><?= $evento['ubicacion']['referencia'] ?></small></div>
            </div>
        </div>

        {{-- Botones de Navegación GPS & Calendario --}}
        <div class="cta-actions-row">
            <a href="{{ $evento['ubicacion']['maps_url'] }}" target="_blank" rel="noopener" class="btn-pill btn-primary-red">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>GOOGLE MAPS</span>
            </a>

            <a href="{{ $evento['ubicacion']['waze_url'] }}" target="_blank" rel="noopener" class="btn-pill btn-secondary-dark">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                <span>ABRIR EN WAZE</span>
            </a>

            <button id="btnGoogleCal" class="btn-pill btn-secondary-dark" title="Añadir recordatorio a Google Calendar">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <span>AGREGAR A CALENDARIO</span>
            </button>
        </div>
    </div>
</div>
