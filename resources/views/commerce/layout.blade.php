<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tmart-Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/commerce/images/favicon.ico">
    <link rel="apple-touch-icon" href="/commerce/apple-touch-icon.png">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/commerce/css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="/commerce/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/commerce/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/commerce/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/commerce/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/commerce/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/commerce/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/commerce/css/custom.css">
    <link rel="stylesheet" href="/commerce/css/checkout.css">
    <link rel="stylesheet" href="/commerce/css/stripe.css">

    <!-- Modernizr JS -->
    <script src="/commerce/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

<![endif]-->
<!-- Start Offset Wrapper -->

<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
    <!-- Start Header Style -->
    <header id="header" class="htc-header">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="/commerce/images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!-- Start MAinmenu Ares -->
                       @include('commerce.partial.menu')
                    <!-- End MAinmenu Ares -->

                </div>
                <div class="mobile-menu-area"></div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Style -->

    @yield('content')
    <!-- End Our Product Area -->
    <!-- Start Blog Area -->
    <section class="htc__blog__area bg__white pb--130">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Recent News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog__wrap clearfix mt--60 xmt-30">
                    <!-- Start Single Blog -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="blog foo">
                            <div class="blog__inner">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="/commerce/images/blog/blog-img/1.jpg" alt="blog images">
                                    </a>
                                    <div class="blog__post__time">
                                        <div class="post__time--inner">
                                            <span class="date">14</span>
                                            <span class="month">sep</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__hover__info">
                                    <div class="blog__hover__action">
                                        <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                        <ul class="bl__meta">
                                            <li>By :<a href="#">Admin</a></li>
                                            <li>Product</li>
                                        </ul>
                                        <div class="blog__btn">
                                            <a class="read__more__btn" href="blog-details.html">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="blog foo">
                            <div class="blog__inner">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="/commerce/images/blog/blog-img/2.jpg" alt="blog images">
                                    </a>
                                    <div class="blog__post__time">
                                        <div class="post__time--inner">
                                            <span class="date">14</span>
                                            <span class="month">sep</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__hover__info">
                                    <div class="blog__hover__action">
                                        <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                        <ul class="bl__meta">
                                            <li>By :<a href="#">Admin</a></li>
                                            <li>Product</li>
                                        </ul>
                                        <div class="blog__btn">
                                            <a class="read__more__btn" href="blog-details.html">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                        <div class="blog foo">
                            <div class="blog__inner">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="/commerce/images/blog/blog-img/3.jpg" alt="blog images">
                                    </a>
                                    <div class="blog__post__time">
                                        <div class="post__time--inner">
                                            <span class="date">14</span>
                                            <span class="month">sep</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__hover__info">
                                    <div class="blog__hover__action">
                                        <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                                        <ul class="bl__meta">
                                            <li>By :<a href="#">Admin</a></li>
                                            <li>Product</li>
                                        </ul>
                                        <div class="blog__btn">
                                            <a class="read__more__btn" href="blog-details.html">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Footer Area -->
    <footer class="htc__foooter__area gray-bg">
        <div class="container">
            <div class="row">
                <div class="footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="/commerce/images/logo/logo.png" alt="footer logo">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Start Copyright Area -->

            <!-- End Copyright Area -->
        </div>
    </footer>
    <!-- End Footer Area -->
</div>

<!-- jquery latest version -->
<script src="/commerce/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/commerce/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="/commerce/js/plugins.js"></script>
<script src="/commerce/js/slick.min.js"></script>
<script src="/commerce/js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="/commerce/js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/commerce/js/main.js"></script>
<!-- js file for stripe cart include-->
<script src="https://js.stripe.com/v3/"></script>

@yield('js')



</body>

</html>
