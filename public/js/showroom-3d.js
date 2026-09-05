/**
 * MASTER SHOWROOM INTERACTIVO 2026 — CHEVROLET & MSA AUTOMOTRIZ
 * Control unificado de modelos (Tahoe, Traverse, Suburban, Silverado, Colorado con modelos 3D y HD),
 * cambio de vistas 3D / Fotografía HD, iluminación de estudio, controles de cámara orbital y actualización dinámica de especificaciones.
 */

// Base de datos oficial de los 5 modelos con soporte 3D y HD
const SHOWROOM_MODELS = {
    tahoe: {
        id: 'tahoe',
        nombre: 'Chevrolet Tahoe',
        titulo: 'Chevrolet Tahoe 2026',
        categoria: 'SUV Full-Size de Lujo',
        subtitulo: 'El Ícono Supremo del Lujo, Presencia y Potencia V8',
        badge: '3D · LUXURY V8',
        has3D: true,
        model3D: 'modelos/chevrolet_tahoe.glb',
        img: 'img/suvs/tahoe.png',
        ribbon: [
            { label: 'Motor', val: '5.3L V8 EcoTec3' },
            { label: 'Potencia', val: '355 HP · 383 lb-pie' },
            { label: 'Tracción', val: '4WD con Air Ride' },
            { label: 'Pantalla', val: 'Táctil de 17.7"' }
        ],
        features: [
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                title: 'Motor 5.3L EcoTec3 V8',
                desc: '355 HP de potencia y torque imponente para cualquier terreno.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
                title: 'Pantalla Táctil de 17.7"',
                desc: 'Centro de infoentretenimiento envolvente con Google Built-in.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
                title: 'Suspensión Adaptativa Air Ride',
                desc: 'Ajuste automático de altura y confort supremo de marcha.'
            }
        ]
    },
    traverse: {
        id: 'traverse',
        nombre: 'All-New Traverse',
        titulo: 'All-New Traverse 2026',
        categoria: 'SUV Premium Familiar',
        subtitulo: 'Espacio, Elegancia y Tecnología de Nueva Generación',
        badge: '3D · ALL-NEW',
        has3D: true,
        model3D: 'modelos/chevrolet_traverse.glb',
        img: 'img/suvs/traverse.png',
        ribbon: [
            { label: 'Motor', val: '2.5L Turbo High-Output' },
            { label: 'Potencia', val: '328 HP · 8 vel.' },
            { label: 'Tracción', val: 'AWD Inteligente' },
            { label: 'Capacidad', val: '3 Filas Smart Slide' }
        ],
        features: [
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>',
                title: 'Motor 2.5L Turbo High-Output',
                desc: '328 HP y 326 lb-pie con transmisión automática de 8 velocidades.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
                title: 'Pantalla Best-in-Class de 17.7"',
                desc: 'El display panorámico más grande y avanzado de su categoría.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                title: 'Espacio Familiar de 3 Filas',
                desc: 'Asientos tipo capitán con acceso inteligente Smart Slide y confort VIP.'
            }
        ]
    },
    suburban: {
        id: 'suburban',
        nombre: 'Chevrolet Suburban',
        titulo: 'Chevrolet Suburban 2026',
        categoria: 'SUV Ejecutiva Presidencial',
        subtitulo: 'La Máxima Expresión en Habitabilidad, Espacio y Confort',
        badge: '3D · FLAGSHIP',
        has3D: true,
        model3D: 'modelos/chevrolet_suburban.glb',
        img: 'img/suvs/suburban.png',
        ribbon: [
            { label: 'Motor', val: 'V8 EcoTec3 Flagship' },
            { label: 'Capacidad', val: 'Máximo Espacio de Carga' },
            { label: 'Tracción', val: 'Autotrac 4WD Activa' },
            { label: 'Cockpit', val: 'Pantalla 17.7" + Clúster 11"' }
        ],
        features: [
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                title: 'Poder V8 de Alto Rendimiento',
                desc: 'Máxima capacidad de arrastre con chasis de alta rigidez estructural.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
                title: 'Cockpit Digital Ultra Panorámico',
                desc: 'Pantalla táctil de 17.7" acompañada de clúster instrumental digital de 11".'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h12v4"></path><path d="M4 6v12a2 2 0 0 0 2 2h14v-4"></path><path d="M18 12a2 2 0 0 0-2 2v4h4v-4a2 2 0 0 0-2-2z"></path></svg>',
                title: 'Volumen Máximo de Carga VIP',
                desc: 'El espacio de carga más generoso para toda la familia y equipaje sin límites.'
            }
        ]
    },
    silverado: {
        id: 'silverado',
        nombre: 'Chevrolet Silverado',
        titulo: 'Chevrolet Silverado 2026',
        categoria: 'Pickup Full-Size de Alta Gama',
        subtitulo: 'Poder Inquebrantable con Acabados de Lujo High Country',
        badge: '3D · V8 TRUCK',
        has3D: true,
        model3D: 'modelos/chevrolet_silverado.glb',
        img: 'img/suvs/silverado.png',
        ribbon: [
            { label: 'Motor', val: '5.3L / 6.2L EcoTec3 V8' },
            { label: 'Tracción', val: '4x4 con Bloqueo Aut.' },
            { label: 'Tolva', val: 'Durabed Multi-Flex' },
            { label: 'Cámaras', val: '14 Vistas HD' }
        ],
        features: [
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
                title: 'Motor V8 Legendario',
                desc: 'Poder y durabilidad legendaria para las rutas y tareas más exigentes.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>',
                title: 'Pantalla Horizontal de 13.4"',
                desc: 'Display multimedia de alta definición con Google Integrado y Apple CarPlay.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 21 16z"></path></svg>',
                title: 'Tolva Durabed & Multi-Flex',
                desc: 'Acero de ultra alta resistencia con compuerta de 6 posiciones multifunción.'
            }
        ]
    },
    colorado: {
        id: 'colorado',
        nombre: 'Chevrolet Colorado',
        titulo: 'Chevrolet Colorado 2026',
        categoria: 'Pickup Mediana Off-Road Premium',
        subtitulo: 'Rendimiento Extremo, Agilidad y Conectividad Total',
        badge: '3D · TURBO 4X4',
        has3D: true,
        model3D: 'modelos/chevrolet_colorado.glb',
        img: 'img/suvs/colorado.png',
        ribbon: [
            { label: 'Motor', val: '2.7L Turbo High-Output' },
            { label: 'Torque', val: '430 lb-pie · 310 HP' },
            { label: 'Modos', val: '5 Modos Off-Road' },
            { label: 'Compuerta', val: 'StowFlex Hermética' }
        ],
        features: [
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>',
                title: 'Motor 2.7L Turbo High-Output',
                desc: '310 HP y demoledor torque de 430 lb-pie para dominar cualquier terreno.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>',
                title: 'Selector con 5 Modos de Manejo',
                desc: 'Tracción 4WD calibrada para Normal, Remolque, Todo Terreno, Terreno y Baja.'
            },
            {
                icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D90429" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>',
                title: 'Compuerta Trasera StowFlex',
                desc: 'Innovador compartimiento de almacenamiento hermético integrado en el portón.'
            }
        ]
    }
};

let currentActiveModel = 'tahoe';
let currentViewMode = '3d'; // '3d' o 'photo'

document.addEventListener('DOMContentLoaded', () => {
    initShowroom();
});

/**
 * Inicialización de eventos del Showroom y ModelViewer
 */
function initShowroom() {
    const viewer = document.getElementById('tahoeModelViewer');
    if (viewer) {
        // Control de barra de progreso del 3D
        viewer.addEventListener('progress', (e) => {
            const progressBar = document.getElementById('modelLoaderProgressBar');
            const fill = progressBar ? progressBar.querySelector('.model-loading-fill') : null;
            if (fill) {
                fill.style.width = `${e.detail.totalProgress * 100}%`;
                if (progressBar.style.opacity === '0') {
                    progressBar.style.opacity = '1';
                }
            }
            if (e.detail.totalProgress === 1 && progressBar) {
                setTimeout(() => {
                    progressBar.style.opacity = '0';
                }, 300);
            }
        });

        // Asegurar iluminación y tono de color al cargar el modelo
        viewer.addEventListener('load', () => {
            const progressBar = document.getElementById('modelLoaderProgressBar');
            if (progressBar) progressBar.style.opacity = '0';
        });
    }

    // Activar primer modelo por defecto (Tahoe)
    selectShowroomModel('tahoe');
}

/**
 * Cambia el modelo activo en el Master Showroom
 */
window.selectShowroomModel = function(modelId) {
    const model = SHOWROOM_MODELS[modelId];
    if (!model) return;

    currentActiveModel = modelId;

    // 1. Actualizar estado visual de los tabs superiores
    const tabButtons = document.querySelectorAll('.showroom-tab-btn');
    tabButtons.forEach(btn => {
        if (btn.getAttribute('data-model') === modelId) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });

    // 2. Actualizar el modelo 3D en el visor
    const viewer = document.getElementById('tahoeModelViewer');
    const progressBar = document.getElementById('modelLoaderProgressBar');
    if (progressBar) {
        progressBar.style.opacity = '1';
        const fill = progressBar.querySelector('.model-loading-fill');
        if (fill) fill.style.width = '10%';
    }

    if (viewer && model.model3D) {
        viewer.src = model.model3D;
        viewer.poster = model.img;
        viewer.alt = `${model.titulo} Modelo 3D`;
        viewer.cameraOrbit = '45deg 75deg 105%';
        viewer.exposure = 1.85;
        viewer.shadowSoftness = 0.75;
        viewer.shadowIntensity = 1.6;
        viewer.resetTurntableRotation();
    }

    // 3. Actualizar imagen en el contenedor de foto
    const stagePhotoImg = document.getElementById('stagePhotoImg');
    if (stagePhotoImg) {
        stagePhotoImg.src = model.img;
        stagePhotoImg.alt = model.titulo;
    }

    // 4. Actualizar la barra lateral de especificaciones
    const catEl = document.getElementById('srModelCategory');
    const titleEl = document.getElementById('srModelTitle');
    const subEl = document.getElementById('srModelSubtitle');
    const featuresListEl = document.getElementById('srFeaturesList');
    const ribbonEl = document.getElementById('srStageRibbon');
    const ctaBtn = document.getElementById('srInquireBtn');

    if (catEl) catEl.textContent = model.categoria;
    if (titleEl) titleEl.textContent = model.titulo;
    if (subEl) subEl.textContent = model.subtitulo;

    // Actualizar Ribbon inferior del escenario
    if (ribbonEl && model.ribbon) {
        ribbonEl.innerHTML = model.ribbon.map(item => `
            <div class="stage-ribbon-item">
                <span class="sri-label">${item.label}</span>
                <span class="sri-val">${item.val}</span>
            </div>
        `).join('');
    }

    // Actualizar lista de 3 características destacadas
    if (featuresListEl && model.features) {
        featuresListEl.innerHTML = model.features.map(f => `
            <div class="showroom-feature-item">
                <div class="sf-icon">${f.icon}</div>
                <div>
                    <div class="sf-title">${f.title}</div>
                    <div class="sf-sub">${f.desc}</div>
                </div>
            </div>
        `).join('');
    }

    // Actualizar enlace de WhatsApp con el modelo seleccionado
    if (ctaBtn) {
        const phone = ctaBtn.getAttribute('data-phone') || '51966154210';
        const msg = encodeURIComponent(`Hola MSA Automotriz, deseo recibir asesoría e información exclusiva sobre la ${model.nombre} del lanzamiento oficial 2026.`);
        ctaBtn.href = `https://wa.me/${phone}?text=${msg}`;
        const spanTxt = ctaBtn.querySelector('span');
        if (spanTxt) spanTxt.textContent = `CONSULTAR POR ${model.nombre.toUpperCase()}`;
    }
};

/**
 * Alterna entre modo 3D y modo Fotografía HD
 */
window.setShowroomViewMode = function(mode) {
    currentViewMode = mode;
    const stage3D = document.getElementById('stage3DContainer');
    const stagePhoto = document.getElementById('stagePhotoContainer');
    const btn3D = document.getElementById('btnMode3D');
    const btnPhoto = document.getElementById('btnModePhoto');

    if (mode === '3d') {
        if (stage3D) stage3D.style.display = 'block';
        if (stagePhoto) stagePhoto.style.display = 'none';
        if (btn3D) btn3D.classList.add('active');
        if (btnPhoto) btnPhoto.classList.remove('active');
    } else {
        if (stage3D) stage3D.style.display = 'none';
        if (stagePhoto) stagePhoto.style.display = 'flex';
        if (btn3D) btn3D.classList.remove('active');
        if (btnPhoto) btnPhoto.classList.add('active');
    }
};

/**
 * Cambia el ángulo orbital de la cámara (para el visor 3D)
 */
window.setCameraAngle = function(orbitString) {
    const viewer = document.getElementById('tahoeModelViewer');
    if (!viewer) return;

    viewer.cameraOrbit = orbitString;
    viewer.jumpCameraToGoal();

    // Actualizar clase activa en los botones de ángulo
    const buttons = document.querySelectorAll('.camera-pill');
    buttons.forEach(btn => {
        if (btn.getAttribute('onclick')?.includes(orbitString)) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
};

/**
 * Activa / Desactiva el giro automático del modelo 3D
 */
window.toggleAutoRotate = function() {
    const viewer = document.getElementById('tahoeModelViewer');
    const txt = document.getElementById('txtToggleRotate');
    if (!viewer) return;

    viewer.autoRotate = !viewer.autoRotate;
    if (txt) {
        txt.textContent = viewer.autoRotate ? 'Auto-Giro: ON' : 'Auto-Giro: OFF';
    }
};

/**
 * Restablece la vista por defecto de la cámara 3D
 */
window.resetCameraView = function() {
    window.setCameraAngle('45deg 75deg 105%');
};
