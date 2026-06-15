@extends('layouts.app')

@section('content')

<div style="padding-top: 80px;">
    <!-- Hero Section -->
    <section class="hero-section">
        <img alt="Industrial Printing Machine" class="hero-bg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrNimvsOfa_4FBpOU3oGtgVIwYSfRkYhhnnwE6SuYv5R-QFZi2ppK6aaU86eI6-9IPI4Kf6khBrpMi4EBKZYKa9vcLvIXhPNfHPkdoPhdckjJnBJN073jlF-FQtjGZAHnCVpEftlTgqj2iosWnuinycR4m_3-gnWXTPcgL0bI55nakE3xRmdRJI1Vl-AM3fsSapfqnYpS3x9VDtP28xS5ABKpTPmBmhXG8NKvHKSgeSXDnINkvNQ0RGjB0M3c0A-DMU7QWIxRzOw" />
        <div class="hero-overlay"></div>
        <div class="container-fluid max-w-container position-relative">
            <div class="hero-badge">
                <i class="fa-solid fa-circle me-2 animate-pulse"></i>
                <span class="font-label">Tecnología Alemana de Precisión</span>
            </div>
            <h1 class="hero-title">
                DOMINA LA IMPRESIÓN <span style="color: var(--primary-fixed);">INDUSTRIAL</span>
            </h1>
            <p class="hero-desc">
                Equipos de alto rendimiento diseñados para producción ininterrumpida. Calidad fotográfica en gran formato con los costos operativos más bajos del mercado.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3">
                <button class="btn-cta">Cotizar ahora</button>
                <button class="btn-outline-white">Ver Catálogo 2024</button>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 text-white-50 text-center animate-bounce" style="animation: bounce 2s infinite;">
            <div class="font-label" style="font-size: 10px; text-transform: uppercase;">Explorar</div>
            <i class="fa-solid fa-chevron-down"></i>
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
            <!-- Cat 1 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="category-card reveal">
                    <div class="category-img-wrapper">
                        <img alt="Gran Formato" class="category-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQSRopZLov-UAnkdSLft_6d934RdzflUGey9PXfDHgDP6tgtJw7IAoSavwGRb8k3i403PK0jE5a_Ipzjj3D_nPYDfU4SLb6b0yMSloXk4Kas2WtvHnLqu6ksCsH8NU0PLkFtSGD0om4OZL1AgUz2CXfCabtlQu4OpnBDJadoLns4f_WCKri8Ah5WIEmfQBWKFEKU-Ec9JpeNL2g83-b65e4JAGtEoQ-Arrc3v4d9sCPbBUZ9qnoX9q41MMGgQkYXTPqq88kaWWRg" />
                        <div class="category-icon"><i class="fa-solid fa-print"></i></div>
                    </div>
                    <div class="category-body d-flex flex-column" style="min-height: 200px;">
                        <h3 class="h4 fw-bold mb-2">Gran Formato</h3>
                        <p class="text-muted flex-grow-1">Plotters ecosolventes y UV para publicidad exterior de alto impacto.</p>
                        <a class="category-link" href="{{route('tienda')}}">Ver Equipos <i class="fa-solid fa-arrow-right-long small"></i></a>
                    </div>
                </div>
            </div>
            <!-- Cat 2 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="category-card reveal">
                    <div class="category-img-wrapper">
                        <img alt="Equipos Textiles" class="category-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgenUwCgMi8ElbifKPr3dT4TKBCtCpRHMH3YzYK7_n-NhwO-n-nTjK0tjTx-R3K5wUqG8zJCWJNrPIql-MCqLjHMJH1NrGVi3GrZUPO1HC-UWtLn3zE8UVcHOH8WlIEh_ftgmd96HzF0jb0GpAFPAZEhK-k7_fbhYutL3KGRZes3B2sB1ac1YKofKBVbdvVqghQCbA6JMZ8eyKpgWpqDQz7YlHbdGt5_BGi-7sZB0Aa2wNAx7uRWNvzNinzgdMjsckya157ndyFg" />
                        <div class="category-icon" style="background: var(--tertiary);"><i class="fa-solid fa-shirt"></i></div>
                    </div>
                    <div class="category-body d-flex flex-column" style="min-height: 200px;">
                        <h3 class="h4 fw-bold mb-2">Equipos Textiles</h3>
                        <p class="text-muted flex-grow-1">Sublimación y DTF de alta velocidad para la industria de la moda.</p>
                        <a class="category-link" href="{{route('tienda')}}">Ver Equipos <i class="fa-solid fa-arrow-right-long small"></i></a>
                    </div>
                </div>
            </div>
            <!-- Cat 3 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="category-card reveal">
                    <div class="category-img-wrapper">
                        <img alt="Insumos y Tintas" class="category-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnbxJE14losBmZjqtMLPSjrRoX3NyFGoipAZo-i4e1FJ6y_J-mNi7i3k8v11SPWu_Ij6bpyGeOjmkeKrTQhJgmqafoNBFkU6geglJYfzTmFY7lDXXmbRO-ND0VgfHV75nc9rMUYPGz1RvV3M8Pr6_7wlF9XxJEIf6DHnF6NULHYnsRPqtrzB1fbpxqGKVU1lL-GtyVJKVOgVrZ8K2Dg3z05CIOv0PDuko6A35AaBeWg9kPYAdrsHLeyspML0QYnvtXgd0UpIDkJw" />
                        <div class="category-icon" style="background: var(--secondary);"><i class="fa-solid fa-droplet"></i></div>
                    </div>
                    <div class="category-body d-flex flex-column" style="min-height: 200px;">
                        <h3 class="h4 fw-bold mb-2">Insumos y Tintas</h3>
                        <p class="text-muted flex-grow-1">Consumibles originales certificados para garantizar la vida útil de sus cabezales.</p>
                        <a class="category-link" href="{{route('tienda')}}">Ver Insumos <i class="fa-solid fa-arrow-right-long small"></i></a>
                    </div>
                </div>
            </div>
            <!-- Cat 4 -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="category-card reveal">
                    <div class="category-img-wrapper">
                        <img alt="Repuestos Técnicos" class="category-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3-n8KP6RTHXu1Idv0miY5kj3vrrIulmr2zaoUdpCx5v4Ra9n4d9lP6jrMz2t6v1pfFV7j38kH2J4uakSt823yw0kpcIzgmJ0elnEoNtbrr39sppVmkqXhBVlybUtYtqWYAFQxlJgwHPZpkVIKOWNJR5PIpkvMcVGzR3DSn-CIkt-Qn1ZXGlYQOc44lSvic56lHSJqCI4JIWxk9tc7SxGITBNYBKf5w_Qu6i-8Y56rxbAEdLz7cpiuBi229GWcxBFJFCq0SJetNQ" />
                        <div class="category-icon" style="background: var(--on-surface-variant);"><i class="fa-solid fa-gears"></i></div>
                    </div>
                    <div class="category-body d-flex flex-column" style="min-height: 200px;">
                        <h3 class="h4 fw-bold mb-2">Repuestos Técnicos</h3>
                        <p class="text-muted flex-grow-1">Stock permanente de tarjetas, dampers, bombas y cabezales Epson.</p>
                        <a class="category-link" href="{{route('tienda')}}">Ver Repuestos <i class="fa-solid fa-arrow-right-long small"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent Products -->
    <section class="py-5" style="background-color: var(--surface-container-low);">
        <div class="container-fluid max-w-container">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2 class="font-display h1">Productos Destacados</h2>
                <a class="btn btn-sm d-flex align-items-center gap-2" href="#" style="background: rgba(0, 53, 197, 0.1); color: var(--primary); font-weight: 600;">
                    Más Productos <i class="fa-solid fa-chevron-right small"></i>
                </a>
            </div>
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-card h-100 d-flex flex-column reveal">
                        <div class="product-img-wrapper position-relative">
                            <img alt="Purificador" class="product-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEUBpiG8w5C-nqSfXQ5eydSvTqlTSb8N1ct4UqV-nY1hgsI6N1LZYHH7WKJ4iPLzZPwayNyX-kO88XEaqMKe_66k7wb8dIaU9HXpBKTJmitHDHOI0VRUk1KWBTmhZdCDtOS-Z3SzMxNBoF9QkPK7WjfdUb94uX-cChbdp37CfQHUqATHmc9a01Ox5g5M58t5u6lHCrr4dR0QcVR08nxP713iMIbK4Bnmv_vkfhCc5074v_J8bENT0RblZEb5_TFxINPNjH8hRzxw" />
                            <span class="position-absolute top-0 start-0 m-3 badge" style="background: var(--tertiary); font-size: 10px;">NOVEDAD</span>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h3 class="h6 fw-bold mb-1">Purificador de Humo Industrial</h3>
                            <p class="font-label text-muted mb-3" style="font-size: 12px;">Modelo: HM-120W Pro</p>
                            <div class="mb-3">
                                <span class="text-primary small fw-bold text-uppercase"><i class="fa-solid fa-circle-check me-1"></i> En stock</span>
                            </div>
                            <div class="mt-auto">
                                <div class="h3 fw-bold text-primary mb-3">S/ 1,850.00</div>
                                <button class="btn w-100 d-flex align-items-center justify-content-center gap-2 fw-bold" style="background: var(--primary-fixed); color: var(--primary); padding: 12px;">
                                    <i class="fa-solid fa-cart-shopping"></i> Añadir Al Carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-card h-100 d-flex flex-column reveal">
                        <div class="product-img-wrapper">
                            <img alt="Filtro" class="product-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQXKtFXvtqMER6Ff5RIgu-vta9Koe_vyaPMAJNDLMcub2NQe1QCZdM6dXSn4KK-Y0Inn5imd37_pSI8_Ffg0LZtX_F7HRG60Q6iNJBbNDG5DHTIai9s7_bEzbkjn2GoKlzBoxVem50-ON5KMdPKRINFioS9SE_YLEHRsm3JsEb4Y_IZyvwqh8ypJbpe6Mokx_26wUuIyOza99aOH2aSncFym8DxHmgaQ8orIKfKWvK2GtC5ruVHbGoz3CbxeIKxPHr8joJzczUyg" />
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h3 class="h6 fw-bold mb-1">Filtro HEPA para Extractor</h3>
                            <p class="font-label text-muted mb-3" style="font-size: 12px;">Compatible: 120W/200W</p>
                            <div class="mb-3">
                                <span class="text-primary small fw-bold text-uppercase"><i class="fa-solid fa-circle-check me-1"></i> En stock</span>
                            </div>
                            <div class="mt-auto">
                                <div class="h3 fw-bold text-primary mb-3">S/ 349.00</div>
                                <button class="btn w-100 d-flex align-items-center justify-content-center gap-2 fw-bold" style="background: var(--primary-fixed); color: var(--primary); padding: 12px;">
                                    <i class="fa-solid fa-cart-shopping"></i> Añadir Al Carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-card h-100 d-flex flex-column reveal">
                        <div class="product-img-wrapper position-relative">
                            <img alt="Vaso" class="product-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0aVek-jEjwTjlzC5q334sztorHtVrg2PaZvNKlQHaixiw_OTXiN7H-YPSZMWqqwFeAdGIdvY9z6NplCqNKscW0wkhfnAvUWwWTszkTA0ehZ79S3rSjZt0LygikeQ8r4PgQFlqnaHHxZCOCoeCMGemclUea-maE4tAN0aulaj2Nh-JpzaJuxR4IudzWX16v01fYu2ka776M12W3cu28skoED3aCRb34YFn8jjKeqtfMP3Zyvr6IJ_k9PqTr4qqmCxcPrTrsEjWAQ" />
                            <span class="position-absolute top-0 end-0 m-3 badge" style="background: var(--secondary); font-size: 10px;">OFERTA PACK</span>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h3 class="h6 fw-bold mb-1">Vaso Térmico para Sublimación</h3>
                            <p class="font-label text-muted mb-3" style="font-size: 12px;">Capacidad: 12oz Premium</p>
                            <div class="mb-3">
                                <span class="text-primary small fw-bold text-uppercase"><i class="fa-solid fa-circle-check me-1"></i> En stock</span>
                            </div>
                            <div class="mt-auto">
                                <div class="h3 fw-bold text-primary mb-3">S/ 19.50</div>
                                <button class="btn w-100 d-flex align-items-center justify-content-center gap-2 fw-bold" style="background: var(--primary-fixed); color: var(--primary); padding: 12px;">
                                    <i class="fa-solid fa-cart-shopping"></i> Añadir Al Carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-card h-100 d-flex flex-column reveal">
                        <div class="product-img-wrapper">
                            <img alt="Extractor" class="product-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsNU8wo05NYbM_PEQxaGS-az6-a4nCtubijoFvSIQ6Jq_TtKBm4rmxQCYjlq-wMYh0GswAkph3FemRUODxyEVO_6JNfpqdCjYAUKCXgK3oShvlRYnItJh5RycYtQ8ytJHqDH8RVBCIduUuC3ikRz1Xfka5vnj6GF4dttMIz6T2jU7Dv3x6fs37lFD6_fW7Z6J_igOSR8qReWTtML6Zuze2kHFCPd57ITgdEnyMLO4z4JXAnrnuVSoGSMOjn-3g-VMrVOr2eHrneQ" />
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h3 class="h6 fw-bold mb-1">Extractor Dual Industrial</h3>
                            <p class="font-label text-muted mb-3" style="font-size: 12px;">Potencia: 200W 2 Cabezales</p>
                            <div class="mb-3">
                                <span class="text-primary small fw-bold text-uppercase"><i class="fa-solid fa-circle-check me-1"></i> En stock</span>
                            </div>
                            <div class="mt-auto">
                                <div class="h3 fw-bold text-primary mb-3">S/ 2,450.00</div>
                                <button class="btn w-100 d-flex align-items-center justify-content-center gap-2 fw-bold" style="background: var(--primary-fixed); color: var(--primary); padding: 12px;">
                                    <i class="fa-solid fa-cart-shopping"></i> Añadir Al Carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection

