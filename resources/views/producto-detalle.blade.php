@extends('layouts.app')
<style>
    :root {
        --primary: #0035c5;
        --primary-container: #0047ff;
        --on-primary: #ffffff;
        --secondary: #a04100;
        --secondary-container: #fe6b00;
        --on-secondary-container: #572000;
        --tertiary: #00505c;
        --tertiary-container: #006a7a;
        --surface: #f9f9fc;
        --surface-container: #eeeef0;
        --surface-container-low: #f3f3f6;
        --surface-container-high: #e8e8ea;
        --surface-container-highest: #e2e2e5;
        --surface-container-lowest: #ffffff;
        --on-surface: #1a1c1e;
        --on-surface-variant: #434657;
        --outline: #747688;
        --outline-variant: #c4c5da;
        --background: #f9f9fc;
        --on-background: #1a1c1e;

        /* Spacing & Layout */
        --gutter: 24px;
        --margin-desktop: 64px;
        --container-max: 1280px;
    }

    body {
        background-color: var(--background);
        color: var(--on-surface);
        font-family: 'Lexend', sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    .font-mono {
        font-family: 'JetBrains Mono', monospace;
    }

    .font-black {
        font-weight: 900;
    }

    .container-custom {
        max-width: var(--container-max);
        margin-left: auto;
        margin-right: auto;
        padding-left: var(--gutter);
        padding-right: var(--gutter);
    }

    /* Navigation */
    .navbar-custom {
        background-color: var(--surface-container-lowest);
        border-bottom: 1px solid var(--outline-variant);
        padding: 1rem 0;
        position: sticky;
        top: 0;
        z-index: 1050;
    }

    .nav-logo {
        font-size: 40px;
        letter-spacing: -0.02em;
        color: var(--primary);
        text-decoration: none;
    }

    .nav-link-custom {
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        color: var(--on-surface-variant);
        text-decoration: none;
        padding: 4px 8px;
        transition: all 0.2s;
    }

    .nav-link-custom:hover {
        background-color: var(--surface-container-high);
        color: var(--on-surface);
    }

    .nav-link-custom.active {
        color: var(--primary);
        border-bottom: 2px solid var(--primary);
    }

    /* Hero / Gallery */
    .gallery-main {
        position: relative;
        aspect-ratio: 4/3;
        background-color: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        overflow: hidden;
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-main:hover .gallery-img {
        transform: scale(1.5);
    }

    .video-tag {
        position: absolute;
        bottom: 24px;
        left: 24px;
        background-color: var(--secondary-container);
        color: var(--on-secondary-container);
        padding: 12px 16px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
        transition: transform 0.2s;
        z-index: 2;
    }

    .video-tag:hover {
        transform: scale(1.05);
    }

    .video-tag .tag-title {
        font-size: 14px;
        font-family: 'JetBrains Mono';
        font-weight: 500;
    }

    .video-tag .tag-sub {
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        opacity: 0.8;
        letter-spacing: 0.1em;
    }

    .thumb-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 16px;
        margin-top: 24px;
    }

    .thumb-item {
        aspect-ratio: 1/1;
        border: 1px solid var(--outline-variant);
        overflow: hidden;
        cursor: pointer;
        transition: border-color 0.2s;
    }

    .thumb-item:hover {
        border-color: var(--primary);
    }

    .thumb-item.active {
        border: 2px solid var(--primary);
    }

    .thumb-more {
        background-color: var(--surface-container-high);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--on-surface-variant);
    }

    /* Product Info */
    .category-label {
        font-family: 'JetBrains Mono';
        font-size: 14px;
        color: var(--secondary-container);
        font-weight: 700;
        letter-spacing: 0.2em;
        text-transform: uppercase;
    }

    .product-title {
        font-size: 32px;
        font-weight: 600;
        line-height: 1.25;
        margin-bottom: 0.5rem;
    }

    .rating-stars {
        color: var(--secondary-container);
        font-size: 14px;
    }

    .iso-cert {
        font-size: 12px;
        color: var(--outline);
        font-weight: 500;
    }

    .description-quote {
        font-size: 18px;
        border-left: 4px solid var(--primary);
        padding-left: 1rem;
        color: var(--on-surface-variant);
        margin-bottom: 2rem;
    }

    .pricing-card {
        background-color: var(--surface-container);
        padding: 2rem;
        border: 2px solid var(--secondary-container);
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .pricing-card::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, transparent 45%, rgba(0, 0, 0, 0.05) 45%, rgba(0, 0, 0, 0.05) 55%, transparent 55%);
        background-size: 20px 20px;
        pointer-events: none;
    }

    .price-label {
        font-size: 14px;
        font-family: 'JetBrains Mono';
        color: var(--secondary);
        font-weight: 700;
        text-transform: uppercase;
        display: block;
    }

    .price-value {
        font-size: 32px;
        font-weight: 900;
    }

    .price-currency {
        font-size: 14px;
        font-family: 'JetBrains Mono';
        color: var(--outline);
    }

    .price-note {
        font-size: 12px;
        font-style: italic;
        color: var(--on-surface-variant);
        margin-bottom: 1.5rem;
    }

    .btn-quote {
        background-color: var(--secondary-container);
        color: var(--on-secondary-container);
        border: none;
        padding: 1.5rem;
        font-size: 24px;
        font-weight: 600;
        width: 100%;
        transition: all 0.2s;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    .btn-quote:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        background-color: var(--secondary-container);
        filter: brightness(1.1);
    }

    .info-badges .badge-item {
        background-color: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        padding: 0.75rem;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
    }

    .badge-item i {
        color: var(--primary);
        font-size: 18px;
    }

    .badge-item span {
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
    }

    /* Technical Table */
    .section-header {
        border-bottom: 2px solid var(--outline-variant);
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }

    .section-header h2 {
        font-size: 32px;
        font-weight: 600;
    }

    .section-header .sub {
        font-size: 14px;
        font-family: 'JetBrains Mono';
        color: var(--primary);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .table-specs {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
    }

    .table-specs th {
        background-color: var(--surface-container-high);
        font-family: 'JetBrains Mono';
        font-size: 14px;
        padding: 1rem;
        border: 1px solid var(--outline-variant);
    }

    .table-specs td {
        padding: 1rem;
        border: 1px solid var(--outline-variant);
        font-size: 16px;
    }

    .table-specs tr:nth-child(even) {
        background-color: var(--surface-container-low);
    }

    /* Feature Cards */
    .card-doc {
        background-color: var(--primary);
        color: var(--on-primary);
        padding: 2rem;
        min-height: 320px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-feature {
        background-color: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        padding: 2rem;
        height: 100%;
        transition: border-color 0.2s;
    }

    .card-feature:hover {
        border-color: var(--primary);
    }

    .feature-icon-box {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 1.5rem;
    }

    .icon-primary {
        background-color: rgba(0, 53, 197, 0.1);
        color: var(--primary);
    }

    .icon-tertiary {
        background-color: rgba(0, 80, 92, 0.2);
        color: var(--tertiary-container);
    }

    .feature-link {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--primary);
        font-family: 'JetBrains Mono';
        font-size: 14px;
        text-decoration: none;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* Footer */
    footer {
        background-color: var(--surface-container-highest);
        border-top: 4px solid var(--secondary);
        margin-top: 5rem;
        padding-top: 4rem;
    }

    .footer-heading {
        font-size: 14px;
        font-family: 'JetBrains Mono';
        font-weight: 700;
        color: var(--on-surface);
        text-transform: uppercase;
        margin-bottom: 1.5rem;
    }

    .footer-links {
        list-style: none;
        padding: 0;
    }

    .footer-links a {
        color: var(--on-surface-variant);
        text-decoration: none;
        font-size: 14px;
        font-family: 'JetBrains Mono';
        transition: color 0.2s;
    }

    .footer-links a:hover {
        color: var(--primary);
    }

    .sales-channel {
        background-color: rgba(0, 53, 197, 0.05);
        padding: 1.5rem;
        border: 1px solid rgba(0, 53, 197, 0.2);
    }

    .sales-phone {
        font-size: 20px;
        font-weight: 900;
        margin-bottom: 1rem;
    }
</style>
@section('content')

<div class="container-custom" style="padding-top: 120px; padding-bottom: 64px;">
    <!-- Hero Section -->
    <div class="row g-5 mb-5 align-items-start">
        <!-- Gallery -->
        <div class="col-lg-7">
            <div class="gallery-main" id="mainGallery">
                <img alt="HAMMER UV-2000 Pro" class="gallery-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGsHNWvGqBIjQ2hGMdM3u0scdgMst5CBzGEuU1ov0sKhYW56rq6ZBmuc2GmUbJQR-iNfS9v5RqW-hqIMorV8kPnO4g3C6IC752sspP9oMDlvS6vNaTKJoiB9xcrjjXVpWWTyhQrTQzYq62CwgJQqCfntlVE2NLyf9DH4tE7ngNEWbJ2vFrPer2mEEwUWgw6N9ZfRSr61NhE_Exua_y_JXPqaPXbs0UK13At-PQ4SOzEWRVEdIcSkoXlV_BagDsSaT8AwKfmnkq1Q" />
                <div class="video-tag">
                    <i class="fa-solid fa-circle-play fs-4"></i>
                    <div class="d-flex flex-column">
                        <span class="tag-title">EQUIPO EN USO</span>
                        <span class="tag-sub">Video Demostrativo</span>
                    </div>
                </div>
                <div class="position-absolute top-0 end-0 m-4">
                    <div class="bg-white bg-opacity-75 rounded-circle p-2 border" style="backdrop-filter: blur(4px);">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
            </div>
            <div class="thumb-grid">
                <div class="thumb-item active">
                    <img class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8J2hJSwntoenW2laOqP_EW4fSGsPzdkwfEEuTJld4ryZFGCZqfPkWZ14H3x6biEh8sSQkkzS5SN0WaS6K9DF-sMkapPVMgTeYiRzv3muEwqDKAaXa658z6bwmXeyLHwG4-3dCK1wil5i7qiBTXRJxK_KgghfQuXwzqt9yFMRt79wk_vlASQA2DmBhZ8L1LU5Il1kIU4ljxiuDRpxrkXiH5bn2lZj1Ec-mUh4bPjEN09bxNXqCksClcM2ZkORBsuC-vE7MzG3Jmw" />
                </div>
                <div class="thumb-item">
                    <img class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1ADJohZDYnOChRTTdZto5Db_HsAvjntB_hszAI4CV4t7Z6rBYPYNSj8DZP-uRXUCffgZ227wcX9Ex1RuM5K7Wypdp6ss_Nvx72qK3BFbA-YOC9YPKSOol_p_c4oasFsLHgf4COZujF2fqKm59Ie3FprZM1KUlX37S1sUFsHhPCgfT_-C6e3swT7Vc-ajIbe2LEd2hr0_dnpa8hg7tEr-RlgJrmsNZIfhTDKQQexO5Ni9OKARCMZpNi22NHNcbpYgMytUR_Nl30g" />
                </div>
                <div class="thumb-item">
                    <img class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdKxYPrPP61xTgsK9t1Ibk14n_ERFeZ-n7DIBteT9p9RQoY2MU_azEEYkZ5hM9q-ub6cSpQgfIcRIxrEm9vqOWs1-jCno62hR-8wb_jqKtmj82mC6opg4lxZrq9e3e3uIl4VXDL68o8NCPLxFax3MtXpZusULMz19Iv1AXtY5atWnrelTPqGyJL1UeTyjDRGSAfb8G97EVC_4LdKcbPwr8l8mc-I20jvkxPKclC9_go3XLrjsd8WSRHmsK_Vq585m2Hcpp9QnZcg" />
                </div>
                <div class="thumb-item">
                    <img class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGWYVnRt2JQtjCxvRLy8jEErohIpgWxfj_QawQoCoQ8rY4GL14UEG874vEoZc0DyBBl6S4C27gv3mQu5rgQzs9e5AbX0f83p3EFO8kqBNMaReeCDmDnH1X6j2NXL4sn60QSqJ3jD2nhDymoPRLsGWi6pyLoU96ugfCix8nt7AeYvJRS_ZCROFnwHk_8AFZR4O95whCMn6g-wFcsjV_oQrREsge0330WhroXYS04BD0XvuNZ64oUBE0H8q53ZrlsCK4dUX6SbLONA" />
                </div>
                <div class="thumb-item thumb-more">
                    <i class="fa-solid fa-ellipsis"></i>
                    <span style="font-size: 10px; font-weight: 700;">VER TODAS</span>
                </div>
            </div>
        </div>
        <!-- Details -->
        <div class="col-lg-5">
            <div class="mb-4">
                <span class="category-label">Serie Industrial Pro</span>
                <h1 class="product-title">HAMMER UV-2000 Pro</h1>
                <div class="d-flex align-items-center gap-2">
                    <div class="rating-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="iso-cert">Certificación ISO 9001:2015</span>
                </div>
            </div>
            <div class="description-quote">
                Diseñada para producción ininterrumpida 24/7. Tecnología de curado UV LED de alta velocidad con precisión micrónica para sustratos rígidos y flexibles.
            </div>
            <div class="pricing-card">
                <span class="price-label">Precio Referencial</span>
                <div class="d-flex align-items-baseline gap-2 mb-1">
                    <span class="price-value">$45,900</span>
                    <span class="price-currency">USD + IGV</span>
                </div>
                <p class="price-note">
                    * Sujeto a evaluación, contacte a un asesor para configuración final y leasing.
                </p>
                <button class="btn btn-quote">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    Solicitar Cotización
                </button>
            </div>
            <div class="row g-3 info-badges">
                <div class="col-4">
                    <div class="badge-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>2 Años Garantía</span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="badge-item">
                        <i class="fa-solid fa-headset"></i>
                        <span>Soporte 24/7</span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="badge-item">
                        <i class="fa-solid fa-truck-fast"></i>
                        <span>Instalación Global</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Technical Specs -->
    <section class="mt-5 pt-5">
        <div class="section-header d-flex justify-content-between align-items-end">
            <div>
                <span class="sub">Profundidad Técnica</span>
                <h2>Ficha Técnica Detallada</h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table-specs">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Especificación</th>
                        <th class="text-end">Valor / Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Producción</td>
                        <td>Velocidad de impresión</td>
                        <td class="text-end">Hasta 120 m²/h (Modo Borrador)</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Calidad</td>
                        <td>Resolución máxima</td>
                        <td class="text-end">2400 x 1200 DPI</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Cabezales</td>
                        <td>Configuración de inyectores</td>
                        <td class="text-end">Ricoh Gen6 x 4 (CMYK + W + V)</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Sustratos</td>
                        <td>Grosor máximo</td>
                        <td class="text-end">100 mm (Ajuste automático)</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Físico</td>
                        <td>Dimensiones del equipo</td>
                        <td class="text-end">4.8m x 2.1m x 1.4m</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Energía</td>
                        <td>Requerimiento eléctrico</td>
                        <td class="text-end">220V / 30A Trifásico</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Documentation & Features -->
    <section class="mt-5 pt-5">
        <div class="row g-4">
            <!-- PDF Module -->
            <div class="col-md-4">
                <div class="card-doc rounded-0">
                    <div>
                        <i class="fa-solid fa-file-pdf mb-4" style="font-size: 48px;"></i>
                        <h3 class="fs-4 fw-bold mb-3">Documentación Técnica</h3>
                        <p class="opacity-75 mb-0">Acceda a los manuales de instalación, seguridad y guías de mantenimiento preventivo.</p>
                    </div>
                    <button class="btn btn-light w-100 fw-bold py-3 mt-4 font-mono" style="border-radius: 4px; color: var(--primary);">
                        Ver Repositorio PDF
                    </button>
                </div>
            </div>
            <!-- Feature Card 1 -->
            <div class="col-md-4">
                <div class="card-feature rounded-0">
                    <div class="feature-icon-box icon-primary">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <h3 class="fs-4 fw-bold mb-3">Estructura Reforzada</h3>
                    <p class="text-muted">Chasis de acero industrial de una sola pieza para eliminar vibraciones en altas velocidades, garantizando una vida útil de +10 años.</p>
                    <a class="feature-link" href="#">
                        Saber más <i class="fa-solid fa-arrow-right ms-1" style="font-size: 12px;"></i>
                    </a>
                </div>
            </div>
            <!-- Feature Card 2 -->
            <div class="col-md-4">
                <div class="card-feature rounded-0">
                    <div class="feature-icon-box icon-tertiary">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h3 class="fs-4 fw-bold mb-3">Sostenibilidad Activa</h3>
                    <p class="text-muted">Sistema de filtración de COVs integrado y tintas con certificación Greenguard Gold, reduciendo el impacto ambiental en su taller.</p>
                    <a class="feature-link" href="#">
                        Saber más <i class="fa-solid fa-arrow-right ms-1" style="font-size: 12px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    // Gallery Micro-interaction
    const gallery = document.getElementById('mainGallery');
    const galleryImage = gallery.querySelector('.gallery-img');

    gallery.addEventListener('mousemove', (e) => {
        const rect = gallery.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width;
        const y = (e.clientY - rect.top) / rect.height;
        galleryImage.style.transformOrigin = `${x * 100}% ${y * 100}%`;
    });
</script>
@endsection



