@extends('layouts.app')

@section('content')

<div class="container-xxl px-4 px-lg-5" style="padding-top: 120px; padding-bottom: 64px;">
    <!-- Page Header -->
    <div class="mb-5">
        <h1 class="font-display display-3 text-primary mb-3">CONTACTO INTEGRAL</h1>
        <p class="fs-5 text-on-surface-variant" style="max-width: 672px;">
            Impulsando la precisión industrial a través de una comunicación directa y eficiente. Conéctese con nuestros especialistas.
        </p>
    </div>
    <div class="row g-4">
        <!-- Left Section: Corporate Info -->
        <section class="col-lg-5">
            <div class="d-flex flex-column gap-4">
                <!-- Physical Address & Map -->
                <div class="bg-surface-container-low border border-light-subtle rounded-3 overflow-hidden">
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="fa-solid fa-location-dot text-primary fs-4"></i>
                            <h2 class="font-headline fs-4 mb-0">Sede Central</h2>
                        </div>
                        <p class="text-on-surface-variant mb-0">{{$company->direccion}}</p>
                    </div>
                    <div class="position-relative">
                        <img alt="Map" class="w-100 map-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNZbGgnGFvDf2ecrdo61mrkswsV3MW1NhPFNhu766tUldOpeG_1V5oZrMq-E8C4H-YmrYMAmUXqlhwH8vj5OU99MUC23On40jmkFuvgKROZYMzkzdAFphz1S2rV7Izx-8qepk1oLC5PDpE_MXzJWu9tZI3tsNiAZ5cccQSToJlHRWunxKHHI0Pg16yH_nhED7S11sgnh2ANICuStZ2M8votaXw10jg3IoKPR9fa0aUPvZucEL8LuJCkUXI33k9agPI5KODRKtNbg" />
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-10"></div>
                        <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white px-3 py-2 rounded shadow d-flex align-items-center gap-2">
                            <i class="fa-solid fa-up-right-from-square fs-xs"></i>
                            <span class="font-label" style="color: white; font-size: 12px;">VER EN MAPA</span>
                        </div>
                    </div>
                </div>
                <!-- Departmental Contact -->
                <div class="d-flex flex-column gap-3">
                    <div class="bg-surface-container department-card" style="border-left-color: var(--primary);">
                        <h3 class="font-label text-primary mb-2">Teléfono</h3>
                        <p class="font-headline fs-4 mb-1">{{$company->telefono}}</p>
                    </div>
                    <div class="bg-surface-container department-card" style="border-left-color: var(--tertiary);">
                        <h3 class="font-label text-tertiary mb-2">CORREO ELECTRÓNICO</h3>
                        <p class="font-headline fs-4 mb-1">{{$company->correo}}</p>
                    </div>
                    <div class="bg-surface-container department-card" style="border-left-color: var(--on-surface-variant);">
                        <h3 class="font-label text-on-surface-variant mb-2">Horario de atención</h3>
                        <p class="font-headline fs-4 mb-1">{{$company->horario}}</p>
                    </div>
                </div>
                <!-- Socials & Hours -->
                <div class="pt-4 border-top border-light-subtle d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-4">
                    <div class="d-flex gap-3">

                        @if($company->link_facebook)
                        <a class="social-btn" href="{{$company->link_facebook}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        @endif

                        @if($company->link_instagram)
                        <a class="social-btn" href="{{$company->link_instagram}}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        @endif

                        @if($company->link_tiktok)
                        <a class="social-btn" href="{{$company->link_tiktok}}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        @endif

                        @if($company->link_youtube)
                        <a class="social-btn" href="{{$company->link_youtube}}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        @endif

                        @if($company->link_linkedin)
                        <a class="social-btn" href="{{$company->link_linkedin}}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Section: Advanced Contact Form -->
        <section class="col-lg-7">
            <div class="bg-surface-container-lowest border border-light-subtle rounded-4 p-4 p-md-5 shadow-sm position-relative overflow-hidden">
                <div class="position-absolute top-0 end-0 bg-primary opacity-10 rounded-circle" style="width: 128px; height: 128px; transform: translate(40%, -40%);"></div>
                <h2 class="font-headline fs-2 mb-4">Enviar Solicitud</h2>
                <form onsubmit="event.preventDefault(); alert('Consulta enviada exitosamente.');">
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="font-label text-on-surface-variant mb-2 d-block">Nombre Completo</label>
                            <input class="form-control form-control-custom" placeholder="Ej. Juan Pérez" type="text" />
                        </div>
                        <div class="col-md-6">
                            <label class="font-label text-on-surface-variant mb-2 d-block">Empresa</label>
                            <input class="form-control form-control-custom" placeholder="HAMMER Industrial" type="text" />
                        </div>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="font-label text-on-surface-variant mb-2 d-block">Teléfono</label>
                            <input class="form-control form-control-custom" placeholder="+52 ..." type="tel" />
                        </div>
                        <div class="col-md-6">
                            <label class="font-label text-on-surface-variant mb-2 d-block">Correo Corporativo</label>
                            <input class="form-control form-control-custom" placeholder="nombre@empresa.com" type="email" />
                        </div>
                    </div>
                    <!-- Advisor Visual Selector -->
                    <div class="mb-4">
                        <label class="font-label text-on-surface-variant mb-3 d-block">Seleccionar Especialista</label>
                        <div class="row g-3">
                            @foreach($especialistas as $key => $especialista)
                            <div class="col-md-4">
                                <input class="advisor-radio" id="{{$key}}" name="advisor" type="radio" />
                                <label class="advisor-label" for="{{$key}}">
                                    <div class="rounded-circle overflow-hidden bg-secondary-subtle" style="width: 48px; height: 48px; flex-shrink: 0;">
                                        <img alt="Advisor" class="w-100 h-100 object-fit-cover" src="{{asset('storage/' . $especialista->imagen)}}" />
                                    </div>
                                    <div>
                                        <p class="font-label mb-0" style="text-transform: none; font-family: Lexend;">{{$especialista->cargo}}</p>
                                        <p class="small text-on-surface-variant mb-0">{{$especialista->nombre}}</p>
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="font-label text-on-surface-variant mb-2 d-block">Detalles de la Consulta</label>
                        <textarea class="form-control form-control-custom h-auto" placeholder="Describa sus requerimientos técnicos o necesidades operativas..." rows="5"></textarea>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-4">
                        <button class="btn btn-primary-custom d-flex align-items-center gap-3" type="submit">
                            <i class="fa-solid fa-paper-plane"></i>
                            ENVIAR CONSULTA
                        </button>
                        <p class="small text-on-surface-variant fst-italic text-center text-md-end mb-0" style="max-width: 280px;">
                            Un asesor especializado revisará su solicitud y le responderá en un plazo máximo de 24 horas laborales.
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


<style>
    @keyframes pulse {
        0% {
            transform: scale(0.95);
            opacity: 0.7;
        }

        50% {
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            transform: scale(0.95);
            opacity: 0.7;
        }
    }
</style>
<script>
    // Micro-interaction for input fields
    document.querySelectorAll('.form-control-custom').forEach(el => {
        el.addEventListener('focus', () => {
            const label = el.parentElement.querySelector('label');
            if (label) label.style.color = 'var(--primary)';
        });
        el.addEventListener('blur', () => {
            const label = el.parentElement.querySelector('label');
            if (label) label.style.color = 'var(--on-surface-variant)';
        });
    });
</script>

@endsection

<style>
    :root {
        --primary: #0035c5;
        --primary-container: #0047ff;
        --on-primary: #ffffff;
        --secondary: #a04100;
        --tertiary: #00505c;
        --surface: #f9f9fc;
        --on-surface: #1a1c1e;
        --on-surface-variant: #434657;
        --outline-variant: #c4c5da;
        --surface-container: #eeeef0;
        --surface-container-low: #f3f3f6;
        --surface-container-high: #e8e8ea;
        --surface-container-highest: #e2e2e5;
        --surface-container-lowest: #ffffff;
        --primary-fixed-dim: #b9c3ff;
        --secondary-container: #fe6b00;
    }

    

    .font-headline {
        font-family: 'Lexend', sans-serif;
        font-weight: 600;
    }

    .font-display {
        font-family: 'Lexend', sans-serif;
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    .font-label {
        font-family: 'JetBrains Mono', monospace;
        font-weight: 500;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .text-primary {
        color: var(--primary) !important;
    }

    .text-secondary {
        color: var(--secondary) !important;
    }

    .text-on-surface-variant {
        color: var(--on-surface-variant) !important;
    }

    .bg-surface-container-low {
        background-color: var(--surface-container-low);
    }

    .bg-surface-container {
        background-color: var(--surface-container);
    }

    .bg-surface-container-highest {
        background-color: var(--surface-container-highest);
    }

    .bg-surface-container-lowest {
        background-color: var(--surface-container-lowest);
    }

    .industrial-grid-overlay {
        position: fixed;
        inset: 0;
        background-image: radial-gradient(circle, #c4c5da 1px, transparent 1px);
        background-size: 32px 32px;
        opacity: 0.1;
        pointer-events: none;
        z-index: -1;
    }

    header {
        background-color: var(--surface);
        border-bottom: 1px solid var(--outline-variant);
        height: 80px;
    }

    .nav-link-custom {
        color: var(--secondary);
        text-decoration: none;
        transition: color 0.3s ease;
        font-weight: 400;
    }

    .nav-link-custom:hover {
        color: var(--primary);
    }

    .nav-link-custom.active {
        color: var(--primary);
        font-weight: 700;
        border-bottom: 2px solid var(--primary);
        padding-bottom: 8px;
    }

    .btn-primary-custom {
        background-color: var(--primary);
        color: var(--on-primary);
        border: none;
        padding: 1rem 3rem;
        font-weight: 700;
        border-radius: 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .btn-primary-custom:hover {
        filter: brightness(1.1);
        transform: translateY(-1px);
        color: var(--on-primary);
    }

    .btn-primary-custom:active {
        transform: scale(0.95);
    }

    .form-control-custom {
        background-color: var(--surface);
        border: 1px solid var(--outline-variant);
        height: 56px;
        border-radius: 0.5rem;
        padding: 0 1rem;
        transition: all 0.3s ease;
    }

    .form-control-custom:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(0, 71, 255, 0.1);
        outline: none;
    }

    .advisor-radio {
        display: none;
    }

    .advisor-label {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        border: 1px solid var(--outline-variant);
        border-radius: 0.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .advisor-label:hover {
        background-color: var(--surface-container-high);
    }

    .advisor-radio:checked+.advisor-label {
        border-color: var(--primary);
        background-color: var(--primary-fixed-dim);
    }

    .social-btn {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 1px solid var(--on-surface-variant);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-btn:hover {
        background-color: var(--primary);
        color: var(--on-primary);
        border-color: var(--primary);
    }

    .department-card {
        padding: 1.5rem;
        border-radius: 0.5rem;
        border-left: 4px solid;
    }

    .map-img {
        height: 256px;
        object-fit: cover;
        filter: grayscale(1) brightness(0.75) contrast(1.25);
    }

    footer {
        background-color: var(--surface-container-highest);
        border-top: 1px solid var(--outline-variant);
        /* padding: 3rem 0; */
    }
</style>