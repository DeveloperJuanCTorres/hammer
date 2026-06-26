<!-- Footer -->
<footer class="footer-main mt-5">
    <div class="container-fluid max-w-container py-5">
        <div class="row g-4">
            <div class="col-12 col-lg-3">
                <div class="d-flex align-items-center mb-4">
                    <img alt="HAMMER Logo" class="me-2" src="{{asset('storage/' . $company->logo)}}" width="150" />
                </div>
                <p class="text-muted mb-4">{{$company->descripcion}}</p>
                <div class="d-flex gap-3">
                    @if($company->link_facebook)
                    <a class="social-link" href="{{$company->link_facebook}}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    @endif

                    @if($company->link_instagram)
                    <a class="social-link" href="{{$company->link_instagram}}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    @endif

                    @if($company->link_tiktok)
                    <a class="social-link" href="{{$company->link_tiktok}}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    @endif

                    @if($company->link_youtube)
                    <a class="social-link" href="{{$company->link_youtube}}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    @endif

                    @if($company->link_linkedin)
                    <a class="social-link" href="{{$company->link_linkedin}}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <h4 class="font-label fw-bold mb-4">ENLACES RÁPIDOS</h4>
                <ul class="list-unstyled d-flex flex-column gap-3">
                    <li><a class="text-decoration-none text-muted" href="#">Manuales Técnicos</a></li>
                    <li><a class="text-decoration-none text-muted" href="#">Servicio Post-venta</a></li>
                    <li><a class="text-decoration-none fw-bold" href="#" style="color: var(--secondary);">Certificaciones</a></li>
                    <li><a class="text-decoration-none text-muted" href="#">Red de Distribuidores</a></li>
                    <li><a class="text-decoration-none text-muted" href="#">Contacto Directo</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <h4 class="font-label fw-bold mb-4">CONTACTO</h4>
                <div class="d-flex flex-column gap-3 text-muted">
                    <div class="d-flex gap-3">
                        <i class="fa-solid fa-location-dot text-primary"></i>
                        <span>{{$company->direccion}}</span>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-phone text-primary"></i>
                        <span>{{$company->telefono}}</span>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-envelope text-primary"></i>
                        <span>{{$company->correo}}</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <h4 class="font-label fw-bold mb-4">BOLETÍN</h4>
                <p class="small text-muted mb-3">Suscríbete para recibir ofertas y actualizaciones de nuevos equipos.</p>
                <div class="input-group">
                    <input class="form-control" placeholder="Tu email" style="background: var(--surface-container); border-color: var(--outline-variant);" type="email" />
                    <button class="btn btn-primary" type="button">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark py-4">
        <div class="container-fluid max-w-container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <p class="small mb-0">© 2024 HAMMER Industrial Printing Equipment. All rights reserved.</p>
                <div class="d-flex gap-4">
                    <a class="small text-muted text-decoration-none" href="#">Políticas de Privacidad</a>
                    <a class="small text-muted text-decoration-none" href="#">Términos de Servicio</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="floating-whatsapp">

    <button class="wa-button" id="btnWhatsapp">
        <i class="fab fa-whatsapp"></i>
    </button>

    <div class="wa-list" id="waList">

        @foreach($especialistas as $item)

            <a
                href="https://wa.me/+51{{ $item->whatsapp }}?text=Hola,%20quisiera%20más%20información."
                target="_blank"
                class="wa-card">

                <img src="{{ asset('storage/'.$item->imagen) }}">

                <div>

                    <div class="nombre">

                        {{ $item->nombre }}

                    </div>

                    <div class="cargo">

                        {{ $item->cargo }}

                    </div>

                </div>

            </a>

        @endforeach

    </div>

</div>