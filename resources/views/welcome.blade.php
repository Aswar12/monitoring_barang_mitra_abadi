<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT. Mitra Abadi Distribusindo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('assets-wel/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-wel/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-wel/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-wel/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-wel/css/style.css') }}" rel="stylesheet">

</head>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        @if (Route::has('login'))
        <h3 class="logo"><a href="index.html">PT. Mitra Abadi Distribusindo</a></h3>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    @auth
                    <a class="nav-link scrollto active" href="{{ url('/dashboard') }}">DASHBOARD</a>
                </li>
                <li>
                    @else
                    <a class="nav-link scrollto" href="{{ route('login') }}">LOGIN</a>
                </li>
                <li>
                    @if (Route::has('register'))
                    <a class="nav-link scrollto" href="{{ route('register') }}">REGISTER</a>
                    @endif
                    @endauth
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @endif


    </div>
</header><!-- End Header -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('assets-wel/img/slide/slide-1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Grow Your Business</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets-wel/img/slide/slide-2.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets-wel/img/slide/slide-3.jpg')">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

            <div class="row no-gutters">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                </div>
                <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <div class="row">
                            <div class="col-md-6 icon-box">
                                <i class="bx bx-receipt"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                </p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="bx bx-images"></i>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class="col-md-6 icon-box">
                                <i class="bx bx-shield"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Happy Clients</strong> consequuntur quae</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                    </div>
                </div>

            </div>

    </div>
</section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
<div class="container">

<div class="row">

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
</div>

<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
<img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
</div>

</div>

</div>
</section>End Clients Section -->

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets-wel/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets-wel/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets-wel/js/main.js') }}"></script>

</body>

</html>
