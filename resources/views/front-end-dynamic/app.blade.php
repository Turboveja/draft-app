<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ env('APP_NAME') }}</title>

    {{--Fuentes--}}
    <link href="front-end-static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="front-end-static/plugin/themify-icons/themify-icons.css" rel="stylesheet">

    {{--Plugins CSS--}}
    <link href="front-end-static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="front-end-static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="front-end-static/plugin/magnific/magnific-popup.css" rel="stylesheet">

    {{--Style de la plantilla--}}
    <link href="front-end-static/css/styles.css" rel="stylesheet">
    <link href="front-end-static/css/color/color-4.css" rel="stylesheet" id="color_theme">

    {{--Favicon--}}
{{--    TODO hacer favicon--}}
    <link rel="icon" href="favicon.ico"/>
</head>


<body data-spy="scroll" data-target="#navbarshark" data-offset="98">

{{--Spinner loading--}}
<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
</div>

{{--Header--}}
<header>
    <nav class="navbar header-nav fixed-top navbar-expand-lg">
        <div class="container">
            <!-- Brand -->
{{--            <a class="navbar-brand" href="#">LW <span class="theme-bg"></span></a>--}}
            <!-- / -->

            <!-- Mobile Toggle -->
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarshark"--}}
{{--                    aria-controls="navbarshark" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span></span>--}}
{{--                <span></span>--}}
{{--                <span></span>--}}
{{--            </button>--}}
            <!-- / -->

            <!-- Top Menu -->
{{--            <div class="collapse navbar-collapse justify-content-end" id="navbarshark">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li><a class="nav-link active" href="#home">Inicio</a></li>--}}
{{--                    <li><a class="nav-link" href="#portfolio">Discografía</a></li>--}}
{{--                    <li><a class="nav-link" href="#team">Banda</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <!-- / -->

        </div><!-- Container -->
    </nav> <!-- Navbar -->
</header>
<!-- Header End -->

{{--Main--}}
<main>
    @include('front-end-static.secciones.inicio')
{{--    @include('front-end-static.secciones.videos')--}}
    @include('front-end-static.secciones.discografia')
    @include('front-end-static.secciones.social')
    @include('front-end-static.secciones.banda')
{{--    @include('front-end-static.secciones.sin-usar')--}}
</main>
<!-- Main End -->

{{--Footer--}}
<footer class="footer">
    <div class="container text-center">
        <ul class="social-icons">
            <li><a target="_blank" href="https://www.facebook.com/lionswayofficial"><i class="fab fa-facebook-f"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/lionswayoficial"><i class="fab fa-twitter"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/lionsway"><i class="fab fa-instagram"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/lionsway"><i class="fab fa-youtube"></i></a></li>
        </ul>
        <p class="copyright">© {{ \Carbon\Carbon::now()->year }} Turboveja - All Rights Reserved</p>
    </div>
</footer>

<!-- jQuery -->
<script src="front-end-static/js/jquery-3.2.1.min.js"></script>
<script src="front-end-static/js/jquery-migrate-3.0.0.min.js"></script>

<!-- Plugins -->
<script src="front-end-static/plugin/bootstrap/js/popper.min.js"></script>
<script src="front-end-static/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="front-end-static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
<script src="front-end-static/plugin/isotope/isotope.pkgd.min.js"></script>
<script src="front-end-static/plugin/magnific/jquery.magnific-popup.min.js"></script>

<!-- custom -->
<script src="front-end-static/js/custom.js"></script>

</body>
<!-- Body End -->

</html>
