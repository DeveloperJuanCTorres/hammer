@extends('layouts.app')

@section('content')

<div class="container-max" style="padding-top: 120px; padding-bottom: 64px;">
    <!-- Header Section -->
    <div class="row mb-5 align-items-end g-4">
        <div class="col-md-8">
            <div class="breadcrumb-custom">
                <a href="#">DIRECTORIO</a>
                <i class="fa-solid fa-chevron-right mx-2" style="font-size: 10px;"></i>
                <span style="color: var(--on-surface-variant)">PRODUCTOS</span>
            </div>
            <h1>Productos</h1>
            <p class="text-on-surface-variant fs-5" style="max-width: 570px;">Explora nuestra línea de ingeniería avanzada en impresión industrial de alta precisión y velocidad.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <div class="status-pill">
                <span class="dot"></span>
                <span>Resultados cargados instantáneamente</span>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <!-- Sidebar Filters -->
        <aside class="col-lg-3">
            <div class="mb-5">
                <h3 class="filter-title">Categorías</h3>
                <div class="d-flex flex-column gap-1">
                    <label class="filter-item">
                        <span class="font-body-md">Textile</span>
                        <input checked="" class="form-check-input" type="checkbox" />
                    </label>
                    <label class="filter-item">
                        <span class="font-body-md">UV</span>
                        <input class="form-check-input" type="checkbox" />
                    </label>
                    <label class="filter-item">
                        <span class="font-body-md">Large Format</span>
                        <input class="form-check-input" type="checkbox" />
                    </label>
                </div>
            </div>
            <div class="mb-5">
                <h3 class="filter-title">Marca</h3>
                <div class="d-flex flex-column gap-2">
                    <div class="form-check">
                        <input class="form-check-input" id="brand1" name="brand" type="radio" />
                        <label class="form-check-label" for="brand1">Hammer Core</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="brand2" name="brand" type="radio" />
                        <label class="form-check-label" for="brand2">Titan Series</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="brand3" name="brand" type="radio" />
                        <label class="form-check-label" for="brand3">PrecisionPro</label>
                    </div>
                </div>
            </div>
            <div class="specs-card">
                <h3 class="filter-title mb-3" style="color: var(--primary)">Technical Specs</h3>
                <div class="mb-4">
                    <label class="font-jetbrains mb-2 d-block" style="font-size: 12px;">Velocidad (m²/h)</label>
                    <input class="form-range accent-primary w-100" type="range" />
                    <div class="d-flex justify-content-between font-jetbrains" style="font-size: 12px;">
                        <span>20</span>
                        <span>500+</span>
                    </div>
                </div>
                <div>
                    <label class="font-jetbrains mb-2 d-block" style="font-size: 12px;">Cabezales</label>
                    <select class="form-select font-jetbrains" style="font-size: 14px; border-color: var(--outline-variant);">
                        <option>Todos</option>
                        <option>Kyocera</option>
                        <option>Ricoh Gen6</option>
                        <option>Epson i3200</option>
                    </select>
                </div>
            </div>
        </aside>
        <!-- Product Grid -->
        <div class="col-lg-9">
            <div class="row g-4">
                <!-- Product Card 1 -->
                <div class="col-md-6 col-xl-4">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img alt="Industrial Textile Printer" class="product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAc-xWB-X2kH8AW1FoinxEAqTXa9L-wCm-hy4WsMZyurHxB1gpUosvpK7EpiS54ykmFUDv1rwo-6CywINESu0Z1Oh4MPYqLlT_ekwVJU4e6fbIAWhb3_pF6kAYVsBc17ZQeDPH7AcWK0xC79hWgYS8iT05YWTpcd3aRSCGVJTsXJVsD-GSJXPQwkt6WzzutFWzZnslxToZK5WKegEdWaIo6UhBjCozmGIFjP3X_ovF9gEanJ8v4zOPd8j3bLVzMQuvc7SEemrgnVA" />
                            <span class="badge-category badge-textile">TEXTILE</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2 font-jetbrains" style="font-size: 12px;">
                                <span class="text-secondary-emphasis">TITAN SERIES</span>
                                <span style="color: var(--secondary); font-weight: 700;">320m²/h</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4">HAMMER TX-3200</h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="card-details-btn" href="{{route('detalle')}}">
                                    Ver Detalles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <i class="fa-solid fa-microchip text-muted" title="Kyocera Heads"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col-md-6 col-xl-4">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img alt="UV Flatbed Printer" class="product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJYuvEvfD5p7A9PvSwDfGxQ49sQvqu738OBQZYptwnSMNvVWKsvlWIpWZKItXufwZhP4bPp2LowaO3sOlD6NhgYepi6ec_irGDDPwxtQXG4xEZbCXNwfN-EtowLjWvSYkVn6CQ43vg7EVciTPlucG_UAXcjGzC_LlNvoGy1kB6A6Hh6mXsBlYAwwh0TEo0xuwkF1jViXglYP02s7_oXrW0w08oeAyoLfQwlJHADSFLayFD21hOze266Saa-OMDmCu8cHBnCxHO-Q" />
                            <span class="badge-category badge-uv">UV</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2 font-jetbrains" style="font-size: 12px;">
                                <span class="text-secondary-emphasis">UV FLATBED</span>
                                <span style="color: var(--secondary); font-weight: 700;">120m²/h</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4">HAMMER UV-2513</h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="card-details-btn" href="{{route('detalle')}}">
                                    Ver Detalles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <i class="fa-solid fa-memory text-muted" title="Gen6 Heads"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="col-md-6 col-xl-4">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img alt="Large Format Printer" class="product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb8YrUEwTBuMX2Hy5wCFeTjoi03-zzsrF6YHVojntzXbegRq4wIKh_y1KoOz3yMiURXmD2CszrZJumvYWbA1RWBHl9UawvX0iFRGhwpueXoqB-P5SQFHFbzFaYYWWbiJe-daduPft64UgFeWviUWNqoDIXwBHaHvAKtTJABd3t096785Uj_xydHiPIfavJlmJDHl6HDF0Kv0wY-4PlnTwcSwxW20WnVp6PxENyI0iWUhpYmDdM_MzRRCVYlEz8fkgp1R8KUjFI2Q" />
                            <span class="badge-category badge-large">LARGE FORMAT</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2 font-jetbrains" style="font-size: 12px;">
                                <span class="text-secondary-emphasis">PRECISIONPRO</span>
                                <span style="color: var(--secondary); font-weight: 700;">450m²/h</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4">HAMMER LF-5000</h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="card-details-btn" href="{{route('detalle')}}">
                                    Ver Detalles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <i class="fa-solid fa-gauge-high text-muted" title="Dual Row"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="col-md-6 col-xl-4">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img alt="Mini Textile Printer" class="product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmZKu0hT4CAr97YOMWBusk_T85t7oBe5MnWEuiAD8HAuze9DWWyontukU26S0WQYZB4sOO8I6c_OK-cq6XCn3IsMV4Hj88aawgP0b5xMmB54dHJro6BEr5EaJoOPvC-ZBzQJ8a7itcp14Ad_rBf10AivIiCzNSU0V3niqd6577VdLsEUQ1Uw_2u_7HaNB_j7O05BtrhQciz7s2O4yWcyZGq770c37K-4bJ0vaaMP4k6Wekf849mb0SyH1VdN-GsOL5tKcrHpOZSQ" />
                            <span class="badge-category badge-textile">TEXTILE</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2 font-jetbrains" style="font-size: 12px;">
                                <span class="text-secondary-emphasis">CORE SERIES</span>
                                <span style="color: var(--secondary); font-weight: 700;">180m²/h</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4">HAMMER TX-MINI</h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="card-details-btn" href="{{route('detalle')}}">
                                    Ver Detalles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <i class="fa-solid fa-industry text-muted" title="Epson i3200"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="col-md-6 col-xl-4">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img alt="Hybrid UV Printer" class="product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBir3D16QaLMf-K-hDp4pSH5pNB2yuBrRcXh6U0Bcuj-ddd2NGmkJT1m8LOsPfzy_xzLxlkDP2zzyq9XduWUkLapVNVIEaFpSZCUhrtwyIRzgoAkR16aKZ-6Bid0xt5J0-35LucyNOkpQEYZViZvBxgIeolnCUlTin69c5KvaXRU7_GUMO7EPUld7j-tgmuHPfO8c2wi-3HyGZit8nNrJgCskcSfyEw9zM05-JP6R20FvxOvMJqlFBb0MSVLaMvBjGJspUV3195ig" />
                            <span class="badge-category badge-uv">UV</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2 font-jetbrains" style="font-size: 12px;">
                                <span class="text-secondary-emphasis">HYBRID SERIES</span>
                                <span style="color: var(--secondary); font-weight: 700;">95m²/h</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4">HAMMER HY-3000</h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="card-details-btn" href="{{route('detalle')}}">
                                    Ver Detalles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <i class="fa-solid fa-layer-group text-muted" title="Texture Engine"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 6 -->
                <div class="col-md-6 col-xl-4">
                    <div class="product-card">
                        <div class="product-image-container">
                            <img alt="Industrial Extreme Printer" class="product-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlsmHGbe-Z28Jz7tccYdxMS_hKhYzxc1DNfyh7Woyk9egf4MCDiuCTz-xn_WB12AziSEEZFPRzZlNJtVf2sNn-STY9fCbJ55geS4Canlzl-i1ssQWWXSvO8Rc1KF5QHj6cLd5JDUWiUn3_9bLlZ3lrRK8FSFCiwPupKR4vB7HL0JIVEoyst_3jcKWBcPV8PXoAiCYs1dyK3VbcPun4MgsOBkZRjJNpR33rL6r6cK_id6SK0ABOHpwTzGwwYB-V3ZBeXa1eipnetg" />
                            <span class="badge-category badge-industrial">INDUSTRIAL</span>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-2 font-jetbrains" style="font-size: 12px;">
                                <span class="text-secondary-emphasis">EXTREME SERIES</span>
                                <span style="color: var(--secondary); font-weight: 700;">800m²/h</span>
                            </div>
                            <h2 class="h4 fw-bold mb-4">HAMMER ULTIMATE X</h2>
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="card-details-btn" href="{{route('detalle')}}">
                                    Ver Detalles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <i class="fa-solid fa-bolt text-muted" title="Max Output"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-5 pt-4 text-center">
                <button class="btn border px-5 py-3 mb-3 font-jetbrains" style="background-color: var(--surface-container-high); font-size: 14px;">
                    Cargar más modelos
                </button>
                <p class="font-jetbrains" style="font-size: 12px; color: var(--outline);">Mostrando 6 de 42 equipos industriales</p>
            </div>
        </div>
    </div>
</div>

<script>
    // Simulated loading interaction
    document.querySelectorAll('input[type="checkbox"], input[type="radio"]').forEach(input => {
        input.addEventListener('change', () => {
            const pill = document.querySelector('.status-pill');
            pill.style.transform = 'scale(1.05)';
            setTimeout(() => {
                pill.style.transform = 'scale(1)';
            }, 300);
        });
    });
</script>
@endsection

<style>
    :root {
        --surface-container-high: #e8e8ea;
        --on-error: #ffffff;
        --primary-container: #0047ff;
        --surface-dim: #dadadc;
        --inverse-primary: #b9c3ff;
        --surface-container: #eeeef0;
        --secondary-fixed: #ffdbcc;
        --primary: #0035c5;
        --outline: #747688;
        --on-tertiary-container: #87eaff;
        --surface: #f9f9fc;
        --error: #ba1a1a;
        --on-surface-variant: #434657;
        --background: #f9f9fc;
        --on-background: #1a1c1e;
        --on-secondary-fixed-variant: #7a3000;
        --on-secondary-fixed: #351000;
        --on-secondary: #ffffff;
        --on-tertiary-fixed-variant: #004e5a;
        --on-primary-fixed: #001257;
        --secondary-fixed-dim: #ffb693;
        --on-surface: #1a1c1e;
        --on-primary-fixed-variant: #0033c0;
        --surface-container-lowest: #ffffff;
        --on-tertiary-fixed: #001f25;
        --tertiary-fixed-dim: #00daf8;
        --surface-tint: #0046fa;
        --outline-variant: #c4c5da;
        --primary-fixed: #dde1ff;
        --surface-container-low: #f3f3f6;
        --on-secondary-container: #572000;
        --on-error-container: #93000a;
        --tertiary-container: #006a7a;
        --surface-bright: #f9f9fc;
        --on-tertiary: #ffffff;
        --secondary: #a04100;
        --tertiary: #00505c;
        --surface-container-highest: #e2e2e5;
        --on-primary-container: #d4d9ff;
        --secondary-container: #fe6b00;
        --surface-variant: #e2e2e5;
        --inverse-on-surface: #f0f0f3;
        --primary-fixed-dim: #b9c3ff;
        --tertiary-fixed: #a5eeff;
        --on-primary: #ffffff;
        --inverse-surface: #2f3133;
        --error-container: #ffdad6;

        --gutter: 24px;
        --container-max: 1280px;
    }

    body {
        background-color: var(--background);
        color: var(--on-background);
        font-family: 'Lexend', sans-serif;
        font-size: 16px;
        line-height: 1.6;
    }

    .font-jetbrains {
        font-family: 'JetBrains Mono', monospace;
    }

    /* Layout */
    .container-max {
        max-width: var(--container-max);
        margin-left: auto;
        margin-right: auto;
        padding-left: var(--gutter);
        padding-right: var(--gutter);
    }

    /* Header */
    .site-header {
        background-color: var(--surface-container-lowest);
        border-bottom: 1px solid var(--outline-variant);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1050;
    }

    .logo {
        font-size: 32px;
        font-weight: 900;
        letter-spacing: -0.05em;
        color: var(--primary);
        text-decoration: none;
    }

    .nav-link-custom {
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        font-weight: 500;
        color: var(--on-surface-variant);
        padding: 8px 12px;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .nav-link-custom:hover {
        background-color: var(--surface-container-high);
        color: var(--on-surface-variant);
    }

    .nav-link-custom.active {
        color: var(--primary);
        border-bottom: 2px solid var(--primary);
        border-radius: 0;
    }

    .search-container {
        position: relative;
    }

    .search-container i {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--outline);
    }

    .search-input {
        padding-left: 36px;
        padding-right: 16px;
        height: 40px;
        background-color: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        border-radius: 9999px;
        font-size: 14px;
        outline: none;
        width: 240px;
    }

    .btn-primary-custom {
        background-color: var(--primary);
        color: var(--on-primary);
        border-radius: 9999px;
        padding: 10px 24px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        font-weight: 500;
        border: none;
        transition: all 0.2s;
    }

    .btn-primary-custom:hover {
        background-color: var(--primary-container);
        color: var(--on-primary-container);
    }

    /* Typography */
    h1 {
        font-size: 64px;
        font-weight: 700;
        letter-spacing: -0.02em;
        margin-bottom: 0.5rem;
    }

    .breadcrumb-custom {
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: var(--outline);
        margin-bottom: 1rem;
    }

    .breadcrumb-custom a {
        color: inherit;
        text-decoration: none;
    }

    .breadcrumb-custom a:hover {
        color: var(--primary);
    }

    /* Sidebar */
    .filter-title {
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        font-weight: 500;
        color: var(--outline);
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 1rem;
    }

    .filter-item {
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .filter-item:hover {
        background-color: var(--surface-container);
    }

    .filter-item:hover span {
        color: var(--primary);
    }

    .specs-card {
        background-color: var(--surface-container-low);
        padding: 24px;
        border-radius: 12px;
        border: 1px solid var(--outline-variant);
    }

    /* Product Cards */
    .product-card {
        background-color: var(--surface-container-lowest);
        border: 1px solid var(--outline-variant);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
    }

    .product-card:hover {
        border-color: var(--primary);
    }

    .product-image-container {
        aspect-ratio: 1/1;
        background-color: var(--surface-container-high);
        overflow: hidden;
        position: relative;
    }

    .product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.05);
    }

    .badge-category {
        position: absolute;
        top: 16px;
        left: 16px;
        padding: 4px 12px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        border-radius: 4px;
        color: var(--on-tertiary);
    }

    .badge-textile {
        background-color: var(--tertiary);
    }

    .badge-uv {
        background-color: var(--secondary-container);
        color: var(--on-secondary-container);
    }

    .badge-large {
        background-color: var(--primary);
    }

    .badge-industrial {
        background-color: var(--primary);
    }

    .card-details-btn {
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        color: var(--primary);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .card-details-btn:hover {
        text-decoration: underline;
        text-underline-offset: 4px;
    }

    /* Footer */
    .site-footer {
        background-color: var(--surface-container-highest);
        border-top: 4px solid var(--secondary);
        margin-top: 48px;
        padding: 64px 0 0 0;
    }

    .footer-heading {
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        color: var(--primary);
        text-transform: uppercase;
        margin-bottom: 24px;
    }

    .footer-link {
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        color: var(--on-surface-variant);
        text-decoration: none;
        transition: color 0.2s;
    }

    .footer-link:hover {
        color: var(--primary);
        text-decoration: underline;
        text-underline-offset: 4px;
    }

    /* Form Controls */
    .form-check-input:checked {
        background-color: var(--primary);
        border-color: var(--primary);
    }

    .accent-primary {
        accent-color: var(--primary);
    }

    /* Status Indicator */
    .status-pill {
        background-color: var(--surface-container-high);
        padding: 8px 16px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        color: var(--tertiary);
    }

    .dot {
        height: 8px;
        width: 8px;
        background-color: var(--tertiary);
        border-radius: 50%;
        display: inline-block;
        position: relative;
    }

    .dot::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: var(--tertiary-fixed-dim);
        border-radius: 50%;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 0.75;
        }

        100% {
            transform: scale(3);
            opacity: 0;
        }
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 40px;
        }

        .container-max {
            padding-left: 20px;
            padding-right: 20px;
        }
    }
</style>

