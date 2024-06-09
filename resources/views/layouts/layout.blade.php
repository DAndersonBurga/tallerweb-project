<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"
    />
    @vite(["/resources/css/app.css", "/resources/js/swiper.js", "/resources/js/index.js"])
    <title>Autogas Racho</title>
</head>
<body>

<header class="header">
    <a href="/">
        <h2 class="header__logo">Autogas<span>Racho</span></h2>
    </a>

    <div class="header__container">
        <nav class="nav nav--active">
            <a class="nav__link" href="/">Inicio</a>
            <a class="nav__link" href="/services">Servicios</a>
            <a class="nav__link" href="/contact">Contacto</a>
            <a class="nav__link" href="/about">Quienes Somos</a>
            <a class="nav__link" href="/reviews">Reseñas</a>
        </nav>

        <button
            type="button"
            class="header__button"
        >
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
        </button>
    </div>
</header>

@section('content')
    This is content
@show

<footer class="footer">
    <nav class="nav">
        <a class="nav__link" href="/index">Inicio</a>
        <a class="nav__link" href="/services">Servicios</a>
        <a class="nav__link" href="/contact">Contacto</a>
        <a class="nav__link" href="/about">Quienes Somos</a>
        <a class="nav__link" href="/reviews">Reseñas</a>
    </nav>

    <p class="copyright">Todos los derechos reservador AutogasRacho @SrPromax:) &copy;</p>
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>
