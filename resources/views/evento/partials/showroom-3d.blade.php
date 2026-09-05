<section class="section-wrapper" id="showroom">
    <div class="sec-header" style="margin-bottom: 24px;">
        <h3 class="sec-title">GAMA CHEVROLET 2026</h3>
    </div>

    {{-- Selector de Modelos Oficiales (5 Vehículos con Vista 3D y HD) --}}
    <div class="showroom-tabs-nav">
        <button class="showroom-tab-btn active" data-model="tahoe" onclick="selectShowroomModel('tahoe')">
            <span class="st-tag">3D · LUXURY V8</span>
            <span class="st-name">TAHOE</span>
        </button>
        <button class="showroom-tab-btn" data-model="traverse" onclick="selectShowroomModel('traverse')">
            <span class="st-tag">3D · ALL-NEW</span>
            <span class="st-name">TRAVERSE</span>
        </button>
        <button class="showroom-tab-btn" data-model="suburban" onclick="selectShowroomModel('suburban')">
            <span class="st-tag">3D · FLAGSHIP</span>
            <span class="st-name">SUBURBAN</span>
        </button>
        <button class="showroom-tab-btn" data-model="silverado" onclick="selectShowroomModel('silverado')">
            <span class="st-tag">3D · V8 TRUCK</span>
            <span class="st-name">SILVERADO</span>
        </button>
        <button class="showroom-tab-btn" data-model="colorado" onclick="selectShowroomModel('colorado')">
            <span class="st-tag">3D · TURBO 4X4</span>
            <span class="st-name">COLORADO</span>
        </button>
    </div>

    {{-- Grid Principal del Showroom --}}
    <div class="showroom-3d-container">
        {{-- Escenario Interactivo (3D / Fotografía HD) --}}
        <div class="showroom-3d-stage">
            {{-- Barra Superior de Modos de Vista --}}
            <div class="showroom-stage-topbar">
                {{-- Selector de Modo (Visible para modelos con 3D) --}}
                <div id="showroomModeSwitcher" class="showroom-mode-switcher">
                    <button id="btnMode3D" class="sr-mode-btn active" onclick="setShowroomViewMode('3d')">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                        <span>VISTA 3D 360°</span>
                    </button>
                    <button id="btnModePhoto" class="sr-mode-btn" onclick="setShowroomViewMode('photo')">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        <span>FOTO HD DE ESTUDIO</span>
                    </button>
                </div>
            </div>

            {{-- Contenedor del Visor 3D con Iluminación de Estudio HD --}}
            <div id="stage3DContainer" class="showroom-viewport-3d">
                <model-viewer id="tahoeModelViewer"
                              src="{{ asset('modelos/chevrolet_tahoe.glb') }}"
                              alt="Chevrolet Tahoe 2026 Modelo 3D"
                              poster="{{ asset('img/suvs/tahoe.png') }}"
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
                    
                    {{-- Botón AR para Móviles --}}
                    <button slot="ar-button" class="btn-ar-action">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                        <span>VER EN TU ESPACIO (AR)</span>
                    </button>

                    {{-- Barra de Carga --}}
                    <div id="modelLoaderProgressBar" class="model-loading-bar" slot="progress-bar">
                        <div class="model-loading-fill"></div>
                    </div>
                </model-viewer>

                {{-- Controles de Cámara 3D Superpuestos --}}
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

                {{-- Guía Táctil --}}
                <div class="showroom-touch-hint">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>
                    <span>Toca y arrastra para rotar 360° · Pellizca para zoom</span>
                </div>
            </div>

            {{-- Contenedor de Fotografía HD de Estudio --}}
            <div id="stagePhotoContainer" class="showroom-viewport-photo" style="display: none;">
                <img id="stagePhotoImg" src="{{ asset('img/suvs/tahoe.png') }}" alt="Chevrolet Tahoe 2026" class="stage-photo-img" loading="lazy">
                <div class="stage-photo-gradient-overlay"></div>
            </div>

            {{-- Ribbon de Especificaciones Rápidas en la base del escenario --}}
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

        {{-- Barra Lateral de Ficha Técnica & Consulta VIP --}}
        <div class="showroom-specs-sidebar">
            <div class="showroom-specs-card">
                <div>
                    <span id="srModelCategory" class="showroom-specs-badge">SUV FULL-SIZE DE LUJO</span>
                    <h4 id="srModelTitle" class="showroom-specs-title">Chevrolet Tahoe 2026</h4>
                    <p id="srModelSubtitle" class="showroom-specs-desc">
                        El Ícono Supremo del Lujo, Presencia y Potencia V8
                    </p>

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
                    <a id="srInquireBtn" href="https://wa.me/{{ $evento['rsvp']['whatsapp_numero'] ?? '51966154210' }}?text={{ urlencode('Hola MSA Automotriz, deseo recibir asesoría e información exclusiva sobre la Chevrolet Tahoe del lanzamiento oficial 2026.') }}" target="_blank" rel="noopener" data-phone="{{ $evento['rsvp']['whatsapp_numero'] ?? '51966154210' }}" class="btn-pill btn-primary-red" style="width: 100%;">
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
