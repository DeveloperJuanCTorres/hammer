@extends('layouts.app')

@section('content')

<div style="padding-top: 80px;">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="swiper heroSwiper">

            <div class="swiper-wrapper">

                @foreach($banners as $banner)
                <div class="swiper-slide">

                    <img src="{{ asset('storage/' . $banner->imagen) }}" class="hero-bg">

                    <div class="hero-overlay"></div>

                    <div class="container-fluid max-w-container position-relative hero-content">

                        <div class="hero-badge">
                            <i class="fa-solid fa-circle me-2"></i>
                            {{$banner->titulo}}
                        </div>

                        <h1 class="hero-title">
                            {{$banner->nombre}}
                        </h1>

                        <p class="hero-desc">
                            {{$banner->descripcion}}
                        </p>

                        <div class="hero-buttons">
                            <a href="#" class="btn-cta">
                                Cotizar ahora
                            </a>

                            <a href="#" class="btn-outline-white mx-4">
                                Ver Catálogo
                            </a>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <!-- Categories -->
    <section class="py-5 container-fluid max-w-container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-5">
            <div>
                <h2 class="font-display h1 mb-3">Categorías de Productos</h2>
                <p class="text-muted mb-0" style="max-width: 500px;">Soluciones integrales para cada segmento de la industria gráfica, desde gran formato hasta repuestos originales.</p>
            </div>
            <a class="text-primary fw-bold text-decoration-none mt-3 mt-md-0 d-inline-flex align-items-center gap-2" href="{{route('tienda')}}">
                Ver todas las categorías <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="row g-4">
            @foreach($categories as $category)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="category-card reveal">
                    <div class="category-img-wrapper">
                        <img alt="Gran Formato" class="category-img" src="{{asset('storage/' . $category->imagen)}}" />
                        <!-- <div class="category-icon"><i class="fa-solid fa-print"></i></div> -->
                    </div>
                    <div class="category-body d-flex flex-column" style="min-height: 200px;">
                        <h3 class="h4 fw-bold mb-2">{{$category->nombre}}</h3>
                        <p class="text-muted flex-grow-1">{{$category->descripcion}}</p>
                        <a class="category-link" href="{{route('tienda')}}">Ver Equipos <i class="fa-solid fa-arrow-right-long small"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Recent Products -->
    <section class="py-5" style="background-color: var(--surface-container-low);">
        <div class="container-fluid max-w-container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 class="font-display h1">Productos Destacados</h2>
                <a class="btn btn-sm d-flex align-items-center gap-2" href="{{route('tienda')}}" style="background: rgba(0, 53, 197, 0.1); color: var(--primary); font-weight: 600;">
                    Más Productos <i class="fa-solid fa-chevron-right small"></i>
                </a>
            </div>
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-card h-100 d-flex flex-column reveal">
                        <div class="product-img-wrapper position-relative">
                            @php
                                $imagenes = json_decode($product->imagenes, true);
                                $imagen = $imagenes[0] ?? 'no-image.png';
                            @endphp 
                            <img alt="Purificador" class="product-img" src="{{asset('storage/' . $imagen)}}" />
                            <span class="position-absolute top-0 start-0 m-3 badge" style="background: var(--tertiary); font-size: 10px;">DESTACADO</span>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h3 class="h6 fw-bold mb-1">{{$product->nombre}}</h3>
                            <p class="font-label text-muted mb-3" style="font-size: 12px;">Categoría: {{$product->taxonomy->nombre}}</p>
                            <div class="mb-3">
                                <span class="text-primary small fw-bold text-uppercase"><i class="fa-solid fa-circle-check me-1"></i> En stock</span>
                            </div>
                            <div class="mt-auto">
                                <div class="h3 fw-bold text-primary mb-3">$ {{ number_format($product->precio_referencial, 2) }}</div>
                                <button class="btn w-100 d-flex align-items-center justify-content-center gap-2 fw-bold" style="background: var(--primary-fixed); color: var(--primary); padding: 12px;">
                                    <i class="fa-solid fa-cart-shopping"></i> Ver detalle
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Trust Section -->
    <section class="container-fluid max-w-container">
        <div class="trust-section">
            <div class="row g-0 align-items-center">
                <div class="col-12 col-md-6 p-5 p-lg-5">
                    <h2 class="font-display h1 mb-4">Respaldo Técnico Especializado</h2>
                    <p class="text-muted mb-4 fs-5">No solo vendemos equipos, garantizamos tu continuidad operativa. Nuestro equipo técnico está certificado por las marcas líderes para ofrecerte el mejor soporte post-venta.</p>
                    <div class="d-flex align-items-start gap-3 mb-4">
                        <i class="fa-solid fa-shield-halved text-primary fs-4 mt-1"></i>
                        <div>
                            <h4 class="fw-bold mb-1">Garantía Real</h4>
                            <p class="small text-muted mb-0">Hasta 2 años de garantía en toda nuestra gama de plotters.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mb-4">
                        <i class="fa-solid fa-screwdriver-wrench text-primary fs-4 mt-1"></i>
                        <div>
                            <h4 class="fw-bold mb-1">Soporte In Situ</h4>
                            <p class="small text-muted mb-0">Técnicos calificados que viajan a tus instalaciones en menos de 24h.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mb-5">
                        <i class="fa-solid fa-user-graduate text-primary fs-4 mt-1"></i>
                        <div>
                            <h4 class="fw-bold mb-1">Capacitación HAMMER</h4>
                            <p class="small text-muted mb-0">Entrenamiento gratuito en el uso de software y mantenimiento básico.</p>
                        </div>
                    </div>
                    <button class="btn btn-primary-custom px-5 py-3 fs-5">
                        Hablar con un experto
                    </button>
                </div>
                <div class="col-12 col-md-6" style="min-height: 500px; position: relative;">
                    <img alt="Soporte Técnico" class="w-100 h-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBiKIr591nikCNWKvrOK9iBun2_fxt6ju2o8EHaCBQ_FfHgZA0E5VrjT4gWmdwfLU8CLFqjlWhR2iVCGPCQoq_Gizr8u8bUhW6uCg0Xc4-oud2ZjwTrJaFNj1ZsvLF0L7P-OHHjeDxQ1B2ToXtjwKIjKWlDedVe_EQQOOVPeclKFcwk377cVdwPpTV5-6CpPyLlFXPQUy1mlJ0CS-F444HyZxpiDcoQD0ycJf3t4wULHeMeju09ZrHXgBwqDjzU06lL55X33bld0g" style="object-fit: cover; position: absolute; inset: 0;" />
                    <div style="position: absolute; inset: 0; background: rgba(0, 53, 197, 0.1); mix-blend-mode: multiply;"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Header scroll effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });

        // Intersection Observer for reveal effects
        const observerOptions = {
            threshold: 0.1
        };
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
    });
</script>

<script>
    new Swiper(".heroSwiper",{

        loop:true,

        speed:1200,

        effect:"fade",

        fadeEffect:{
            crossFade:true
        },

        autoplay:{
            delay:5000,
            disableOnInteraction:false
        },

        pagination:{
            el:".swiper-pagination",
            clickable:true
        },

        navigation:{
            nextEl:".swiper-button-next",
            prevEl:".swiper-button-prev"
        }

    });
</script>
@endsection

