<!-- TopNavBar -->
<header class="header-main fixed-top">
    <div class="container-fluid max-w-container py-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-4 gap-lg-5">
                <a class="d-flex align-items-center text-decoration-none" href="#">
                    <img alt="HAMMER Logo" class="me-2" src="{{asset('storage/' . $company->logo)}}" width="100" />
                    <!-- <span class="fs-4 fw-black text-uppercase text-primary font-display" style="letter-spacing: -2px;">HAMMER</span> -->
                </a>
                <nav class="d-none d-lg-flex gap-4">
                    <a class="nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Inicio</a>
                    <a class="nav-link-custom {{ request()->routeIs('tienda') ? 'active' : '' }}" href="{{route('tienda')}}">Productos</a>
                    <a class="nav-link-custom {{ request()->routeIs('nosotros') ? 'active' : '' }}" href="{{route('nosotros')}}">Nosotros</a>
                    <a class="nav-link-custom {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{route('contacto')}}">Contacto</a>
                </nav>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="d-none d-md-flex search-bar">
                    <i class="fa-solid fa-magnifying-glass text-muted"></i>
                    <input placeholder="Buscar equipos..." type="text" />
                </div>
                <a href="{{route('contacto')}}" class="btn btn-primary-custom">
                    Solicitar Asesor
                </a>
            </div>
        </div>
    </div>
</header>