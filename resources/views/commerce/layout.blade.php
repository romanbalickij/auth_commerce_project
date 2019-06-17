<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tmart-Minimalist eCommerce</title>
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
    <link rel="stylesheet" href="/commerce/css/sort-price.css">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">


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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="/commerce/js/sort-price.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#input-id").rating();
</script>

@yield('js')

</body>
</html>
