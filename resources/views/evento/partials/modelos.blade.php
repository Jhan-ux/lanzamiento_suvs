{{-- MODELOS SUV CHEVROLET 2026 --}}
<div class="section-bleed" id="modelos">
    <div class="section-wrapper">
        <div class="sec-header">
            <span class="sec-pill">Gama Chevrolet 2026</span>
            <h3 class="sec-title">LAS PROTAGONISTAS</h3>
            <p class="sec-desc">Conoce los tres íconos de ingeniería, lujo supremo y habitabilidad que redefinen el segmento SUV en el Perú.</p>
        </div>

        <div class="suvs-grid">
            @foreach($evento['modelos_suv'] as $suv)
            <div class="suv-card">
                <div class="suv-card-media">
                    <img src="{{ $suv['img'] ?? 'img/suvs/' . $suv['id'] . '.jpg' }}" alt="{{ $suv['nombre'] }}" class="suv-card-img" loading="lazy">
                    <span class="suv-card-badge">2026 OFFICIAL</span>
                </div>
                <div class="suv-card-body">
                    <span class="suv-card-tag">Línea SUV Premium</span>
                    <h4 class="suv-card-name">{{ $suv['nombre'] }}</h4>
                    <p class="suv-card-desc">{{ $suv['subtitulo'] }}</p>

                    <ul class="suv-specs-list">
                        <li class="suv-spec-item">
                            <span class="suv-spec-bullet"></span>
                            <span><strong>Motor:</strong> {{ $suv['motor'] }}</span>
                        </li>
                        <li class="suv-spec-item">
                            <span class="suv-spec-bullet"></span>
                            <span><strong>Tecnología:</strong> {{ $suv['pantalla'] }}</span>
                        </li>
                        <li class="suv-spec-item">
                            <span class="suv-spec-bullet"></span>
                            <span><strong>Tracción:</strong> {{ $suv['traccion'] }}</span>
                        </li>
                        <li class="suv-spec-item">
                            <span class="suv-spec-bullet"></span>
                            <span><strong>Seguridad:</strong> {{ $suv['seguridad'] }}</span>
                        </li>
                    </ul>

                    <div class="suv-card-actions">
                        @php
                            $suvWaMsg = urlencode("Hola MSA Automotriz, deseo recibir información exclusiva sobre la " . $suv['nombre'] . " del lanzamiento SUV 2026.");
                            $suvWaUrl = "https://wa.me/" . ($evento['rsvp']['whatsapp_numero'] ?? '51966154210') . "?text=" . $suvWaMsg;
                        @endphp
                        <a href="{{ $suvWaUrl }}" target="_blank" rel="noopener" class="btn-suv-inquire">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                            <span>CONSULTAR POR ESTE MODELO</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
