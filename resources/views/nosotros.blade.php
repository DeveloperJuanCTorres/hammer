@extends('layouts.app')

@section('content')

<!-- Trayectoria Section -->
<section class="section-padding reveal active">
    <div class="container-max">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <div class="position-relative">
                    <!-- <div class="position-absolute top-0 start-0 translate-middle-y rounded-circle opacity-10" style="width: 200px; height: 200px; background-color: var(--secondary); filter: blur(60px); z-index: -1;"></div> -->
                    <h2 class="headline-lg text-primary mb-4 ps-4 border-start border-4 border-secondary">Trayectoria de Precisión</h2>
                    <div class="body-md text-muted mb-5">
                        <p class="mb-4">
                            Desde nuestra fundación, <strong>HAMMER</strong> ha redefinido los límites de lo que es posible en la industria de la impresión. No solo fabricamos equipos; construimos las herramientas que permiten a las empresas alcanzar nuevos niveles de eficiencia y calidad.
                        </p>
                        <p>
                            Nuestro compromiso con la precisión se refleja en cada componente que diseñamos. Con una herencia arraigada en la ingeniería alemana y una visión volcada hacia la digitalización global, HAMMER se posiciona como el socio estratégico indispensable para el sector industrial.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-4">
                            <div class="stat-card">
                                <div class="display-lg text-primary mb-1" style="font-size: 48px;">25+</div>
                                <div class="label-md text-muted text-uppercase">Años de Exp.</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <div class="display-lg text-primary mb-1" style="font-size: 48px;">1.2k</div>
                                <div class="label-md text-muted text-uppercase">Patentes</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card">
                                <div class="display-lg text-primary mb-1" style="font-size: 48px;">50+</div>
                                <div class="label-md text-muted text-uppercase">Países</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="aspect-square d-flex align-items-center justify-content-center border rounded-4" style="background-color: rgba(0, 53, 197, 0.05); border-color: rgba(0, 53, 197, 0.1) !important;">
                            <i class="fa-solid fa-microchip text-primary" style="font-size: 80px; font-weight: 200;"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="aspect-square bento-img-container mt-5">
                            <img alt="Industrial precision component" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWg3xADHmJ3mvMv8520_PZ39QCYBIthDWuJ4GRCdKqQWVM0sBr0d93ikw522szPtvx_DkfzxNMew3kMU3nH3VxjZBAcVRv7R-mx7woRJZid2jHsGf_NdX_7JmR-ZBEdhw40LktRmuFi9LYF6LI3RJfMkDdnOcVRUz-y2p_mb40abZCXccEimyedYjFtx_LjDkbsDULPwaQmnGrzNEfNDOyUdI2RBcv86OVu7nfwfo2I8en4WRywXo2ZldCWILoFWJnKoSWwErp3g" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="aspect-square bento-img-container" style="margin-top: -3rem;">
                            <img alt="Circuit board technology" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3O-LCHZ9ilGI2Dpd0BrIUG3nMPFiRBbyVDbEyJw1DaPwC9tdmdJqCHmumoW-xcy89Zw14bbAErCjcx6RU3-NSizA7okMzv8Wch6tzZIh0otdwyFjg16vu4Cb5QB7ZYm-JUqQOs9P0NoNWsvw66ju_AnaLmTv5Z-4IC7ywFHzVddnKj6lebIfnNabTOm-DlVPOgpzWoFA_WUpQQeZCfEX1R4wJnKoHmY325F_7NFb4v-urNHdJGaBtJaFnpdPIy8DTBSvXS9LtNQ" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="aspect-square d-flex align-items-center justify-content-center border rounded-4" style="background-color: rgba(160, 65, 0, 0.05); border-color: rgba(160, 65, 0, 0.1) !important;">
                            <i class="fa-solid fa-gauge-high text-secondary" style="font-size: 80px; font-weight: 200;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pilares Section -->
<section class="section-padding bg-light reveal">
    <div class="container-max">
        <div class="text-center mb-5 pb-4">
            <h2 class="headline-lg">Nuestros Pilares</h2>
            <p class="text-muted mt-2">La base de nuestra excelencia tecnológica</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="pillar-card">
                    <div class="icon-box" style="background-color: rgba(0, 53, 197, 0.1);">
                        <i class="fa-solid fa-crosshairs text-primary" style="font-size: 24px;"></i>
                    </div>
                    <h3 class="headline-md text-primary mb-3">Misión</h3>
                    <p class="body-md text-muted mb-0">Proveer soluciones de impresión industrial de alta precisión que potencien la productividad de nuestros clientes.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pillar-card dark">
                    <div class="icon-box" style="background-color: rgba(221, 225, 255, 0.2);">
                        <i class="fa-solid fa-eye text-white" style="font-size: 24px;"></i>
                    </div>
                    <h3 class="headline-md text-white mb-3">Visión</h3>
                    <p class="body-md mb-0" style="color: var(--surface-container-highest);">Ser el referente global en tecnología de impresión industrial, impulsando la industria hacia un futuro más eficiente.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pillar-card">
                    <div class="icon-box" style="background-color: rgba(160, 65, 0, 0.1);">
                        <i class="fa-solid fa-shield-check text-secondary" style="font-size: 24px;"></i>
                    </div>
                    <h3 class="headline-md text-secondary mb-4">Valores</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center gap-3 label-md mb-3">
                            <span class="rounded-circle" style="width: 8px; height: 8px; background-color: var(--secondary);"></span> PRECISIÓN
                        </li>
                        <li class="d-flex align-items-center gap-3 label-md mb-3">
                            <span class="rounded-circle" style="width: 8px; height: 8px; background-color: var(--secondary);"></span> INNOVACIÓN
                        </li>
                        <li class="d-flex align-items-center gap-3 label-md mb-3">
                            <span class="rounded-circle" style="width: 8px; height: 8px; background-color: var(--secondary);"></span> COMPROMISO
                        </li>
                        <li class="d-flex align-items-center gap-3 label-md">
                            <span class="rounded-circle" style="width: 8px; height: 8px; background-color: var(--secondary);"></span> EXCELENCIA TÉCNICA
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Equipo Section -->
<section class="section-padding reveal">
    <div class="container-max">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="team-img-wrapper">
                    <img alt="Equipo Técnico HAMMER" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBV25OxFNeZnDK-aH8Qbu_NwUhIOMC34TPRJ8LixWaiJHEddU2kjLrqMM8uAoV5qU4qXtrWRs7xLZxZryxrC4roeBq1BQnuAWDhHLS2gFCm7Z4k8e8Ew4-Wtz_a8LkRIFNBwRQH53vlyiBPn8hbhs9BwLHuoaIuRjvaunGsLtTjoT0VoygDz__gR7q_X3y6ZJYAb5H79E4CsBR1MMPTR5tNiDVRD_GrVsYnkT0jgVm9n6bDo7JVMNVGi1VQ4X8b8JSXaLk4U-d62g" />
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <span class="tag-badge mb-4">TALENTO HUMANO</span>
                <h2 class="headline-lg mb-4">El Motor Detrás de la Máquina</h2>
                <p class="body-lg text-muted mb-5">
                    Nuestro equipo está compuesto por ingenieros, diseñadores y técnicos especialistas con una pasión compartida por la perfección. En HAMMER, creemos que la mejor tecnología solo es posible gracias al talento y la colaboración humana.
                </p>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-3 rounded-3" style="background-color: rgba(0, 53, 197, 0.1);">
                            <i class="fa-solid fa-users-gear text-primary" style="font-size: 24px;"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Ingeniería Especializada</h4>
                            <p class="body-md text-muted mb-0">Expertos dedicados al desarrollo de hardware y software de precisión.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-3 rounded-3" style="background-color: rgba(160, 65, 0, 0.1);">
                            <i class="fa-solid fa-headset text-secondary" style="font-size: 24px;"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Soporte Continuo</h4>
                            <p class="body-md text-muted mb-0">Un equipo técnico global listo para optimizar sus operaciones 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // Smooth reveal animation on scroll
    const observerOptions = {
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
@endsection



<style>
    :root {
        --primary: #0035c5;
        --primary-container: #0047ff;
        --secondary: #a04100;
        --secondary-container: #fe6b00;
        --on-secondary-container: #572000;
        --background: #f9f9fc;
        --surface: #f9f9fc;
        --on-surface: #1a1c1e;
        --on-surface-variant: #434657;
        --surface-container-low: #f3f3f6;
        --surface-container: #eeeef0;
        --surface-container-high: #e8e8ea;
        --surface-container-highest: #e2e2e5;
        --surface-container-lowest: #ffffff;
        --outline-variant: #c4c5da;
        --outline: #747688;
        --inverse-surface: #2f3133;
        --on-primary: #ffffff;
        --primary-fixed: #dde1ff;
    }

  

    .font-jetbrains {
        font-family: 'JetBrains Mono', monospace;
    }

    /* Typography */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 600;
    }

    .display-lg {
        font-size: 64px;
        font-weight: 700;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }

    .headline-lg {
        font-size: 32px;
        font-weight: 600;
        line-height: 1.25;
    }

    .headline-md {
        font-size: 24px;
        font-weight: 600;
        line-height: 1.3;
    }

    .body-lg {
        font-size: 18px;
        font-weight: 400;
    }

    .body-md {
        font-size: 16px;
        font-weight: 400;
    }

    .label-md {
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.05em;
    }

    /* Layout Utilities */
    .container-max {
        max-width: 1280px;
        margin: 0 auto;
        padding-left: 64px;
        padding-right: 64px;
    }

    @media (max-width: 768px) {
        .container-max {
            padding-left: 20px;
            padding-right: 20px;
        }

        .display-lg {
            font-size: 40px;
        }
    }

    /* Navbar Custom */
    .navbar-custom {
        background-color: var(--surface-container-lowest);
        border-bottom: 1px solid var(--outline-variant);
        height: 80px;
    }

    .nav-link-custom {
        color: var(--on-surface-variant);
        text-decoration: none;
        transition: color 0.2s;
        font-weight: 400;
    }

    .nav-link-custom:hover {
        color: var(--primary);
    }

    .nav-link-custom.active {
        color: var(--secondary);
        font-weight: 700;
        border-bottom: 2px solid var(--secondary);
        padding-bottom: 4px;
    }

    /* Section Styling */
    .section-padding {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }

    .stat-card {
        padding: 1.5rem;
        border: 1px solid var(--outline-variant);
        border-radius: 0.75rem;
        background-color: var(--surface-container-low);
        text-align: center;
    }

    .bento-img-container {
        border-radius: 1.25rem;
        overflow: hidden;
    }

    .aspect-square {
        aspect-ratio: 1 / 1;
    }

    /* Pillars Section */
    .pillar-card {
        padding: 2.5rem;
        border-radius: 1.25rem;
        border: 1px solid var(--outline-variant);
        background-color: #fff;
        transition: all 0.3s;
        height: 100%;
    }

    .pillar-card:hover {
        border-color: var(--primary);
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    }

    .pillar-card.dark {
        background-color: var(--inverse-surface);
        color: var(--surface);
        border: none;
        box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1);
    }

    .icon-box {
        width: 56px;
        height: 56px;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
    }

    /* Team Section */
    .team-img-wrapper {
        border-radius: 1.5rem;
        overflow: hidden;
        border: 8px solid var(--surface-container);
        box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
    }

    .team-img-wrapper img {
        transition: transform 0.7s;
    }

    .team-img-wrapper:hover img {
        transform: scale(1.05);
    }

    .tag-badge {
        font-size: 14px;
        font-weight: 500;
        color: var(--primary);
        background-color: rgba(0, 53, 197, 0.05);
        padding: 4px 16px;
        border-radius: 9999px;
        display: inline-block;
    }

    /* Reveal Animations */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 1s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    .btn-cotizar {
        background-color: var(--secondary-container);
        color: var(--on-secondary-container);
        border: none;
        font-weight: 700;
        padding: 0.5rem 1.5rem;
        border-radius: 0.5rem;
        transition: all 0.2s;
    }

    .btn-cotizar:hover {
        background-color: var(--secondary);
        color: #fff;
        transform: scale(0.95);
    }
</style>