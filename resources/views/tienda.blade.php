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

            {{-- BUSCADOR --}}

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-body">

                    <label class="form-label fw-bold">

                        Buscar

                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="buscar"
                        placeholder="Nombre del producto...">

                </div>

            </div>



            {{-- CATEGORIAS --}}

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-body">

                    <h5 class="mb-3">

                        Categorías

                    </h5>

                    @foreach($categories as $category)

                    <div class="form-check mb-2">

                        <input

                            class="form-check-input categoria"

                            type="checkbox"

                            value="{{$category->id}}"

                            id="cat{{$category->id}}">

                        <label

                            class="form-check-label"

                            for="cat{{$category->id}}">

                            {{$category->nombre}}

                            <span class="badge bg-light text-dark">

                                {{$category->total}}

                            </span>

                        </label>

                    </div>

                    @endforeach

                </div>

            </div>



            {{-- MARCAS --}}

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-body">

                    <h5 class="mb-3">

                        Marcas

                    </h5>

                    @foreach($brands as $brand)

                    <div class="form-check mb-2">

                        <input

                            class="form-check-input marca"

                            type="checkbox"

                            value="{{$brand->id}}"

                            id="brand{{$brand->id}}">

                        <label

                            class="form-check-label"

                            for="brand{{$brand->id}}">

                            {{$brand->nombre}}

                            <span class="badge bg-light text-dark">

                                {{$brand->total}}

                            </span>

                        </label>

                    </div>

                    @endforeach

                </div>

            </div>



            <button

                class="btn btn-outline-danger w-100"

                id="limpiarFiltros">

                Limpiar filtros

            </button>

        </aside>
        <!-- Product Grid -->
        <div class="col-lg-9">

            <div class="card border-0 shadow-sm mb-4">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col-md-4">

                            <strong id="contadorProductos">

                                Cargando...

                            </strong>

                        </div>

                        <div class="col-md-4">

                            <select

                                class="form-select"

                                id="orden">

                                <option value="recientes">

                                    Más recientes

                                </option>

                                <option value="precio_asc">

                                    Precio menor

                                </option>

                                <option value="precio_desc">

                                    Precio mayor

                                </option>

                                <option value="nombre">

                                    Nombre A-Z

                                </option>

                            </select>

                        </div>

                        <div class="col-md-4">

                            <select

                                class="form-select"

                                id="perPage">

                                <option value="12">

                                    12 productos

                                </option>

                                <option value="24">

                                    24 productos

                                </option>

                                <option value="36">

                                    36 productos

                                </option>

                                <option value="48">

                                    48 productos

                                </option>

                            </select>

                        </div>

                    </div>

                </div>

            </div>



            {{-- LOADER --}}

            <div

                id="loader"

                class="row g-4"

                style="display:none">

                @for($i=1;$i<=8;$i++)

                    <div class="col-md-6 col-xl-4">

                    <div class="card">

                        <div

                            style="height:260px;background:#ececec"

                            class="placeholder-glow"></div>

                        <div class="card-body">

                            <span class="placeholder col-8"></span>

                            <span class="placeholder col-6"></span>

                            <span class="placeholder col-4"></span>

                        </div>

                    </div>

            </div>

            @endfor

        </div>



        {{-- PRODUCTOS AJAX --}}

        <div id="contenedorProductos">

        </div>



        {{-- PAGINACION AJAX --}}

        <div

            id="contenedorPaginacion"

            class="mt-5">

        </div>

    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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

<script src="{{asset('js/tienda.js')}}"></script>
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