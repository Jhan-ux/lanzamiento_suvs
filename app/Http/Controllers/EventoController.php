<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Muestra la invitación digital del lanzamiento oficial
     * "DESCUBRE EL NUEVO MUNDO SUV — CHEVROLET · MSA AUTOMOTRIZ"
     */
    public function index(Request $request)
    {
        // Parámetro opcional para personalizar la invitación por URL: ?invitado=Nombre+Apellido
        $invitado = $request->query('invitado', null);
        
        // Datos oficiales del evento
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
                    'badge' => '3D · LUXURY V8',
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
                    'tipo' => 'mp4',
                    'src' => 'videos/tahoe-spot.mp4',
                    'poster' => 'img/suvs/tahoe.png',
                    'descripcion' => 'Descubre la imponente presencia y potencia de la Nueva Chevrolet Tahoe.'
                ],
                [
                    'id' => 'traverse-spot',
                    'titulo' => 'All-New Traverse',
                    'tipo' => 'mp4',
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

        return view('evento.index', compact('evento', 'invitado'));
    }
}
