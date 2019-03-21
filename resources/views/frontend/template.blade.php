<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CFN Enerji</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="/frontend/css/color-switcher-design.css">
    <!--Color Themes-->
    <link rel="stylesheet" href="/frontend/css/color-themes/default-theme.css" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/frontend/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/frontend/images/favicon/favicon-16x16.png" sizes="16x16">


</head>

<body>
<div class="boxed_wrapper">

    <div class="preloader"></div>

    <!-- Start Top Bar area -->
    <section class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="top-bar clearfix">
                        <div class="top-left float-left clearfix">
                            <div class="language-switcher">
                                <div id="polyglotLanguageSwitcher">
                                    <form action="#">
                                        <select id="polyglot-language-options">
                                            <option id="en" value="en" selected>English</option>
                                            <!-- <option id="tr" value="tr">Türkçe</option>-->
                                         </select>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End Top Bar area -->

    <!--Start header style1 area-->
    <header class="header-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="inner-content clearfix">
                        <div class="header-style1-logo float-left">
                            <a href="/">
                                <img src="/frontend/images/resources/logo.png" alt="Awesome Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End header style1 area-->

    <!--Start mainmenu area-->
    <section class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <nav class="main-menu clearfix">
                            <div class="navbar-header clearfix">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li class="dropdown"><a href="#">Solutions</a>
                                        <ul>
                                            <li><a href="/about">Solar Energy</a></li>
                                            <li><a href="/about">Energy Commitment</a></li>
                                            <li><a href="/about">Operation and Maintenance</a></li>
                                            <li><a href="/about">Project Designing</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="/news">News</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>

                        <div class="mainmenu-right">
                            <div class="social-links-box">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End mainmenu area-->

@yield('content')

    <!--Start footer area-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </footer>
    <!--End footer area-->

    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <div class="copyright-text float-left">
                            <p>© <a href="/">CFN</a> 2018</p>
                        </div>
                        <div class="footer-logo">
                            <a href="/">
                                <img src="/frontend/images/resources/logo.png" alt="Awesome Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End footer bottom area-->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="/frontend/css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="/frontend/css/color-themes/teal-theme.css"></span>
            <span class="palate navy-color" data-theme-file="/frontend/css/color-themes/navy-theme.css"></span>
            <span class="palate yellow-color" data-theme-file="/frontend/css/color-themes/yellow-theme.css"></span>
            <span class="palate blue-color" data-theme-file="/frontend/css/color-themes/blue-theme.css"></span>
            <span class="palate purple-color" data-theme-file="/frontend/css/color-themes/purple-theme.css"></span>
            <span class="palate olive-color" data-theme-file="/frontend/css/color-themes/olive-theme.css"></span>
            <span class="palate red-color" data-theme-file="/frontend/css/color-themes/red-theme.css"></span>
        </div>
    </div>
    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>
</div>
<!-- /.End Of Color Palate -->

<!-- main jQuery -->
<script src="/frontend/js/jquery.js"></script>
<!-- Wow Script -->
<script src="/frontend/js/wow.js"></script>
<!-- bootstrap -->
<script src="/frontend/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="/frontend/js/jquery.bxslider.min.js"></script>
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
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
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

<!--Color Switcher-->
<script src="/frontend/js/color-settings.js"></script>

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



</body>
</html>
