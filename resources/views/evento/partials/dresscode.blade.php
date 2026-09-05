{{-- DRESS CODE --}}
<section class="section-wrapper" id="vestimenta">
    <div class="sec-header">
        <span class="sec-pill">Etiqueta & Estilo</span>
        <h3 class="sec-title">CÓDIGO DE VESTIMENTA</h3>
    </div>

    <div class="dress-code-card">
        <div class="detail-icon-box" style="margin-bottom: 16px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/></svg>
        </div>
        <h4 class="dress-code-name">{{ $evento['dress_code']['tipo'] }}</h4>
        <p class="dress-code-desc">{{ $evento['dress_code']['descripcion'] }}</p>

        <div style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.15em; color: var(--chevy-gold); text-transform: uppercase; margin-bottom: 16px;">
            Paleta de Tonos Sugerida
        </div>

        <div class="dress-swatches-grid">
            @foreach($evento['dress_code']['colores'] as $c)
            <div class="swatch-item">
                <div class="swatch-circle" style="background-color: {{ $c['hex'] }};"></div>
                <span class="swatch-label">{{ $c['nombre'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
