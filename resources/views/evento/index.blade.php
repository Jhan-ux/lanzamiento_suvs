<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $evento['titulo'] ?? 'DESCUBRE EL NUEVO MUNDO SUV' }} · Chevrolet & MSA Automotriz</title>
    
    {{-- Meta Tags SEO & Open Graph (Para compartir en WhatsApp y Redes Sociales) --}}
    <meta name="description" content="Invitación oficial al lanzamiento exclusivo de la Nueva Generación de SUVs Chevrolet en Cajamarca. Domingo 13 de Septiembre, La Ensenada Hotel.">
    <meta property="og:title" content="DESCUBRE EL NUEVO MUNDO SUV — Chevrolet & MSA Automotriz">
    <meta property="og:description" content="Estás cordialmente invitado al lanzamiento oficial de la gama SUV Chevrolet 2026 en Cajamarca. Confirma tu asistencia.">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#090a0d">

    {{-- Favicon Oficial MSA Automotriz --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/logos/favicon-msa.svg') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('img/logos/favicon-msa.svg') }}?v=2">

    {{-- Google Fonts Oficiales MSA Automotriz --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,700;0,800;0,900;1,700;1,800&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Syncopate:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Visor 3D Interactivo Oficial de Google --}}
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>

    {{-- Hoja de Estilos Principal --}}
    <link rel="stylesheet" href="{{ asset('css/invitacion.css') }}?v=3.2">
</head>
<body>

    {{-- 1. Intro Splash Screen --}}
    @include('evento.partials.splash')

    {{-- 2. Portada Hero con Cuenta Regresiva --}}
    @include('evento.partials.hero')

    {{-- 3. Detalles de Fecha, Hora y Ubicación con GPS / Calendario --}}
    @include('evento.partials.detalles')

    {{-- 4. Galería Interactiva de Videos HD & Beneficios Club Premium --}}
    @include('evento.partials.galeria-videos')

    {{-- 5. Showroom Master Interactivo 2026 (5 Modelos: Tahoe 3D/HD, Traverse, Suburban, Silverado, Colorado) --}}
    @include('evento.partials.showroom-3d')

    {{-- 7. Código de Vestimenta (Business Casual) --}}
    @include('evento.partials.dresscode')

    {{-- 8. Confirmación de Asistencia (Formulario & WhatsApp) --}}
    @include('evento.partials.rsvp')

    {{-- 9. Footer Institucional --}}
    @include('evento.partials.footer')



    {{-- Scripts Modulares con Cache Buster --}}
    <script src="{{ asset('js/splash.js') }}?v=2.1"></script>
    <script src="{{ asset('js/countdown.js') }}?v=2.1"></script>
    <script src="{{ asset('js/video-gallery.js') }}?v=2.1"></script>
    <script src="{{ asset('js/showroom-3d.js') }}?v=2.1"></script>
    <script src="{{ asset('js/audio.js') }}?v=2.1"></script>
    <script src="{{ asset('js/calendar.js') }}?v=2.1"></script>
    <script src="{{ asset('js/app.js') }}?v=2.1"></script>
</body>
</html>
