<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <?php
    $version = '1993.5.0';
    ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;family=JetBrains+Mono:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />

    <link href="{{asset ('css/styles.css')}}?v=<?php echo $version ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    <div>
        @include('partials.navbar')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script>
        const boton = document.getElementById('btnWhatsapp');
        const lista = document.getElementById('waList');

        boton.addEventListener('click', function () {
            lista.classList.toggle('show');

            this.innerHTML = lista.classList.contains('show')
                ? '<i class="fas fa-times"></i>'
                : '<i class="fab fa-whatsapp"></i>';
        });

        // Cerrar al hacer clic fuera
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.floating-whatsapp')) {
                lista.classList.remove('show');
                boton.innerHTML = '<i class="fab fa-whatsapp"></i>';
            }
        });
    </script>
    
    
</body>
</html>
