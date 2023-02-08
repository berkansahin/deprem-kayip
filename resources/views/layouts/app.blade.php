<!DOCTYPE html>
<html lang="en">
<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--meta-->
    <meta name="description" content="Deprem Kayıp">
    <meta name="author" content="Deprem Kayıp">

    <!--title-->
    <title>Deprem Kayıp</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--custom css end-->
</head>

<body>

<!--main content wrapper start-->
<div class="main-wrapper">

    <!--header section start-->
    <!--header start-->
    <header class="main-header position-absolute w-100">
        <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
            <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="{{ asset('assets/img/logo.png') }}" style="width: 50px;" alt="logo" class="img-fluid logo-white" />
                </a>
            </div>
        </nav>
    </header>
    <!--header end-->
    <!--header section end-->
    @yield('content')
    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
        <div class="footer-top footer-light ptb-120">
            <div class="container">

            </div>
        </div>
        <!--footer top end-->

        <!--footer bottom start-->
        <div class="footer-bottom footer-light py-4">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 col-lg-7">
                        <div class="copyright-text">
                            <p class="mb-lg-0 mb-md-0">&copy; {{ date('Y') }} Deprem Kayıp</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer-single-col text-start text-lg-end text-md-end">
                            <h6>Faydalı Linkler</h6>
                            <ul class="list-unstyled2 list-inline2 mb-0">
                                <li class="list-inline-item"><a href="https://deprem.io/">Deprem.io</a></li>
                                <li class="list-inline-item"><a href="https://afetharita.com/" target="_blank">Afet Harita</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom end-->
    </footer>
    <!--footer section end-->

</div>

<!--build:js-->
<script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

<!--endbuild-->
</body>

</html>
