{{-- HERO PRINCIPAL CON TIPOGRAFÍA OFICIAL Y LOGO MSA --}}
<section class="hero-section" id="inicio" data-target-date="{{ $evento['fecha']['iso_target'] ?? '2026-09-13T10:00:00-05:00' }}">
    <div class="hero-bg-lines"></div>

    {{-- Barra Superior de Marca VIP --}}
    <div class="hero-top-nav">
        <div class="hero-brand-left">
            <img src="{{ asset('img/logos/logo_chevrolet.png') }}" alt="Chevrolet" class="hero-brand-chevy-img">
        </div>

        <div class="hero-brand-right">
            <img src="{{ asset('img/logos/logo-msa-blanco.png') }}" alt="MSA Automotriz" class="hero-logo-msa-img">
        </div>
    </div>

    {{-- Contenido Central --}}
    <div class="hero-content">
        @if(!empty($invitado))
        <div class="hero-invited-name">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>Invitación Exclusiva para: <strong>{{ $invitado }}</strong></span>
        </div>
        @endif

        {{-- Tipografía Oficial según Manual de Marca --}}
        <div class="hero-title-lockup">
            <div class="hero-invitacion-label">I N V I T A C I Ó N</div>
            <div class="hero-descubre-label">D E S C U B R E &nbsp; E L &nbsp; N U E V O</div>
            <h1 class="hero-mundo-suv-title">
                <span class="hero-word-mundo">MUNDO</span>
                <span class="hero-bowtie-separator">
                    <img src="{{ asset('img/logos/chebrolet_icono.png') }}" alt="Chevrolet" class="hero-title-bowtie-img">
                </span>
                <span class="hero-word-suv">SUV</span>
            </h1>
        </div>

        <div class="hero-experience-label">UNA EXPERIENCIA EXCLUSIVA PARA TODA LA FAMILIA</div>
        <p class="hero-sub">
            {{ $evento['fecha']['dia_semana'] }} {{ $evento['fecha']['dia'] }} de {{ $evento['fecha']['mes'] }} · <strong>{{ $evento['fecha']['hora'] }}</strong> · {{ $evento['ubicacion']['lugar'] }}
        </p>

        {{-- SHOWCASE DE LAS SUVS EN EL HERO --}}
        <div class="hero-stage-wrapper">
            <div class="hero-stage-podium">
                <img src="{{ asset('img/suvs/banner_evento.png') }}" alt="Nueva Gama Chevrolet 2026 — MSA Automotriz" class="hero-stage-img" loading="eager">
            </div>
            <div class="hero-models-pills">
                <span class="hero-model-pill">TAHOE</span>
                <span class="hero-model-pill-dot">·</span>
                <span class="hero-model-pill">ALL-NEW TRAVERSE</span>
                <span class="hero-model-pill-dot">·</span>
                <span class="hero-model-pill">SUBURBAN</span>
                <span class="hero-model-pill-dot">·</span>
                <span class="hero-model-pill">SILVERADO</span>
                <span class="hero-model-pill-dot">·</span>
                <span class="hero-model-pill">COLORADO</span>
            </div>
        </div>

        {{-- Cuenta Regresiva VIP (Total Black Sólido con Bisel Rojo) --}}
        <div class="countdown-wrapper">
            <span class="countdown-caption">TIEMPO PARA EL LANZAMIENTO OFICIAL</span>
            <div class="countdown-box">
                <div class="cd-card">
                    <span class="cd-num" id="cd-days">00</span>
                    <small class="cd-lbl">DÍAS</small>
                </div>
                <div class="cd-divider">:</div>
                <div class="cd-card">
                    <span class="cd-num" id="cd-hours">00</span>
                    <small class="cd-lbl">HORAS</small>
                </div>
                <div class="cd-divider">:</div>
                <div class="cd-card">
                    <span class="cd-num" id="cd-minutes">00</span>
                    <small class="cd-lbl">MINUTOS</small>
                </div>
                <div class="cd-divider">:</div>
                <div class="cd-card">
                    <span class="cd-num" id="cd-seconds">00</span>
                    <small class="cd-lbl">SEGUNDOS</small>
                </div>
            </div>
        </div>

        {{-- Botones de Acción Rápida VIP --}}
        <div class="cta-actions-row">
            <a href="#detalles" class="btn-pill btn-primary-red">
                <span>DETALLES DEL EVENTO</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 13l5 5 5-5M7 6l5 5 5-5"/></svg>
            </a>
            <a href="#confirmacion" class="btn-pill btn-secondary-outline">
                <span>CONFIRMAR ASISTENCIA</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </a>
        </div>
    </div>
</section>
