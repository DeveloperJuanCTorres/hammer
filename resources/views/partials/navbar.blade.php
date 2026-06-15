<!-- TopNavBar -->
<header class="header-main fixed-top">
    <div class="container-fluid max-w-container py-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-4 gap-lg-5">
                <a class="d-flex align-items-center text-decoration-none" href="#">
                    <img alt="HAMMER Logo" class="me-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeQRKYgIIvNkwrCaBI8RC_JiVf2GzkhleOLlhjZxZJMDpp8uok72PRBr6_Z_ojN8F3Zz6TyD8wuisZXS-FndOlzgqFzpzyGql244a3_5V1ds1HyYvLnH3HHnhInzopR7ke8ZXWgoTNcI-5qBi02tkjpQDb6ADefuOymtD87zj3m9Ul6G4A7zi2oKm4H1NvB8Op0HWYRMxZwP4ntK65lj9Wvldyynggg5O9qnTjUWn0OZp2ba2hi5Wcj8YPch8JDslPCRKKp6UZ6A" style="height: 40px;" />
                    <span class="fs-4 fw-black text-uppercase text-primary font-display" style="letter-spacing: -2px;">HAMMER</span>
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