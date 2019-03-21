@extends('frontend.template')

@section('content')

    <section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="icon text-center">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="title text-center">
                            <h1>Our Projects</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="single-project-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="img-holder">
                <img src="/frontend/images/projects/1.jpg" alt="Awesome Image">
                <div class="overlay-style-one">
                    <div class="box">
                        <div class="content">
                            <a class="" data-fancybox="gallery" href="/frontend/images/projects/1.jpg">
                                <span class="icon-zoom"></span>
                            </a>
                        </div>
                        <div class="title-holder">
                            <h3><a href="#">US Gas Company Masrani</a></h3>
                            <span>Power & Energy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End single project item-->
    <!--Start single project item-->
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="single-project-item wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="img-holder">
                <img src="/frontend/images/projects/2.jpg" alt="Awesome Image">
                <div class="overlay-style-one">
                    <div class="box">
                        <div class="content">
                            <a class="" data-fancybox="gallery" href="/frontend/images/projects/2.jpg">
                                <span class="icon-zoom"></span>
                            </a>
                        </div>
                        <div class="title-holder">
                            <h3><a href="#">US Gas Company Masrani</a></h3>
                            <span>Power & Energy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@section('css')
    <link rel="stylesheet" href="/frontend/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="/frontend/css/color-switcher-design.css">
    <!--Color Themes-->
    <link rel="stylesheet" href=/frontend/"css/color-themes/default-theme.css" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/frontend/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/frontend/images/favicon/favicon-16x16.png" sizes="16x16">
@endsection

@section('js')

    <script src="/frontend/js/jquery.js"></script>
    <!-- Wow Script -->
    <script src="/frontend/js/wow.js"></script>
    <!-- bootstrap -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- bx slider -->
    <script src="/frontend/js/jquery.bxslider.min.js"></script>
    <!-- Fancybox Script -->
    <script src="/frontend/js/jquery.fancybox.js"></script>
    <!-- count to -->
    <script src="/frontend/js/jquery.countTo.js"></script>
    <script src="/frontend/js/appear.js"></script>
    <!-- owl carousel -->
    <script src="/frontend/js/owl.js"></script>
    <!-- validate -->
    <script src="/frontend/js/validation.js"></script>
    <!-- mixit up -->
    <script src="/frontend/js/jquery.mixitup.min.js"></script>
    <!-- isotope script-->
    <script src="/frontend/js/isotope.js"></script>
    <!-- Easing -->
    <script src="/frontend/js/jquery.easing.min.js"></script>
    <!-- Gmap helper -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZQiiFTOGpm2qHVZmZY1s-aEnmHDhqKgk"></script>
    <!--Gmap script-->
    <script src="/frontend/js/gmaps.js"></script>
    <script src="/frontend/js/map-helper.js"></script>
    <!-- jQuery ui js -->
    <script src="/frontend/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <!-- Language Switche  -->
    <script src="/frontend/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <!-- jQuery timepicker js -->
    <script src="/frontend/assets/timepicker/timePicker.js"></script>
    <!-- Bootstrap select picker js -->
    <script src="/frontend/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
    <!-- html5lightbox js -->
    <script src="/frontend/assets/html5lightbox/html5lightbox.js"></script>
    <!--Color Switcher-->
    <script src="/frontend/js/color-settings.js"></script>
    <!--Slick Slider Script-->
    <script src="/frontend/js/slick.js"></script>

    <!--Revolution Slider-->
    <script src="/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/frontend/js/main-slider-script.js"></script>

    <!-- thm custom script -->
    <script src="/frontend/js/custom.js"></script>
@endsection
