{{-- SECCIÓN CLUB PREMIUM CHEVROLET (BENEFICIOS VIP & VIDEOS) --}}
<section class="section-wrapper" id="videos">
    <div class="sec-header">
        <div class="club-premium-header-wrap">
            <img src="{{ asset('img/logos/club-premium.png') }}" alt="Club Premium Chevrolet" class="club-premium-badge-img">
        </div>
        <p class="sec-desc" style="margin-top: 14px;">Beneficios exclusivos para propietarios de la nueva gama SUV Chevrolet 2026.</p>
    </div>

    {{-- Beneficios VIP Club Premium (Directos y Concisos) --}}
    @if(!empty($evento['club_premium']['beneficios']))
    <div class="club-benefits-grid">
        @foreach($evento['club_premium']['beneficios'] as $ben)
        <div class="club-benefit-card">
            <div class="club-benefit-badge">{{ $ben['numero'] }}</div>
            <div class="club-benefit-info">
                <div class="club-benefit-title">{{ $ben['titulo'] }}</div>
                <div class="club-benefit-detail">{{ $ben['detalle'] }}</div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    {{-- Showcase Audiovisual --}}
    <div class="video-showcase-container">
        {{-- Reproductor Principal --}}
        <div class="video-main-player-wrap">
            <video id="mainVideoElement" 
                   class="video-main-element" 
                   preload="metadata" 
                   playsinline 
                   controls 
                   src="{{ asset($evento['videos'][0]['src'] ?? '') }}"
                   poster="{{ asset($evento['videos'][0]['poster'] ?? '') }}">
                Tu navegador no soporta reproducción de video HTML5.
            </video>

            <div id="videoPlayOverlay" class="video-play-overlay">
                <div class="video-play-button-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
                </div>
            </div>
        </div>

        {{-- Selector de Videos (Pestañas Interactivas) --}}
        <div class="video-tabs-list">
            @foreach($evento['videos'] as $index => $vid)
            <div class="video-tab-item {{ $index === 0 ? 'active' : '' }}" 
                 data-video-src="{{ asset($vid['src']) }}" 
                 data-video-poster="{{ asset($vid['poster']) }}">
                <div class="video-tab-badge">{{ $index + 1 }}</div>
                <div style="flex: 1;">
                    <div class="video-tab-title">{{ $vid['titulo'] }}</div>
                    <div class="video-tab-dur">{{ $vid['descripcion'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
