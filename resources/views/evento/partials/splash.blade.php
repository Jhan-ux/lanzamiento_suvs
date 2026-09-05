{{-- SPLASH SCREEN INTRO MSA AUTOMOTRIZ --}}
<section id="splash">
    <canvas id="splash-canvas"></canvas>

    <div class="splash-content">
        {{-- Logos de Marca --}}
        <div class="splash-logos">
            {{-- Logo Chevrolet Oficial --}}
            <img src="{{ asset('img/logos/logo_chevrolet.png') }}" alt="Chevrolet" class="splash-logo-chevy-img">

            <div class="splash-divider-bar"></div>

            {{-- Logo MSA Automotriz --}}
            <img src="{{ asset('img/logos/logo-msa-blanco.png') }}" alt="MSA Automotriz" class="splash-logo-msa-img">
        </div>

        {{-- Tipografía Oficial según Manual de Marca --}}
        <div class="hero-title-lockup" style="margin-top: 10px; margin-bottom: 8px;">
            <div class="hero-invitacion-label" style="letter-spacing: 0.6em; margin-bottom: 10px;">I N V I T A C I Ó N</div>
            <div class="hero-descubre-label" style="letter-spacing: 0.38em; font-size: clamp(1.1rem, 2.6vw, 1.6rem);">D E S C U B R E &nbsp; E L &nbsp; N U E V O</div>
            <h1 class="hero-mundo-suv-title" style="font-size: clamp(2.2rem, 5.5vw, 3.8rem); margin-bottom: 8px;">
                <span class="hero-word-mundo">MUNDO</span>
                <span class="hero-bowtie-separator">
                    <img src="{{ asset('img/logos/chebrolet_icono.png') }}" alt="Chevrolet" class="hero-title-bowtie-img">
                </span>
                <span class="hero-word-suv">SUV</span>
            </h1>
        </div>

        <div class="splash-experience-label">UNA EXPERIENCIA EXCLUSIVA PARA TODA LA FAMILIA</div>
        <p style="font-size: 0.88rem; color: #ced4da; letter-spacing: 0.14em; text-transform: uppercase; margin-bottom: 18px; font-weight: 700;">
            Lanzamiento Oficial · Cajamarca 2026
        </p>

        {{-- Showcase Preview de las SUVs --}}
        <div class="splash-car-preview">
            <img src="{{ asset('img/suvs/banner_evento.png') }}" alt="Gama Chevrolet 2026" class="splash-car-img" style="filter: drop-shadow(0 16px 30px rgba(0,0,0,0.95));">
        </div>

        {{-- Botón CTA Descubrir --}}
        <button id="splashCtaBtn" class="splash-cta-btn" onclick="enterExperience()" aria-label="Ingresar a la experiencia">
            DESCUBRIR EXPERIENCIA
        </button>
    </div>
</section>
