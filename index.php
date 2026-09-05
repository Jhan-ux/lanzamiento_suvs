<?php
/**
 * INVITACIÓN DIGITAL — NUEVO MUNDO SUV
 * CHEVROLET & MSA AUTOMOTRIZ
 * Estilo e Identidad Oficial: https://msaautomotriz.com/
 */

$invitado = isset($_GET['invitado']) ? htmlspecialchars($_GET['invitado']) : null;

$evento = [
    'titulo' => 'DESCUBRE EL NUEVO MUNDO SUV',
    'subtitulo' => 'Lanzamiento Oficial · Cajamarca 2026',
    'marcas' => [
        'principal' => 'CHEVROLET',
        'lema' => 'Manejemos juntos',
        'concesionario' => 'MSA AUTOMOTRIZ',
        'logo_msa' => 'img/logos/logo-msa-blanco.png'
    ],
    'fecha' => [
        'dia_semana' => 'Domingo',
        'dia' => '13',
        'mes' => 'Septiembre',
        'anio' => '2026',
        'hora' => '10:00 AM',
        'iso_target' => '2026-09-13T10:00:00-05:00'
    ],
    'ubicacion' => [
        'lugar' => 'La Ensenada Hotel',
        'direccion' => 'Fundo los Sauces KM.5',
        'referencia' => 'Car. Baños del Inca, Cajamarca',
        'maps_url' => 'https://maps.app.goo.gl/1A4VWXvfnymLYFF88',
        'waze_url' => 'https://waze.com/ul?q=La+Ensenada+Hotel+Cajamarca'
    ],
    'club_premium' => [
        'titulo' => 'Club Premium Chevrolet',
        'badge' => 'img/logos/club-premium.png',
        'beneficios' => [
            [
                'numero' => '01',
                'titulo' => '3 Años de Mantenimiento',
                'detalle' => 'Preventivos gratuitos hasta 30,000 km'
            ],
            [
                'numero' => '02',
                'titulo' => '3 Años OnStar 24/7',
                'detalle' => 'Seguridad y asistencia satelital activa'
            ],
            [
                'numero' => '03',
                'titulo' => '3 Años de Wi-Fi Nativo',
                'detalle' => 'HotSpot a bordo con 6 GB/mes'
            ],
            [
                'numero' => '04',
                'titulo' => '5 Años de Garantía',
                'detalle' => 'Protección de fábrica o 100,000 km'
            ],
            [
                'numero' => '05',
                'titulo' => 'Welcome Pack VIP',
                'detalle' => 'Kit exclusivo para nuevos propietarios'
            ]
        ]
    ],
    'dress_code' => [
        'tipo' => 'Business Casual',
        'descripcion' => 'Elegancia moderna y confort para una experiencia automotriz exclusiva.',
        'colores' => [
            ['nombre' => 'Negro Onyx', 'hex' => '#111111'],
            ['nombre' => 'Azul Marino', 'hex' => '#0F1E36'],
            ['nombre' => 'Blanco Nieve', 'hex' => '#F4F5F7'],
            ['nombre' => 'Gris Titanio', 'hex' => '#6C757D'],
            ['nombre' => 'Beige Arena', 'hex' => '#D8C7B5']
        ]
    ],
    'modelos_suv' => [
        [
            'id' => 'tahoe',
            'nombre' => 'Chevrolet Tahoe',
            'categoria' => 'SUV Full-Size de Lujo',
            'subtitulo' => 'El Ícono Supremo del Lujo, Presencia y Potencia V8',
            'badge' => '3D DISPONIBLE · LUXURY V8',
            'has_3d' => true,
            'model_3d' => 'modelos/chevrolet_tahoe.glb',
            'motor' => '5.3L EcoTec3 V8 · 355 HP · 383 lb-pie',
            'pantalla' => 'Centro de mando digital táctil de 17.7"',
            'traccion' => '4WD con suspensión adaptativa Air Ride',
            'seguridad' => 'Cámara 360° HD y Chevy Safety Assist completo',
            'capacidad' => 'Hasta 8 pasajeros con confort de primera clase',
            'img' => 'img/suvs/tahoe.png'
        ],
        [
            'id' => 'traverse',
            'nombre' => 'All-New Traverse',
            'categoria' => 'SUV Premium Familiar',
            'subtitulo' => 'Espacio, Elegancia y Tecnología de Nueva Generación',
            'badge' => '3D · ALL-NEW',
            'has_3d' => true,
            'model_3d' => 'modelos/chevrolet_traverse.glb',
            'motor' => '2.5L Turbo · 328 HP · 326 lb-pie · 8 vel.',
            'pantalla' => 'Pantalla panorámica Best-in-Class de 17.7"',
            'traccion' => 'AWD inteligente con selector de modos',
            'seguridad' => 'Frenado autónomo y alerta de tráfico cruzado',
            'capacidad' => '3 filas de asientos con acceso Smart Slide',
            'img' => 'img/suvs/traverse.png'
        ],
        [
            'id' => 'suburban',
            'nombre' => 'Chevrolet Suburban',
            'categoria' => 'SUV Ejecutiva Presidencial',
            'subtitulo' => 'La Máxima Expresión en Habitabilidad, Espacio y Confort',
            'badge' => '3D · FLAGSHIP',
            'has_3d' => true,
            'model_3d' => 'modelos/chevrolet_suburban.glb',
            'motor' => 'V8 EcoTec3 de alto rendimiento con capacidad de remolque',
            'pantalla' => 'Cockpit digital ultra amplio de 17.7" + Clúster 11"',
            'traccion' => 'Autotrac 4WD activa con caja de transferencia',
            'seguridad' => 'Paquete integral ADAS con visión nocturna',
            'capacidad' => 'Máximo volumen de carga en su clase para toda la familia',
            'img' => 'img/suvs/suburban.png'
        ],
        [
            'id' => 'silverado',
            'nombre' => 'Chevrolet Silverado',
            'categoria' => 'Pickup Full-Size de Alta Gama',
            'subtitulo' => 'Poder Inquebrantable con Acabados de Lujo High Country',
            'badge' => '3D · V8 TRUCK',
            'has_3d' => true,
            'model_3d' => 'modelos/chevrolet_silverado.glb',
            'motor' => '5.3L / 6.2L EcoTec3 V8 · Máxima capacidad de arrastre',
            'pantalla' => 'Pantalla táctil horizontal de 13.4" con Google Built-in',
            'traccion' => '4x4 con bloqueo de diferencial trasero automático',
            'seguridad' => '14 vistas de cámara y tecnología avanzada de remolque',
            'capacidad' => 'Tolva Durabed de acero de alta resistencia con Multi-Flex',
            'img' => 'img/suvs/silverado.png'
        ],
        [
            'id' => 'colorado',
            'nombre' => 'Chevrolet Colorado',
            'categoria' => 'Pickup Mediana Off-Road Premium',
            'subtitulo' => 'Rendimiento Extremo, Agilidad y Conectividad Total',
            'badge' => '3D · TURBO 4X4',
            'has_3d' => true,
            'model_3d' => 'modelos/chevrolet_colorado.glb',
            'motor' => '2.7L Turbo High-Output · 310 HP y 430 lb-pie de torque',
            'pantalla' => 'Pantalla táctil de 11.3" y clúster digital configurable',
            'traccion' => '4WD con 5 modos de manejo Off-Road seleccionables',
            'seguridad' => 'Chasis reforzado y asistencias de seguridad activa',
            'capacidad' => 'Compuerta trasera StowFlex con compartimiento hermético',
            'img' => 'img/suvs/colorado.png'
        ]
    ],
    'videos' => [
        [
            'id' => 'tahoe-spot',
            'titulo' => 'Chevrolet Tahoe',
            'src' => 'videos/tahoe-spot.mp4',
            'poster' => 'img/suvs/tahoe.png',
            'descripcion' => 'Descubre la imponente presencia y potencia de la Nueva Chevrolet Tahoe.'
        ],
        [
            'id' => 'traverse-spot',
            'titulo' => 'All-New Traverse',
            'src' => 'videos/traverse-spot.mp4',
            'poster' => 'img/suvs/traverse.png',
            'descripcion' => 'Espacio, elegancia y tecnología de última generación en la All-New Traverse.'
        ]
    ],
    'rsvp' => [
        'formulario_url' => 'https://forms.gle/ZMx54sLXi2kvEavt9',
        'whatsapp_numero' => '51966154210',
        'whatsapp_mensaje' => 'Hola MSA Automotriz, confirmo mi asistencia al lanzamiento oficial "Descubre el Nuevo Mundo SUV Chevrolet" en La Ensenada Hotel.'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $evento['titulo'] ?> · Chevrolet & MSA Automotriz</title>
    <meta name="description" content="Invitación oficial al lanzamiento exclusivo de la Nueva Generación de SUVs Chevrolet en Cajamarca. Domingo 13 de Septiembre, La Ensenada Hotel.">
    <meta property="og:title" content="DESCUBRE EL NUEVO MUNDO SUV — Chevrolet & MSA Automotriz">
    <meta property="og:description" content="Estás cordialmente invitado al lanzamiento oficial de la gama SUV Chevrolet 2026 en Cajamarca. Confirma tu asistencia.">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/svg+xml" href="img/logos/favicon-msa.svg?v=2">
    <link rel="shortcut icon" href="img/logos/favicon-msa.svg?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,700;0,800;0,900;1,700;1,800&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Syncopate:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
    <link rel="stylesheet" href="css/invitacion.css?v=3.2">
</head>
<body>

    <!-- 1. SPLASH INTRO -->
    <section id="splash">
        <canvas id="splash-canvas"></canvas>
        <div class="splash-content">
            <div class="splash-logos">
                <img src="img/logos/logo_chevrolet.png" alt="Chevrolet" class="splash-logo-chevy-img">
                <div class="splash-divider-bar"></div>
                <img src="img/logos/logo-msa-blanco.png" alt="MSA Automotriz" class="splash-logo-msa-img">
            </div>
            
            <div class="hero-title-lockup" style="margin-top: 10px; margin-bottom: 8px;">
                <div class="hero-invitacion-label" style="letter-spacing: 0.6em; margin-bottom: 10px;">I N V I T A C I Ó N</div>
                <div class="hero-descubre-label" style="letter-spacing: 0.38em; font-size: clamp(1.1rem, 2.6vw, 1.6rem);">D E S C U B R E &nbsp; E L &nbsp; N U E V O</div>
                <h1 class="hero-mundo-suv-title" style="font-size: clamp(2.2rem, 5.5vw, 3.8rem); margin-bottom: 8px;">
                    <span class="hero-word-mundo">MUNDO</span>
                    <span class="hero-bowtie-separator">
                        <img src="img/logos/chebrolet_icono.png" alt="Chevrolet" class="hero-title-bowtie-img">
                    </span>
                    <span class="hero-word-suv">SUV</span>
                </h1>
            </div>

            <div class="splash-experience-label">UNA EXPERIENCIA EXCLUSIVA PARA TODA LA FAMILIA</div>
            <p style="font-size: 0.88rem; color: #ced4da; letter-spacing: 0.14em; text-transform: uppercase; margin-bottom: 18px; font-weight: 700;">
                Lanzamiento Oficial · Cajamarca 2026
            </p>
            <div class="splash-car-preview">
                <img src="img/suvs/banner_evento.png" alt="Gama Chevrolet 2026" class="splash-car-img" style="filter: drop-shadow(0 16px 30px rgba(0,0,0,0.95));">
            </div>
            <button id="splashCtaBtn" class="splash-cta-btn" onclick="enterExperience()">
                DESCUBRIR EXPERIENCIA
            </button>
        </div>
    </section>

    <!-- 2. HERO -->
    <section class="hero-section" id="inicio" data-target-date="<?= $evento['fecha']['iso_target'] ?>">
        <div class="hero-bg-lines"></div>
        
        <div class="hero-top-nav">
            <div class="hero-brand-left">
                <img src="img/logos/logo_chevrolet.png" alt="Chevrolet" class="hero-brand-chevy-img">
            </div>
            <div class="hero-brand-right">
                <img src="img/logos/logo-msa-blanco.png" alt="MSA Automotriz" class="hero-logo-msa-img">
            </div>
        </div>

        <div class="hero-content">
            <?php if (!empty($invitado)): ?>
            <div class="hero-invited-name">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <span>Invitación Exclusiva para: <strong><?= $invitado ?></strong></span>
            </div>
            <?php endif; ?>

            <div class="hero-title-lockup">
                <div class="hero-invitacion-label">I N V I T A C I Ó N</div>
                <div class="hero-descubre-label">D E S C U B R E &nbsp; E L &nbsp; N U E V O</div>
                <h1 class="hero-mundo-suv-title">
                    <span class="hero-word-mundo">MUNDO</span>
                    <span class="hero-bowtie-separator">
                        <img src="img/logos/chebrolet_icono.png" alt="Chevrolet" class="hero-title-bowtie-img">
                    </span>
                    <span class="hero-word-suv">SUV</span>
                </h1>
            </div>

            <div class="hero-experience-label">UNA EXPERIENCIA EXCLUSIVA PARA TODA LA FAMILIA</div>
            <p class="hero-sub"><?= $evento['fecha']['dia_semana'] ?> <?= $evento['fecha']['dia'] ?> de <?= $evento['fecha']['mes'] ?> · <strong><?= $evento['fecha']['hora'] ?></strong> · <?= $evento['ubicacion']['lugar'] ?></p>

            <!-- SHOWCASE DE LAS SUVS EN EL HERO -->
            <div class="hero-stage-wrapper">
                <div class="hero-stage-glow"></div>
                <div class="hero-stage-podium">
                    <img src="img/suvs/banner_evento.png" alt="Nueva Gama Chevrolet 2026 — MSA Automotriz" class="hero-stage-img" loading="eager">
                    <div class="hero-stage-reflection"></div>
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

            <!-- Cuenta Regresiva VIP -->
            <div class="countdown-wrapper">
                <span class="countdown-caption">TIEMPO PARA EL LANZAMIENTO OFICIAL</span>
                <div class="countdown-box">
                    <div class="cd-card"><span class="cd-num" id="cd-days">00</span><small class="cd-lbl">DÍAS</small></div>
                    <div class="cd-divider">:</div>
                    <div class="cd-card"><span class="cd-num" id="cd-hours">00</span><small class="cd-lbl">HORAS</small></div>
                    <div class="cd-divider">:</div>
                    <div class="cd-card"><span class="cd-num" id="cd-minutes">00</span><small class="cd-lbl">MINUTOS</small></div>
                    <div class="cd-divider">:</div>
                    <div class="cd-card"><span class="cd-num" id="cd-seconds">00</span><small class="cd-lbl">SEGUNDOS</small></div>
                </div>
            </div>

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

    <!-- 3. DETALLES -->
    <div class="section-bleed" id="detalles">
        <div class="section-wrapper">
            <div class="sec-header">
                <span class="sec-pill">Coordenadas Oficiales</span>
                <h3 class="sec-title">HORA Y LUGAR</h3>
                <p class="sec-desc">Te esperamos en un entorno exclusivo para vivir la experiencia del lanzamiento más importante del año.</p>
            </div>
            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <span class="detail-tag">Fecha Oficial</span>
                    <div class="detail-main"><?= $evento['fecha']['dia_semana'] ?> <?= $evento['fecha']['dia'] ?></div>
                    <div class="detail-sub"><?= $evento['fecha']['mes'] ?> de <?= $evento['fecha']['anio'] ?></div>
                </div>
                <div class="detail-card">
                    <div class="detail-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <span class="detail-tag">Horario de Ingreso</span>
                    <div class="detail-main"><?= $evento['fecha']['hora'] ?></div>
                    <div class="detail-sub">Recepción & Cóctel de Bienvenida</div>
                </div>
                <div class="detail-card">
                    <div class="detail-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <span class="detail-tag">Ubicación</span>
                    <div class="detail-main"><?= $evento['ubicacion']['lugar'] ?></div>
                    <div class="detail-sub"><?= $evento['ubicacion']['direccion'] ?><br><small style="color: var(--chevy-gold); font-weight: 600;"><?= $evento['ubicacion']['referencia'] ?></small></div>
                </div>
            </div>
            <div class="cta-actions-row">
                <a href="<?= $evento['ubicacion']['maps_url'] ?>" target="_blank" rel="noopener" class="btn-pill btn-primary-red">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>GOOGLE MAPS</span>
                </a>
                <a href="<?= $evento['ubicacion']['waze_url'] ?>" target="_blank" rel="noopener" class="btn-pill btn-secondary-dark">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                    <span>ABRIR EN WAZE</span>
                </a>
                <button id="btnGoogleCal" class="btn-pill btn-secondary-dark">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    <span>AGREGAR A CALENDARIO</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 4. GALERÍA VIDEOS & BENEFICIOS CLUB PREMIUM -->
    <section class="section-wrapper" id="videos">
        <div class="sec-header">
            <div class="club-premium-header-wrap">
                <img src="img/logos/club-premium.png" alt="Club Premium Chevrolet" class="club-premium-badge-img">
            </div>
            <p class="sec-desc" style="margin-top: 14px;">Beneficios exclusivos para propietarios de la nueva gama SUV Chevrolet 2026.</p>
        </div>

        <!-- Beneficios VIP Club Premium (Directos y Concisos) -->
        <div class="club-benefits-grid">
            <?php foreach ($evento['club_premium']['beneficios'] as $ben): ?>
            <div class="club-benefit-card">
                <div class="club-benefit-badge"><?= $ben['numero'] ?></div>
                <div class="club-benefit-info">
                    <div class="club-benefit-title"><?= $ben['titulo'] ?></div>
                    <div class="club-benefit-detail"><?= $ben['detalle'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="video-showcase-container">
            <div class="video-main-player-wrap">
                <video id="mainVideoElement" class="video-main-element" preload="metadata" playsinline controls src="<?= $evento['videos'][0]['src'] ?>" poster="<?= $evento['videos'][0]['poster'] ?>">Tu navegador no soporta video.</video>
                <div id="videoPlayOverlay" class="video-play-overlay">
                    <div class="video-play-button-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"/></svg>
                    </div>
                </div>
            </div>
            <div class="video-tabs-list">
                <?php foreach ($evento['videos'] as $index => $vid): ?>
                <div class="video-tab-item <?= $index === 0 ? 'active' : '' ?>" data-video-src="<?= $vid['src'] ?>" data-video-poster="<?= $vid['poster'] ?>">
                    <div class="video-tab-badge"><?= $index + 1 ?></div>
                    <div style="flex: 1;">
                        <div class="video-tab-title"><?= $vid['titulo'] ?></div>
                        <div class="video-tab-dur"><?= $vid['descripcion'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. MASTER SHOWROOM INTERACTIVO (5 MODELOS) -->
    <section class="section-wrapper" id="showroom">
        <div class="sec-header" style="margin-bottom: 24px;">
            <h3 class="sec-title">GAMA CHEVROLET 2026</h3>
        </div>

        <!-- Selector de Modelos Oficiales (5 Vehículos con Vista 3D y HD) -->
        <div class="showroom-tabs-nav">
            <button class="showroom-tab-btn active" data-model="tahoe" onclick="selectShowroomModel('tahoe')">
                <span class="st-name">TAHOE</span>
            </button>
            <button class="showroom-tab-btn" data-model="traverse" onclick="selectShowroomModel('traverse')">
                <span class="st-name">TRAVERSE</span>
            </button>
            <button class="showroom-tab-btn" data-model="suburban" onclick="selectShowroomModel('suburban')">
                <span class="st-name">SUBURBAN</span>
            </button>
            <button class="showroom-tab-btn" data-model="silverado" onclick="selectShowroomModel('silverado')">
                <span class="st-name">SILVERADO</span>
            </button>
            <button class="showroom-tab-btn" data-model="colorado" onclick="selectShowroomModel('colorado')">
                <span class="st-name">COLORADO</span>
            </button>
        </div>

        <div class="showroom-3d-container">
            <!-- Escenario Interactivo -->
            <div class="showroom-3d-stage">
                <div class="showroom-stage-topbar">
                    <div id="showroomModeSwitcher" class="showroom-mode-switcher">
                        <button id="btnMode3D" class="sr-mode-btn active" onclick="setShowroomViewMode('3d')">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                            <span>VISTA 360°</span>
                        </button>
                        <button id="btnModePhoto" class="sr-mode-btn" onclick="setShowroomViewMode('photo')">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                            <span>FOTO HD</span>
                        </button>
                    </div>
                </div>

                <!-- Visor 3D con Iluminación de Estudio HD -->
                <div id="stage3DContainer" class="showroom-viewport-3d">
                    <model-viewer id="tahoeModelViewer"
                                  src="modelos/chevrolet_tahoe.glb"
                                  alt="Chevrolet Tahoe 2026 Modelo 3D"
                                  poster="img/suvs/tahoe.png"
                                  auto-rotate
                                  auto-rotate-delay="1500"
                                  rotation-per-second="18deg"
                                  camera-controls
                                  touch-action="pan-y"
                                  shadow-intensity="1.6"
                                  shadow-softness="0.75"
                                  exposure="1.85"
                                  environment-image="neutral"
                                  tone-mapping="neutral"
                                  camera-orbit="45deg 75deg 105%"
                                  field-of-view="30deg"
                                  ar
                                  ar-modes="webxr scene-viewer quick-look"
                                  class="showroom-3d-canvas">
                        <button slot="ar-button" class="btn-ar-action">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                            <span>VER EN TU ESPACIO (AR)</span>
                        </button>
                        <div id="modelLoaderProgressBar" class="model-loading-bar" slot="progress-bar">
                            <div class="model-loading-fill"></div>
                        </div>
                    </model-viewer>

                    <div class="showroom-3d-controls-overlay">
                        <div class="camera-angles-pills">
                            <button class="camera-pill active" onclick="setCameraAngle('45deg 75deg 105%')">PERSPECTIVA</button>
                            <button class="camera-pill" onclick="setCameraAngle('0deg 75deg 100%')">FRONTAL</button>
                            <button class="camera-pill" onclick="setCameraAngle('90deg 80deg 100%')">LATERAL</button>
                            <button class="camera-pill" onclick="setCameraAngle('180deg 75deg 100%')">POSTERIOR</button>
                            <button class="camera-pill" onclick="setCameraAngle('0deg 20deg 110%')">SUPERIOR</button>
                        </div>
                        <div class="showroom-utility-actions">
                            <button id="btnToggleRotate" class="btn-tool-icon" onclick="toggleAutoRotate()" title="Pausar/Reanudar Giro Automático">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                <span id="txtToggleRotate">Auto-Giro: ON</span>
                            </button>
                            <button class="btn-tool-icon" onclick="resetCameraView()" title="Restablecer Posición">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path></svg>
                                <span>Reiniciar</span>
                            </button>
                        </div>
                    </div>

                    <div class="showroom-touch-hint">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>
                        <span>Toca y arrastra para rotar 360° · Pellizca para zoom</span>
                    </div>
                </div>

                <!-- Visor Fotografía HD -->
                <div id="stagePhotoContainer" class="showroom-viewport-photo" style="display: none;">
                    <img id="stagePhotoImg" src="img/suvs/tahoe.png" alt="Chevrolet Tahoe 2026" class="stage-photo-img" loading="lazy">
                    <div class="stage-photo-gradient-overlay"></div>
                </div>

                <!-- Ribbon de Especificaciones Rápidas -->
                <div id="srStageRibbon" class="stage-specs-ribbon">
                    <div class="stage-ribbon-item">
                        <span class="sri-label">Motor</span>
                        <span class="sri-val">5.3L V8 EcoTec3</span>
                    </div>
                    <div class="stage-ribbon-item">
                        <span class="sri-label">Potencia</span>
                        <span class="sri-val">355 HP · 383 lb-pie</span>
                    </div>
                    <div class="stage-ribbon-item">
                        <span class="sri-label">Tracción</span>
                        <span class="sri-val">4WD con Air Ride</span>
                    </div>
                    <div class="stage-ribbon-item">
                        <span class="sri-label">Pantalla</span>
                        <span class="sri-val">Táctil de 17.7"</span>
                    </div>
                </div>
            </div>

            <!-- Ficha Técnica Lateral & Consulta -->
            <div class="showroom-specs-sidebar">
                <div class="showroom-specs-card">
                    <div>
                        <span id="srModelCategory" class="showroom-specs-badge">SUV FULL-SIZE DE LUJO</span>
                        <h4 id="srModelTitle" class="showroom-specs-title">Chevrolet Tahoe 2026</h4>
                        <p id="srModelSubtitle" class="showroom-specs-desc">El Ícono Supremo del Lujo, Presencia y Potencia V8</p>

                        <div id="srFeaturesList" class="showroom-features-list">
                            <div class="showroom-feature-item">
                                <div class="sf-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                                </div>
                                <div>
                                    <div class="sf-title">Motor 5.3L EcoTec3 V8</div>
                                    <div class="sf-sub">355 HP de potencia y torque imponente para cualquier terreno.</div>
                                </div>
                            </div>
                            <div class="showroom-feature-item">
                                <div class="sf-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                </div>
                                <div>
                                    <div class="sf-title">Pantalla Táctil de 17.7"</div>
                                    <div class="sf-sub">Centro de infoentretenimiento envolvente con Google Built-in.</div>
                                </div>
                            </div>
                            <div class="showroom-feature-item">
                                <div class="sf-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                </div>
                                <div>
                                    <div class="sf-title">Suspensión Adaptativa Air Ride</div>
                                    <div class="sf-sub">Ajuste automático de altura y confort supremo de marcha.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="showroom-sidebar-actions" style="margin-top: 24px; display: flex; flex-direction: column; gap: 10px;">
                        <?php
                            $tahoeWaMsg = urlencode("Hola MSA Automotriz, deseo recibir asesoría e información exclusiva sobre la Chevrolet Tahoe del lanzamiento oficial 2026.");
                            $tahoeWaUrl = "https://wa.me/" . ($evento['rsvp']['whatsapp_numero'] ?? '51966154210') . "?text=" . $tahoeWaMsg;
                        ?>
                        <a id="srInquireBtn" href="<?= $tahoeWaUrl ?>" target="_blank" rel="noopener" data-phone="<?= $evento['rsvp']['whatsapp_numero'] ?? '51966154210' ?>" class="btn-pill btn-primary-red" style="width: 100%;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.652c1.746.951 3.71 1.452 5.71 1.453h.005c6.554 0 11.89-5.335 11.893-11.893a11.82 11.82 0 00-3.48-8.413z"/></svg>
                            <span>CONSULTAR POR CHEVROLET TAHOE</span>
                        </a>
                        <a href="#confirmacion" class="btn-pill btn-secondary-dark" style="width: 100%;">
                            <span>CONFIRMAR MI ASISTENCIA</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. DRESS CODE -->
    <section class="section-wrapper" id="vestimenta">
        <div class="sec-header">
            <span class="sec-pill">Etiqueta & Estilo</span>
            <h3 class="sec-title">CÓDIGO DE VESTIMENTA</h3>
        </div>
        <div class="dress-code-card">
            <div class="detail-icon-box" style="margin-bottom: 16px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#eaa11f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/></svg>
            </div>
            <h4 class="dress-code-name"><?= $evento['dress_code']['tipo'] ?></h4>
            <p class="dress-code-desc"><?= $evento['dress_code']['descripcion'] ?></p>
            <div style="font-size: 0.8rem; font-weight: 700; letter-spacing: 0.15em; color: var(--chevy-gold); text-transform: uppercase; margin-bottom: 16px;">Paleta de Tonos Sugerida</div>
            <div class="dress-swatches-grid">
                <?php foreach ($evento['dress_code']['colores'] as $c): ?>
                <div class="swatch-item">
                    <div class="swatch-circle" style="background-color: <?= $c['hex'] ?>;"></div>
                    <span class="swatch-label"><?= $c['nombre'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 7. CONFIRMACIÓN RSVP -->
    <div class="rsvp-wrapper" id="confirmacion">
        <div class="rsvp-box">
            <span class="sec-pill">Confirmación Requerida</span>
            <h3 class="sec-title" style="margin-top: 10px;">ASEGURA TU LUGAR</h3>
            <p class="rsvp-p">Sé parte del evento automotriz más exclusivo de Cajamarca. Por motivos de aforo y protocolo, le solicitamos confirmar su asistencia.</p>
            <div class="cta-actions-row" style="margin-bottom: 20px;">
                <a href="<?= $evento['rsvp']['formulario_url'] ?>" target="_blank" rel="noopener" class="btn-pill btn-primary-red">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    <span>FORMULARIO DE REGISTRO</span>
                </a>
                <?php
                    $waMsg = urlencode($evento['rsvp']['whatsapp_mensaje'] . (!empty($invitado) ? ' Invitado: ' . $invitado : ''));
                    $waUrl = 'https://wa.me/' . $evento['rsvp']['whatsapp_numero'] . '?text=' . $waMsg;
                ?>
                <a href="<?= $waUrl ?>" target="_blank" rel="noopener" class="btn-pill btn-wa-green">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.652c1.746.951 3.71 1.452 5.71 1.453h.005c6.554 0 11.89-5.335 11.893-11.893a11.82 11.82 0 00-3.48-8.413z"/></svg>
                    <span>CONFIRMAR POR WHATSAPP</span>
                </a>
            </div>
            <small style="color: var(--text-muted); font-size: 0.8rem; letter-spacing: 0.05em;">Cupos limitados · Invitación personal e intransferible.</small>
        </div>
    </div>

    <!-- 8. FOOTER -->
    <footer class="site-footer">
        <div class="footer-logos">
            <img src="img/logos/logo_chevrolet.png" alt="Chevrolet" class="footer-logo-chevy-img">
            <div style="width: 1px; height: 28px; background: var(--color-border-subtle);"></div>
            <img src="img/logos/logo-msa-blanco.png" alt="MSA Automotriz" class="footer-logo-msa-img">
        </div>
        <p class="footer-copy">© 2026 MSA Automotriz · Concesionario Oficial Chevrolet · Todos los derechos reservados.</p>
    </footer>



    <script src="js/splash.js?v=2.1"></script>
    <script src="js/countdown.js?v=2.1"></script>
    <script src="js/video-gallery.js?v=2.1"></script>
    <script src="js/showroom-3d.js?v=2.1"></script>
    <script src="js/audio.js?v=2.1"></script>
    <script src="js/calendar.js?v=2.1"></script>
    <script src="js/app.js?v=2.1"></script>
</body>
</html>
