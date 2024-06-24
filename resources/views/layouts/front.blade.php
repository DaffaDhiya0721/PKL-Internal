<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ninico - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="front/assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/assets/css/animate.css">
    <link rel="stylesheet" href="front/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="front/assets/css/slick.css">
    <link rel="stylesheet" href="front/assets/css/nice-select.css">
    <link rel="stylesheet" href="front/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="front/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="front/assets/css/meanmenu.css">
    <link rel="stylesheet" href="front/assets/css/spacing.css">
    <link rel="stylesheet" href="front/assets/css/main.css">
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <!-- header-area-start -->
    @include('layouts.front.nav')
    <!-- header-area-end -->

    <!-- sidebar-menu-area -->
    <div class="tpsideinfo">
        <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
        <div class="tpsideinfo__search text-center pt-35">
            <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
            <form action="#">
                <input type="text" placeholder="Search Products...">
                <button><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="tpsideinfo__nabtab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Menu</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Categories</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="mobile-menu"></div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="tpsidebar-categories">
                        <ul>
                            <li><a href="shop.html">Furniture</a></li>
                            <li><a href="shop.html">Wooden</a></li>
                            <li><a href="shop.html">Lifestyle</a></li>
                            <li><a href="shop-2.html">Shopping</a></li>
                            <li><a href="track.html">Track Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tpsideinfo__account-link">
            <a href="sign-in.html"><i class="fal fa-user"></i> Login / Register</a>
        </div>
        <div class="tpsideinfo__wishlist-link">
            <a href="wishlist.html" target="_parent"><i class="fal fa-heart"></i> Wishlist</a>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- sidebar-menu-area-end -->

    <!-- main-area-start -->
    <main>
        @yield('content')
    </main>
    <!-- main-area-end -->

    <!-- footer-area-start -->
    @include('layouts.front.footer')
    <!-- footer-area-end -->



    <!-- JS here -->
    <script src="front/assets/js/jquery.js"></script>
    <script src="front/assets/js/waypoints.js"></script>
    <script src="front/assets/js/bootstrap.bundle.min.js"></script>
    <script src="front/assets/js/swiper-bundle.js"></script>
    <script src="front/assets/js/slick.js"></script>
    <script src="front/assets/js/magnific-popup.js"></script>
    <script src="front/assets/js/nice-select.js"></script>
    <script src="front/assets/js/counterup.js"></script>
    <script src="front/assets/js/wow.js"></script>
    <script src="front/assets/js/isotope-pkgd.js"></script>
    <script src="front/assets/js/imagesloaded-pkgd.js"></script>
    <script src="front/assets/js/countdown.js"></script>
    <script src="front/assets/js/ajax-form.js"></script>
    <script src="front/assets/js/meanmenu.js"></script>
    <script src="front/assets/js/jquery.knob.js"></script>
    <script src="front/assets/js/main.js"></script>
</body>

</html>
