@extends('front.layouts.zonix')

@section('content')
    @php
        $appStoreUrl = config('services.stores.app_store_url');
        $playStoreUrl = config('services.stores.play_store_url');
        $androidApkUrl = config('services.stores.android_apk_url');
        if ($playStoreUrl) {
            $androidDownloadUrl = $playStoreUrl;
            $androidIsDirectApk = false;
        } elseif ($androidApkUrl) {
            $androidDownloadUrl = str_starts_with($androidApkUrl, 'http')
                ? $androidApkUrl
                : url($androidApkUrl);
            $androidIsDirectApk = true;
        } else {
            $androidDownloadUrl = '';
            $androidIsDirectApk = false;
        }
        $heroVideoMp4 = 'assets/video/hero/hero-loop.mp4';
        $heroVideoWebm = 'assets/video/hero/hero-loop.webm';
        $heroVideoEnabled = file_exists(public_path($heroVideoMp4)) || file_exists(public_path($heroVideoWebm));
    @endphp
    <!-- Preloader (Restored) -->
    <div id="preloader" class="position-fixed top-0 start-0 w-100 h-100 bg-white d-flex align-items-center justify-content-center z-fixed-max">
        <div class="text-center animate-pulse">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Zonix Pharma" class="logo-preloader">
        </div>
    </div>
    
    <!-- Mobile Sticky Download Bar (Conversion) -->
    <div class="fixed-bottom bg-white border-top shadow-lg p-3 d-lg-none z-fixed-max d-flex align-items-center justify-content-between animate-slide-up d-none" id="mobileStickyCTA">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-2 btn-close-sticky" aria-label="Close" id="closeStickyBtn"></button>
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Zonix" class="logo-sticky-sm">
            <div>
                <p class="mb-0 font-black text-navy leading-none">Zonix Pharma</p>
                <p class="mb-0 text-xs text-slate-500">Tus medicinas a un clic</p>
            </div>
        </div>
        @if($androidDownloadUrl)
            <a href="{{ $androidDownloadUrl }}"
               @if($androidIsDirectApk) download="zonix-pharma.apk" @else target="_blank" rel="noopener noreferrer" @endif
               class="btn btn-zonix-primary rounded-pill px-4 font-bold small shadow-md text-decoration-none">
                Descargar
            </a>
        @else
            <button class="btn btn-zonix-primary rounded-pill px-4 font-bold small shadow-md" onclick="document.getElementById('download').scrollIntoView({behavior:'smooth'})">
                Descargar
            </button>
        @endif
    </div>

    <!-- Navbar -->
    <nav class="navbar-zonix d-flex align-items-center">
        <div class="container-zonix w-100 d-flex align-items-center justify-content-between">
            <!-- Brand -->
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Zonix Pharma" class="navbar-brand-logo">
            </a>

            <!-- Search Removed for Landing Page -->
            <div class="d-none d-md-block">
                <!-- Spacer or tagline could go here -->
            </div>

            <!-- Desktop Menu -->
            <div class="d-none d-lg-flex align-items-center gap-4">
                <a href="#categories" class="nav-link font-bold text-navy">Categorías</a>
                <a href="#offers" class="nav-link font-bold text-navy">En la App</a>
                <a href="#become-partner" class="nav-link font-bold text-navy">Ser Aliado</a>
            </div>

            <!-- Actions -->
            <div class="d-flex align-items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-ghost font-bold text-navy d-none d-lg-block">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-ghost font-bold text-navy d-none d-lg-block">Panel aliados</a>
                @endauth
                <a href="#download" class="btn btn-zonix-primary rounded-pill px-4 hover-scale d-none d-lg-block">
                    Descarga la App
                </a>
                <!-- Mobile Toggle -->
                <button class="btn btn-icon d-lg-none" id="mobileMenuBtn" aria-label="Abrir menú de navegación">
                    <span class="material-symbols-outlined fs-2 text-navy">menu</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-wrapper">
        {{-- Desktop: video/imagen full-bleed detrás del copy --}}
        <div class="hero-media-layer d-none d-lg-block">
            <div class="hero-particles"></div>
            <picture class="hero-fallback-media">
                <source srcset="{{ asset('assets/img/hero/desktop-pharmacy.webp') }}" type="image/webp">
                <img src="{{ asset('assets/img/hero/desktop-pharmacy.jpg') }}"
                     alt="" class="w-100 h-100 object-fit-cover" width="1920" height="1080"
                     fetchpriority="high" decoding="async">
            </picture>
            @if($heroVideoEnabled)
                <video class="hero-video w-100 h-100 object-fit-cover"
                       autoplay muted loop playsinline
                       poster="{{ asset('assets/img/hero/desktop-pharmacy.webp') }}"
                       aria-label="Red de personas conectadas con tranquilidad">
                    @if(file_exists(public_path($heroVideoWebm)))
                        <source src="{{ asset($heroVideoWebm) }}" type="video/webm">
                    @endif
                    @if(file_exists(public_path($heroVideoMp4)))
                        <source src="{{ asset($heroVideoMp4) }}" type="video/mp4">
                    @endif
                </video>
            @endif
            <div class="hero-overlay-full"></div>

            <div class="position-absolute bottom-0 end-0 m-4 p-3 premium-depth-card premium-depth-card--light shadow-xl hero-trust-card d-none d-lg-block">
                <div class="card-sheen" aria-hidden="true"></div>
                <div class="d-flex align-items-center gap-3 premium-depth-card-content">
                    <div class="rounded-circle bg-mint-soft text-teal-deep d-flex align-items-center justify-content-center hero-trust-icon">
                        <span class="material-symbols-outlined">verified</span>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-bold text-uppercase mb-0">Red verificada</p>
                        <p class="text-slate-900 font-bold mb-0">Farmacias aliadas en tu zona</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-inner">
            <div class="hero-left">
                <div class="hero-copy-max">
                    <span class="d-inline-block px-3 py-1 bg-white bg-opacity-10 text-white rounded-pill border border-white border-opacity-10 font-bold text-uppercase tracking-wider mb-4 text-xs">
                        Tu salud, con tranquilidad
                    </span>
                    <h1 class="text-hero-zonix font-black leading-none tracking-tight text-white mb-4 reveal text-depth-matte">
                        Cuida lo que importa. <br>
                        <span class="text-primary-zonix">Sin preocupaciones.</span>
                    </h1>
                    <p class="text-slate-300 text-lg text-sm-xl mb-5 leading-relaxed font-medium reveal reveal-delay-100 hero-subcopy">
                        Conectamos personas con farmacias aliadas de confianza. Pedí, validá y recibí — con la calma de saber que tu familia está cubierta.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        @if($appStoreUrl)
                            <a href="{{ $appStoreUrl }}" target="_blank" rel="noopener noreferrer" class="app-badge app-badge-depth">
                                <img src="{{ asset('assets/img/badges/app-store.png') }}" alt="Descargar en App Store" class="h-100">
                            </a>
                        @else
                            <a href="#" class="app-badge app-badge-depth" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                                <img src="{{ asset('assets/img/badges/app-store.png') }}" alt="Descargar en App Store — próximamente" class="h-100">
                            </a>
                        @endif
                        @if($androidDownloadUrl)
                            <a href="{{ $androidDownloadUrl }}"
                               @if($androidIsDirectApk) download="zonix-pharma.apk" @else target="_blank" rel="noopener noreferrer" @endif
                               class="app-badge app-badge-depth">
                                <img src="{{ asset('assets/img/badges/google-play.png') }}" alt="{{ $androidIsDirectApk ? 'Descargar APK Android' : 'Descargar en Google Play' }}" class="h-100">
                            </a>
                        @else
                            <a href="#" class="app-badge app-badge-depth" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                                <img src="{{ asset('assets/img/badges/google-play.png') }}" alt="Descargar en Google Play — próximamente" class="h-100">
                            </a>
                        @endif
                    </div>
                </div>

                <div class="blob-bg"></div>
            </div>

            <div class="hero-right">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-lg-none">
                    <picture>
                        <source srcset="{{ asset('assets/img/hero/mobile-pharmacy.webp') }}" type="image/webp">
                        <img src="{{ asset('assets/img/hero/mobile-pharmacy.jpg') }}"
                             alt="Personas conectadas con tranquilidad" class="w-100 h-100 object-fit-cover" width="800" height="1200">
                    </picture>
                    <div class="hero-overlay-mobile"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Social Proof Strip -->
    <section class="social-proof-strip">
        <div class="container-zonix">
            <div class="row social-proof-row g-3 g-md-4 justify-content-md-between align-items-center">
                <div class="col-12 col-md-auto">
                    <div class="social-stat reveal">
                        <div class="social-stat-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">verified</span>
                        </div>
                        <div class="social-stat-copy">
                            <div class="social-stat-number text-sm">Aliadas</div>
                            <div class="social-stat-label">Farmacias verificadas</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="social-stat reveal reveal-delay-100">
                        <div class="social-stat-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">medication</span>
                        </div>
                        <div class="social-stat-copy">
                            <div class="social-stat-number">OTC + Rx</div>
                            <div class="social-stat-label">Catálogo completo</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="social-stat reveal reveal-delay-200">
                        <div class="social-stat-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">timer</span>
                        </div>
                        <div class="social-stat-copy">
                            <div class="social-stat-number">Rápido</div>
                            <div class="social-stat-label">Entrega en tu zona</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="social-stat reveal reveal-delay-300">
                        <div class="social-stat-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">support_agent</span>
                        </div>
                        <div class="social-stat-copy">
                            <div class="social-stat-number text-sm">Humano</div>
                            <div class="social-stat-label">Horario extendido</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Audience Cards -->
    <section id="become-partner" class="position-relative section-audience-overlap">
        <div class="container-zonix">
            <div class="row g-4 g-lg-zonix">
                <div class="col-md-4">
                    <div class="card-audience reveal">
                        <div class="card-audience-sheen" aria-hidden="true"></div>
                        <div class="bg-gradient-glass"></div>
                        <div class="card-content">
                            <div class="card-audience-icon hover-lift-icon bg-primary-10 text-teal-deep">
                                <span class="material-symbols-outlined fs-2">local_pharmacy</span>
                            </div>
                            <h3 class="text-2xl font-bold text-navy mb-2">Pide ahora en la App</h3>
                            <p class="text-slate-600 mb-4 flex-grow-1">Accede a farmacias verificadas y recibe tus medicinas con entrega a domicilio.</p>
                            <button class="btn w-100 py-3 rounded-xl bg-slate-100 text-navy font-bold hover:bg-navy hover:text-white transition-colors border-0" onclick="document.getElementById('download').scrollIntoView({behavior:'smooth'})">
                                Pedir Ahora
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-audience reveal reveal-delay-100">
                        <div class="card-audience-sheen" aria-hidden="true"></div>
                        <div class="bg-gradient-glass"></div>
                        <div class="card-content">
                            <div class="card-audience-icon hover-lift-icon bg-blue-50 text-info">
                                <span class="material-symbols-outlined fs-2 text-blue-zonix">directions_bike</span>
                            </div>
                            <h3 class="text-2xl font-bold text-navy mb-2">Repartidor aliado</h3>
                            <p class="text-slate-600 mb-4 flex-grow-1">Entrega medicamentos con horario flexible y pagos puntuales.</p>
                            <a href="mailto:repartidores@zonixpharma.com" class="btn w-100 py-3 rounded-xl bg-slate-100 text-navy font-bold hover:bg-blue-zonix hover:text-white transition-colors border-0 text-decoration-none d-flex align-items-center justify-content-center">
                                Ser Repartidor
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-audience reveal reveal-delay-200">
                        <div class="card-audience-sheen" aria-hidden="true"></div>
                        <div class="bg-gradient-glass"></div>
                        <div class="card-content">
                            <div class="card-audience-icon hover-lift-icon bg-yellow-50 text-warning">
                                <span class="material-symbols-outlined fs-2 text-yellow">storefront</span>
                            </div>
                            <h3 class="text-2xl font-bold text-navy mb-2">Vende más con Zonix</h3>
                            <p class="text-slate-600 mb-4 flex-grow-1">Digitaliza tu farmacia y llega a nuevos pacientes hoy mismo.</p>
                            <a href="{{ route('login') }}" class="btn w-100 py-3 rounded-xl bg-slate-100 text-navy font-bold hover:bg-yellow hover:text-navy transition-colors border-0 text-decoration-none d-flex align-items-center justify-content-center">
                                Registrar Farmacia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $landingCategories = [
            ['slug' => 'analgesicos', 'label' => 'Analgésicos', 'icon' => 'medication'],
            ['slug' => 'antigripales', 'label' => 'Antigripales', 'icon' => 'coronavirus'],
            ['slug' => 'vitaminas', 'label' => 'Vitaminas', 'icon' => 'nutrition'],
            ['slug' => 'dermatologicos', 'label' => 'Dermatológicos', 'icon' => 'dermatology'],
            ['slug' => 'cuidado-infantil', 'label' => 'Cuidado infantil', 'icon' => 'child_care'],
            ['slug' => 'dispositivos-medicos', 'label' => 'Dispositivos médicos', 'icon' => 'monitor_heart'],
            ['slug' => 'primeros-auxilios', 'label' => 'Primeros auxilios', 'icon' => 'health_and_safety'],
        ];
        $landingPromos = [
            [
                'img' => 'farmacia-central.jpg',
                'alt' => 'Ejemplo ilustrativo — farmacia aliada OTC',
                'tag' => 'OTC',
                'tag_variant' => 'otc',
                'title' => 'Farmacia aliada A',
                'meta' => 'Medicinas • OTC • $$',
                'trust_icon' => 'verified',
                'trust_label' => 'Farmacia aliada',
                'shipping' => 'Envío Gratis',
                'shipping_free' => true,
            ],
            [
                'img' => 'drogueria-salud.jpg',
                'alt' => 'Ejemplo ilustrativo — droguería aliada OTC',
                'tag' => 'OTC',
                'tag_variant' => 'otc',
                'title' => 'Farmacia aliada B',
                'meta' => 'Vitaminas • OTC • $',
                'trust_icon' => 'verified',
                'trust_label' => 'Farmacia aliada',
                'shipping' => '$25 envío',
                'shipping_free' => false,
            ],
            [
                'img' => 'farmacia-norte.jpg',
                'alt' => 'Ejemplo ilustrativo — farmacia con Rx',
                'tag' => 'Verificada',
                'tag_variant' => 'verified',
                'title' => 'Farmacia aliada C',
                'meta' => 'Dermatológicos • OTC • $',
                'trust_icon' => 'prescriptions',
                'trust_label' => 'Rx disponible',
                'shipping' => 'Envío Gratis',
                'shipping_free' => true,
            ],
            [
                'img' => 'farmacia-express.jpg',
                'alt' => 'Ejemplo ilustrativo — farmacia aliada',
                'tag' => 'Envío rápido',
                'tag_variant' => 'fast',
                'title' => 'Farmacia aliada D',
                'meta' => 'Primeros auxilios • OTC • $$',
                'trust_icon' => 'verified',
                'trust_label' => 'Farmacia aliada',
                'shipping' => '$15 envío',
                'shipping_free' => false,
            ],
        ];
    @endphp

    <!-- Categories -->
    <section id="categories" class="py-5 section-categories">
        <div class="container-zonix">
            <div class="section-head section-head--row mb-4">
                <div class="section-head__copy">
                    <span class="section-head__kicker">Catálogo OTC</span>
                    <h2 class="section-head__title">Categorías de productos</h2>
                    <p class="section-head__subtitle mb-0">Explorá por tipo de producto en farmacias aliadas.</p>
                </div>
                <div class="d-flex gap-2 section-head__actions" id="catNavActions">
                    <button type="button" class="cat-nav-btn cat-nav-btn--outline" id="catBtnPrev" aria-label="Categorías anteriores" disabled><span class="material-symbols-outlined">arrow_back</span></button>
                    <button type="button" class="cat-nav-btn cat-nav-btn--filled" id="catBtnNext" aria-label="Categorías siguientes"><span class="material-symbols-outlined">arrow_forward</span></button>
                </div>
            </div>

            <div class="categories-scroll-wrap">
                <div class="categories-grid categories-track hide-scrollbar" id="categoriesContainer" role="list">
                    @foreach ($landingCategories as $category)
                        <a href="#offers" class="category-chip" role="listitem">
                            <span class="category-chip__icon" aria-hidden="true">
                                <span class="material-symbols-outlined">{{ $category['icon'] }}</span>
                            </span>
                            <span class="category-chip__label">{{ $category['label'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <p class="categories-footnote text-center mt-4 mb-0">
                <a href="#download" class="categories-cta-link">Explorar catálogo en la app</a>
            </p>
        </div>
    </section>

    <!-- Promotions -->
    <section id="offers" class="py-5 section-app-offers">
        <div class="container-zonix">
            <div class="section-head section-head--split mb-4">
                <div class="section-head__copy">
                    <span class="section-head__kicker">Marketplace</span>
                    <h2 class="section-head__title">Descubre en la App</h2>
                    <p class="section-head__subtitle mb-0">Explora farmacias aliadas y productos OTC desde la app. <span class="text-slate-400 text-sm">(Ejemplos ilustrativos)</span></p>
                </div>
                <span class="badge-app-only">
                    <span class="material-symbols-outlined" aria-hidden="true">smartphone</span>
                    Solo en la App
                </span>
            </div>

            <div class="row g-4">
                @foreach ($landingPromos as $promo)
                    <div class="col-sm-6 col-lg-zonix-3">
                        <a href="#download" class="card-promo-link">
                            <article class="card-promo">
                                <div class="card-promo-sheen" aria-hidden="true"></div>
                                <div class="card-promo-img-wrapper">
                                    <img src="{{ asset('assets/img/promos/' . $promo['img']) }}"
                                         alt="{{ $promo['alt'] }}" loading="lazy" width="400" height="250">
                                    <span class="card-promo-tag card-promo-tag--{{ $promo['tag_variant'] }}">{{ $promo['tag'] }}</span>
                                </div>
                                <div class="card-promo-body">
                                    <h3 class="font-bold text-navy fs-5 mb-1">{{ $promo['title'] }}</h3>
                                    <p class="text-slate-500 text-sm mb-3">{{ $promo['meta'] }}</p>
                                    <div class="card-promo-footer">
                                        <span class="card-promo-zone">Según zona</span>
                                        <div class="card-promo-footer__badges">
                                            <span class="card-promo-trust">
                                                <span class="material-symbols-outlined icon-xs" aria-hidden="true">{{ $promo['trust_icon'] }}</span>
                                                {{ $promo['trust_label'] }}
                                            </span>
                                            <span class="card-promo-shipping{{ $promo['shipping_free'] ? ' card-promo-shipping--free' : '' }}">{{ $promo['shipping'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-4 mt-md-5">
                <a href="#download" class="btn btn-zonix-primary btn-zonix-lg">Descargar la App</a>
            </div>
        </div>
    </section>

    <!-- Client / Phone Section -->
    <section id="phone-mockup" class="bg-white section-phone-mockup phone-section-grid-bg">
        <div class="container-zonix">
            <div class="row align-items-center gy-5 fix-overflow">
                <div class="col-12 col-lg-zonix-6 phone-mockup-col position-relative d-flex justify-content-center">
                    <div class="blob-bg blob-bg-centered"></div>
                    <div class="phone-mockup-stage">
                        <div class="iphone-bezel phone-mockup-tilt">
                            <div class="hardware-btn hardware-btn--vol-up" aria-hidden="true"></div>
                            <div class="hardware-btn hardware-btn--vol-down" aria-hidden="true"></div>
                            <div class="hardware-btn hardware-btn--power" aria-hidden="true"></div>
                            <div class="hardware-btn hardware-btn--side" aria-hidden="true"></div>

                            <div class="iphone-screen">
                                <div class="screen-glare" aria-hidden="true"></div>
                                <div class="dynamic-island" aria-hidden="true">
                                    <span class="dynamic-island-dot"></span>
                                </div>

                                <div class="mock-app-inner">
                                    <div class="mock-app-header">
                                        <div>
                                            <span class="text-uppercase text-xs fw-bold text-white text-opacity-50 d-block mb-1">Hoy</span>
                                            <span class="fw-bold">Mis pedidos</span>
                                        </div>
                                        <span class="material-symbols-outlined text-white text-opacity-75">shopping_cart</span>
                                    </div>

                                    <div class="mock-search-bar">
                                        <span class="material-symbols-outlined fs-6">search</span>
                                        Buscar medicamentos...
                                    </div>

                                    <div class="mock-progress-wrap">
                                        <svg class="w-100 h-100" viewBox="0 0 176 176" aria-hidden="true">
                                            <g transform="rotate(-90 88 88)">
                                                <circle class="mock-progress-ring-bg" cx="88" cy="88" r="64"></circle>
                                                <circle class="mock-progress-ring-fill" cx="88" cy="88" r="64"></circle>
                                            </g>
                                        </svg>
                                        <div class="mock-progress-label">
                                            <span class="mock-progress-value">75%</span>
                                            <span class="mock-progress-caption">En preparación</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column gap-1 mock-widget-list">
                                        <div class="widget-depth">
                                            <div class="widget-depth-icon widget-depth-icon--mint">
                                                <span class="material-symbols-outlined fs-6">medication</span>
                                            </div>
                                            <div class="widget-depth-lines">
                                                <div class="widget-depth-title">Paracetamol 500 mg</div>
                                                <div class="widget-depth-sub">OTC · Farmacia aliada</div>
                                            </div>
                                        </div>
                                        <div class="widget-depth">
                                            <div class="widget-depth-icon widget-depth-icon--teal">
                                                <span class="material-symbols-outlined fs-6">prescriptions</span>
                                            </div>
                                            <div class="widget-depth-lines">
                                                <div class="widget-depth-title">Amoxicilina 500 mg</div>
                                                <div class="widget-depth-sub">Rx · Requiere receta</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mock-order-toast" aria-hidden="true">
                                    <div class="mock-order-toast-icon">
                                        <span class="material-symbols-outlined fs-6">local_shipping</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-500 mb-0 fw-bold">Estado del pedido</p>
                                        <p class="text-sm fw-bold text-navy mb-0">Tu orden está en camino</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="floating-ui-badge floating-ui-badge--left floating-ui-badge--float" aria-hidden="true">
                            <div class="floating-ui-badge-icon">
                                <span class="material-symbols-outlined fs-6">prescriptions</span>
                            </div>
                            <div>
                                <p class="floating-ui-badge-title">Receta validada</p>
                                <p class="floating-ui-badge-sub">Farmacéutico colegiado</p>
                            </div>
                        </div>

                        <div class="floating-ui-badge floating-ui-badge--right floating-ui-badge--float" aria-hidden="true">
                            <div class="floating-ui-badge-icon">
                                <span class="material-symbols-outlined fs-6">verified</span>
                            </div>
                            <div>
                                <p class="floating-ui-badge-title">En camino</p>
                                <p class="floating-ui-badge-sub">Seguimiento en vivo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-zonix-6 ps-lg-5 phone-steps-col">
                    <span class="text-teal-deep font-bold tracking-wider text-uppercase text-sm d-block mb-2 reveal">¿Cómo funciona?</span>
                    <h2 class="text-3xl text-md-5xl font-black text-navy mb-5 reveal">Tu farmacia favorita en 3 simples pasos</h2>
                    <div class="d-flex flex-column steps-gap">
                        <div class="step-depth-panel reveal reveal-delay-100">
                            <div class="d-flex gap-4">
                                <div class="flex-shrink-0"><div class="rounded-circle bg-primary-10 text-teal-deep d-flex align-items-center justify-content-center step-icon-circle"><span class="material-symbols-outlined text-3xl">touch_app</span></div></div>
                                <div><h3 class="text-xl font-bold text-navy mb-2">1. Descarga la App</h3><p class="text-slate-600 mb-0">Disponible gratis para iOS y Android. Crea tu cuenta en segundos.</p></div>
                            </div>
                        </div>
                        <div class="step-depth-panel">
                            <div class="d-flex gap-4">
                                <div class="flex-shrink-0"><div class="rounded-circle bg-yellow-10 text-yellow d-flex align-items-center justify-content-center step-icon-circle"><span class="material-symbols-outlined text-3xl">medication</span></div></div>
                                <div><h3 class="text-xl font-bold text-navy mb-2">2. Arma tu pedido</h3><p class="text-slate-600 mb-0">Explora el catálogo, revisa indicaciones OTC o receta, y paga de forma segura en la app.</p></div>
                            </div>
                        </div>
                        <div class="step-depth-panel">
                            <div class="d-flex gap-4">
                                <div class="flex-shrink-0"><div class="rounded-circle bg-blue-10 text-blue-zonix d-flex align-items-center justify-content-center step-icon-circle"><span class="material-symbols-outlined text-3xl">location_on</span></div></div>
                                <div><h3 class="text-xl font-bold text-navy mb-2">3. Rastrea en vivo</h3><p class="text-slate-600 mb-0">Mira en el mapa cómo tu repartidor se acerca a tu ubicación en tiempo real.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GEO / Definition Section -->
    <section id="about" class="py-5 bg-light border-top border-bottom border-slate-100">
        <div class="container-zonix">
            <div class="about-visual reveal mb-5 mx-auto">
                <picture>
                    <source srcset="{{ asset('assets/img/about/about-network.webp') }}" type="image/webp">
                    <img src="{{ asset('assets/img/about/about-network.jpg') }}"
                         alt="Red de farmacias aliadas conectadas por Zonix Pharma"
                         class="about-visual-img w-100"
                         loading="lazy" width="1200" height="675">
                </picture>
            </div>
            <div class="text-center about-copy-max mx-auto">
            <span class="text-teal-deep font-bold tracking-wider text-uppercase text-sm d-block mb-3 reveal">Sobre Nosotros</span>
            <h2 class="text-3xl font-black text-navy mb-4 reveal">¿Qué es Zonix Pharma?</h2>
            <p class="text-slate-600 text-lg leading-relaxed reveal reveal-delay-100">
                <strong>Zonix Pharma</strong> es la plataforma tecnológica que conecta a usuarios con farmacias y droguerías aliadas en Venezuela.
                Ofrecemos <strong>entregas rápidas en tu zona</strong> cuando la farmacia aliada y la logística lo permiten, soporte humano directo y métodos de pago adaptados a la realidad local (Bolívares, Dólares en efectivo, Zelle, PayPal).
            </p>
            <ul class="list-unstyled text-start text-slate-600 mt-4 mb-0 reveal reveal-delay-200 about-trust-list">
                <li class="d-flex gap-2 align-items-start mb-2"><span class="material-symbols-outlined text-teal-deep fs-6 mt-1">health_and_safety</span><span>Farmacias con farmacéutico colegiado responsable de la dispensación.</span></li>
                <li class="d-flex gap-2 align-items-start mb-2"><span class="material-symbols-outlined text-teal-deep fs-6 mt-1">inventory_2</span><span>Productos certificados y cadena de custodia en cada pedido.</span></li>
                <li class="d-flex gap-2 align-items-start"><span class="material-symbols-outlined text-teal-deep fs-6 mt-1">prescriptions</span><span>Medicamentos Rx: carga tu receta en la app y validación antes del despacho.</span></li>
            </ul>
            </div>
        </div>
    </section>

    <!-- Drivers -->
    <section class="position-relative py-5 bg-navy text-white overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100">
             <picture>
                <source srcset="{{ asset('assets/img/driver/driver-bg.webp') }}" type="image/webp">
                <img src="{{ asset('assets/img/driver/driver-bg.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Repartidor aliado de Zonix Pharma en entrega con cadena de custodia" loading="lazy" width="1920" height="1080">
             </picture>
             <div class="driver-overlay-gradient position-absolute top-0 start-0 w-100 h-100"></div>
        </div>
        <div class="container-zonix position-relative z-1 py-5">
            <div class="drivers-copy-max">
                <!-- Fixed Heading size: text-4xl (mobile) -> text-md-5xl (tablet) -> text-lg-6xl (desktop) -->
                <h2 class="text-4xl text-md-5xl text-lg-6xl font-black mb-4 leading-tight text-white reveal">Entrega medicamentos con responsabilidad.<br><span class="text-blue-zonix">Únete como repartidor aliado.</span></h2>
                <p class="text-slate-300 text-lg mb-5 reveal reveal-delay-100">Forma parte de nuestra red de repartidores en Venezuela. Horario flexible, pagos puntuales y entregas con cadena de custodia.</p>
                <div class="row g-4 mb-5">
                    <div class="col-sm-6">
                        <div class="driver-stat-card p-4 rounded-xl">
                            <span class="d-block text-3xl font-black text-yellow mb-1">Flexible</span><p class="text-sm font-medium text-white mb-0">Horario a tu medida</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="driver-stat-card p-4 rounded-xl">
                             <span class="d-block text-3xl font-black text-brand-mint mb-1">Trazable</span><p class="text-sm font-medium text-white mb-0">Cadena de custodia farmacia a paciente</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="mailto:repartidores@zonixpharma.com" class="btn-zonix-primary btn-ripple py-3 px-4 rounded-pill text-decoration-none d-inline-flex align-items-center justify-content-center gap-2">Registrarme para conducir <span class="material-symbols-outlined">directions_bike</span></a>
                    <a href="#become-partner" class="btn border border-white border-opacity-25 text-white font-bold py-3 px-4 rounded-pill hover:bg-white hover:bg-opacity-10 transition text-decoration-none">Más información</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-white border-bottom border-slate-100">
        <div class="container-zonix">
            <div class="text-center mb-5">
                <span class="text-teal-deep font-bold tracking-wider text-uppercase text-sm d-block mb-2 reveal">Comunidad</span>
                <h2 class="text-3xl font-black text-navy reveal">Ellos ya usan Zonix</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="testimonial-card testimonial-card-premium reveal">
                        <div class="testimonial-quote-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">format_quote</span>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <img src="{{ asset('assets/img/avatars/user1.jpg') }}" alt="Usuario de Zonix Pharma" class="rounded-circle avatar-ring" width="56" height="56">
                            <div>
                                <h4 class="font-bold text-navy text-base mb-0">Paciente</h4>
                                <span class="badge bg-primary-10 text-navy rounded-pill text-xs font-bold px-2 py-1">Usuario de la app</span>
                            </div>
                        </div>
                        <p class="text-slate-600 mb-0">"Accedo a farmacias aliadas verificadas y sigo el estado del pedido desde la app."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card testimonial-card-premium reveal reveal-delay-100">
                        <div class="testimonial-quote-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">format_quote</span>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <img src="{{ asset('assets/img/avatars/user2.jpg') }}" alt="Repartidor aliado de Zonix Pharma" class="rounded-circle avatar-ring" width="56" height="56">
                            <div>
                                <h4 class="font-bold text-navy text-base mb-0">Repartidor aliado</h4>
                                <span class="badge bg-primary-10 text-navy rounded-pill text-xs font-bold px-2 py-1">Red de delivery</span>
                            </div>
                        </div>
                        <p class="text-slate-600 mb-0">"La app organiza rutas y entregas con cadena de custodia desde la farmacia aliada."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card testimonial-card-premium reveal reveal-delay-200">
                        <div class="testimonial-quote-icon" aria-hidden="true">
                            <span class="material-symbols-outlined">format_quote</span>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <img src="{{ asset('assets/img/avatars/user3.jpg') }}" alt="Farmacia aliada de Zonix Pharma" class="rounded-circle avatar-ring" width="56" height="56">
                            <div>
                                <h4 class="font-bold text-navy text-base mb-0">Farmacia aliada</h4>
                                <span class="badge bg-primary-10 text-navy rounded-pill text-xs font-bold px-2 py-1">Panel comercio</span>
                            </div>
                        </div>
                        <p class="text-slate-600 mb-0">"El panel comercio facilita gestionar catálogo OTC y pedidos Rx en un solo lugar."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-white">
        <div class="container-zonix faq-copy-max">
            <div class="text-center mb-5">
                <span class="text-teal-deep font-bold tracking-wider text-uppercase text-sm d-block mb-2 reveal">Preguntas Frecuentes</span>
                <h2 class="text-3xl font-black text-navy reveal">Resolvemos tus dudas</h2>
            </div>
            
            <div class="accordion accordion-flush" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item border-0 mb-3 bg-slate-50 rounded-xl overflow-hidden reveal reveal-delay-100">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent shadow-none font-bold text-navy py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            ¿Cuánto tarda en llegar mi pedido con Zonix Pharma?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-slate-600 pb-4">
                            El tiempo de entrega depende de la farmacia aliada, tu ubicación y la logística disponible. Zonix Pharma prioriza que tus medicinas lleguen en condiciones óptimas y con cadena de custodia.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ 2 -->
                <div class="accordion-item border-0 mb-3 bg-slate-50 rounded-xl overflow-hidden reveal reveal-delay-200">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent shadow-none font-bold text-navy py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            ¿Qué métodos de pago acepta Zonix Pharma?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-slate-600 pb-4">
                            Entendemos las necesidades de Venezuela. Aceptamos pagos en <strong>Bolívares</strong> (Pago Móvil, Transferencia), <strong>Dólares</strong> (Efectivo, Zelle), PayPal y todas las Tarjetas de Crédito/Débito internacionales.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item border-0 mb-3 bg-slate-50 rounded-xl overflow-hidden reveal reveal-delay-300">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent shadow-none font-bold text-navy py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            ¿En qué ciudades de Venezuela opera Zonix Pharma?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-slate-600 pb-4">
                            Estamos en expansión gradual. Consulta disponibilidad en la app o en esta página para <strong>Caracas, Maracaibo, Valencia, Barquisimeto, Maracay y Lechería</strong>. Próximamente en más ciudades del país.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item border-0 mb-3 bg-slate-50 rounded-xl overflow-hidden reveal reveal-delay-400">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-transparent shadow-none font-bold text-navy py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            ¿Necesito receta médica para comprar medicamentos?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-slate-600 pb-4">
                            Los productos de venta libre (<strong>OTC</strong>) no requieren receta. Los medicamentos bajo prescripción (<strong>Rx</strong>) requieren cargar una receta válida en la app, que es revisada por el farmacéutico colegiado de la farmacia despachadora antes del despacho.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Banner -->
    <section id="download" class="py-5 section-download-cta">
        <div class="container-zonix">
            <div class="cta-banner premium-depth-card shadow-primary reveal">
                <div class="card-sheen" aria-hidden="true"></div>
                <div class="premium-depth-card-content">
                    <h2 class="text-3xl text-md-4xl font-black text-white mb-3">¿Qué esperas?</h2>
                    <p class="text-white text-opacity-75 text-lg mb-4 mb-md-0">Únete a la comunidad farmacéutica en crecimiento. Descarga la App hoy.</p>
                </div>
                <div class="d-flex flex-wrap gap-3 premium-depth-card-content">
                    @if($appStoreUrl)
                        <a href="{{ $appStoreUrl }}" target="_blank" rel="noopener noreferrer" class="app-badge app-badge-depth">
                            <img src="{{ asset('assets/img/badges/app-store.png') }}" alt="Descargar en App Store" class="h-100">
                        </a>
                    @else
                        <a href="#" class="app-badge app-badge-depth" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                            <img src="{{ asset('assets/img/badges/app-store.png') }}" alt="Descargar en App Store — próximamente" class="h-100">
                        </a>
                    @endif
                    @if($androidDownloadUrl)
                        <a href="{{ $androidDownloadUrl }}"
                           @if($androidIsDirectApk) download="zonix-pharma.apk" @else target="_blank" rel="noopener noreferrer" @endif
                           class="app-badge app-badge-depth">
                            <img src="{{ asset('assets/img/badges/google-play.png') }}" alt="{{ $androidIsDirectApk ? 'Descargar APK Android' : 'Descargar en Google Play' }}" class="h-100">
                        </a>
                    @else
                        <a href="#" class="app-badge app-badge-depth" data-bs-toggle="modal" data-bs-target="#comingSoonModal">
                            <img src="{{ asset('assets/img/badges/google-play.png') }}" alt="Descargar en Google Play — próximamente" class="h-100">
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Cookie Consent Banner -->
    <div id="cookieBanner" class="cookie-banner">
        <div class="d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-teal-deep fs-1">cookie</span>
            <div>
                <p class="font-bold text-navy mb-0">Usamos cookies</p>
                <p class="text-slate-500 text-sm mb-0">Para ofrecerte una experiencia segura y personalizada.</p>
            </div>
        </div>
        <button id="acceptCookies" class="btn btn-zonix-primary py-2 px-4 shadow-none">
            Aceptar
        </button>
    </div>

    <!-- Smart App Banner (Mobile Only) -->
    <div id="smartBanner" class="smart-banner d-lg-none">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm text-slate-400 border-0 p-1" onclick="document.getElementById('smartBanner').remove()">
                <span class="material-symbols-outlined fs-6">close</span>
            </button>
            <div class="bg-navy rounded p-1 d-flex align-items-center justify-content-center smart-banner-icon">
                <span class="material-symbols-outlined text-white">local_pharmacy</span>
            </div>
            <div>
                <p class="font-bold text-navy text-sm mb-0">Zonix Pharma</p>
                <p class="text-xs text-slate-500 mb-0">Próximamente en tiendas</p>
            </div>
        </div>
        <button class="btn btn-sm btn-zonix-primary rounded-pill px-3 font-bold" onclick="document.getElementById('download').scrollIntoView({behavior:'smooth'})">
            Ver
        </button>
    </div>



    <!-- Back to Top Button -->
    <button id="backToTop" class="hover-lift" title="Volver arriba">
        <span class="material-symbols-outlined">arrow_upward</span>
    </button>

    <!-- Footer -->
    <footer class="bg-navy border-top border-white border-opacity-10 footer-landing">
        <div class="container-zonix">
            <div class="row g-5 mb-5 text-white">
                <!-- Brand Col -->
                <div class="col-lg-4">
                    <div class="mb-4">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Zonix Pharma" class="logo-footer">
                    </div>
                    <p class="text-slate-400 mb-4 bg-transparent border-0 p-0">
                        La plataforma tecnológica que conecta a usuarios, farmacias y repartidores para acercarte la salud.
                    </p>
                    <div class="d-flex gap-3">
                        <!-- Facebook -->
                        <a href="https://facebook.com/zonixpharma" target="_blank" class="social-icon-btn" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://instagram.com/zonixpharma" target="_blank" class="social-icon-btn" aria-label="Instagram">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://tiktok.com/@zonixpharma" target="_blank" class="social-icon-btn" aria-label="TikTok">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Links Cols -->
                <div class="col-6 col-lg-2">
                    <h5 class="font-bold mb-3 text-white">Zonix</h5>
                    <a href="#about" class="footer-link">Sobre Nosotros</a>
                </div>

                <div class="col-6 col-lg-2">
                    <h5 class="font-bold mb-3 text-white">Legal</h5>
                    <a href="{{ route('pages.terms') }}" class="footer-link">Términos y Condiciones</a>
                    <a href="{{ route('pages.privacy') }}" class="footer-link">Privacidad</a>
                    <a href="{{ route('pages.cookies') }}" class="footer-link">Cookies</a>
                    <a href="{{ route('pages.security') }}" class="footer-link">Seguridad</a>
                </div>

                <div class="col-lg-4">
                    <h5 class="font-bold mb-2 text-white">Ciudades en Venezuela</h5>
                    <p class="text-slate-500 text-xs mb-3">Disponibilidad sujeta a farmacias aliadas en tu zona.</p>
                    <div class="row g-2">
                        <!-- Linking to FAQ about cities -->
                        <div class="col-6"><a href="#faq3" class="footer-link" onclick="document.getElementById('faq3').classList.add('show')">Caracas</a></div>
                        <div class="col-6"><a href="#faq3" class="footer-link" onclick="document.getElementById('faq3').classList.add('show')">Maracaibo</a></div>
                        <div class="col-6"><a href="#faq3" class="footer-link" onclick="document.getElementById('faq3').classList.add('show')">Valencia</a></div>
                        <div class="col-6"><a href="#faq3" class="footer-link" onclick="document.getElementById('faq3').classList.add('show')">Barquisimeto</a></div>
                        <div class="col-6"><a href="#faq3" class="footer-link" onclick="document.getElementById('faq3').classList.add('show')">Maracay</a></div>
                        <div class="col-6"><a href="#faq3" class="footer-link" onclick="document.getElementById('faq3').classList.add('show')">Lechería</a></div>
                    </div>
                </div>
            </div>

            <div class="border-top border-white border-opacity-10 pt-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <p class="text-slate-500 text-sm mb-0">© <span id="footerYear">2026</span> Zonix Technologies Inc.</p>
                <div class="d-flex gap-3">
                     <img src="{{ asset('assets/img/badges/app-store.png') }}" class="badge-footer-sm" alt="App Store">
                     <img src="{{ asset('assets/img/badges/google-play.png') }}" class="badge-footer-sm" alt="Google Play">
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas-backdrop" id="offcanvasBackdrop"></div>
    <div class="offcanvas-menu" id="offcanvasMenu">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Zonix Pharma" class="logo-offcanvas">
            <button class="btn btn-icon" id="closeMenuBtn" aria-label="Cerrar menú">
                <span class="material-symbols-outlined fs-2 text-slate-400">close</span>
            </button>
        </div>
        
        <div class="d-flex flex-column gap-2">
            <a href="{{ url('/') }}" class="nav-link-mobile">
                <span class="material-symbols-outlined">home</span> Inicio
            </a>
            <a href="#categories" class="nav-link-mobile">
                <span class="material-symbols-outlined">category</span> Categorías
            </a>
            <a href="#offers" class="nav-link-mobile">
                <span class="material-symbols-outlined">smartphone</span> En la App
            </a>
             <hr class="border-slate-100 my-2">
            @auth
                 <a href="{{ route('dashboard') }}" class="nav-link-mobile text-navy font-bold">
                    <span class="material-symbols-outlined">dashboard</span> Dashboard
                </a>
            @else
                 <a href="{{ route('login') }}" class="nav-link-mobile">
                    <span class="material-symbols-outlined">storefront</span> Panel aliados
                </a>
                 @if($androidDownloadUrl)
                 <a href="{{ $androidDownloadUrl }}"
                    @if($androidIsDirectApk) download="zonix-pharma.apk" @else target="_blank" rel="noopener noreferrer" @endif
                    class="nav-link-mobile text-navy font-bold">
                    <span class="material-symbols-outlined">download</span> Descargar App
                </a>
                 @else
                 <a href="#download" class="nav-link-mobile text-navy font-bold">
                    <span class="material-symbols-outlined">download</span> Descargar App
                </a>
                 @endif
            @endauth
        </div>
        
        <div class="mt-auto bg-slate-50 p-4 rounded-xl">
            <div class="d-flex gap-3 mb-4">
                <a href="https://instagram.com/zonixpharma" target="_blank" rel="noopener noreferrer" class="btn btn-icon bg-white text-navy hover-scale" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com/@zonixpharma" target="_blank" rel="noopener noreferrer" class="btn btn-icon bg-white text-navy hover-scale" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://facebook.com/zonixpharma" target="_blank" rel="noopener noreferrer" class="btn btn-icon bg-white text-navy hover-scale" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            </div>
             <p class="text-xs text-slate-500 font-bold text-uppercase mb-3">Descarga la App</p>
             <div class="d-flex gap-2">
                 @if($androidDownloadUrl)
                     <a href="{{ $androidDownloadUrl }}"
                        @if($androidIsDirectApk) download="zonix-pharma.apk" @else target="_blank" rel="noopener noreferrer" @endif
                        class="btn bg-navy text-white flex-grow-1 py-2 rounded-lg text-decoration-none d-flex align-items-center justify-content-center"
                        aria-label="{{ $androidIsDirectApk ? 'Descargar APK Android' : 'Google Play' }}"><span class="material-symbols-outlined">android</span></a>
                 @else
                     <button type="button" class="btn bg-navy text-white flex-grow-1 py-2 rounded-lg" data-bs-toggle="modal" data-bs-target="#comingSoonModal" aria-label="Google Play — próximamente"><span class="material-symbols-outlined">android</span></button>
                 @endif
                 @if($appStoreUrl)
                     <a href="{{ $appStoreUrl }}" target="_blank" rel="noopener noreferrer" class="btn bg-navy text-white flex-grow-1 py-2 rounded-lg text-decoration-none d-flex align-items-center justify-content-center" aria-label="App Store"><span class="material-symbols-outlined">phone_iphone</span></a>
                 @else
                     <button type="button" class="btn bg-navy text-white flex-grow-1 py-2 rounded-lg" data-bs-toggle="modal" data-bs-target="#comingSoonModal" aria-label="App Store — próximamente"><span class="material-symbols-outlined">phone_iphone</span></button>
                 @endif
             </div>
        </div>
    </div>
    <!-- Coming Soon Modal (App stores) -->
    <div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-xl border-0 shadow-lg overflow-hidden">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-5 text-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Zonix Pharma" class="logo-modal mb-4">
                    <h3 id="comingSoonModalTitle" class="font-black text-navy mb-2">App próximamente</h3>
                    <p class="text-slate-500 mb-4">Zonix Pharma estará disponible muy pronto en App Store y Google Play. Mientras tanto, las farmacias aliadas pueden acceder al panel web.</p>
                    <a href="{{ route('login') }}" class="btn btn-zonix-primary w-100 py-3 font-bold rounded-pill text-decoration-none">Panel de aliados</a>
                </div>
            </div>
        </div>
    </div>
    <!-- JSON-LD Schema -->
    @if(isset($schema))
        <script type="application/ld+json">
            {!! $schema['app'] !!}
        </script>
        <script type="application/ld+json">
            {!! $schema['organization'] !!}
        </script>
        <script type="application/ld+json">
            {!! $schema['faq'] !!}
        </script>
    @endif
@endsection
