<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('interface.guestWelcome') }}</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/guest/css/bootstrap.css">
    <link rel="stylesheet" href="/guest/css/font-awesome.css">
    <link rel="stylesheet" href="/guest/css/styles.css">
    <link rel="stylesheet" href="/guest/css/mystyles.css">
</head>
<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="navbar-before mobile-hidden navbar-before-inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="navbar-before-sign">Everything You Need is theBox</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====================== -->
        <nav class="navbar navbar-default navbar-main-white navbar-pad-top navbar-first">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <img src="/guest/img/logo.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                </div>
                <form class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
                    <select class="navbar-main-search-category-select">
                        <option>All Departmens</option>
                    </select>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                    </div>
                    <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                </form>
                <ul class="nav navbar-nav navbar-right navbar-mob-item-left">
                    <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text"><span >Hello, Sign in</span>Your Account</a>
                    </li>
                    <li class="dropdown"><a href="shopping-cart.html"><span >Your Cart</span><i class="fa fa-shopping-cart"></i> 3 Items</a>
                        <ul class="dropdown-menu dropdown-menu-shipping-cart">
                            <li>
                                <a class="dropdown-menu-shipping-cart-img" href="#">
                                    <img src="/guest/img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                                <div class="dropdown-menu-shipping-cart-inner">
                                    <p class="dropdown-menu-shipping-cart-price">$81</p>
                                    <p class="dropdown-menu-shipping-cart-item"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-menu-shipping-cart-img" href="#">
                                    <img src="/guest/img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                                <div class="dropdown-menu-shipping-cart-inner">
                                    <p class="dropdown-menu-shipping-cart-price">$88</p>
                                    <p class="dropdown-menu-shipping-cart-item"><a href="#">Nikon D5200 24.1 MP Digital SLR Camera</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-menu-shipping-cart-img" href="#">
                                    <img src="/guest/img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                                <div class="dropdown-menu-shipping-cart-inner">
                                    <p class="dropdown-menu-shipping-cart-price">$98</p>
                                    <p class="dropdown-menu-shipping-cart-item"><a href="#">Apple 11.6" MacBook Air Notebook </a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-menu-shipping-cart-img" href="#">
                                    <img src="/guest/img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                </a>
                                <div class="dropdown-menu-shipping-cart-inner">
                                    <p class="dropdown-menu-shipping-cart-price">$73</p>
                                    <p class="dropdown-menu-shipping-cart-item"><a href="#">Fossil Women's Original Boyfriend</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <p class="dropdown-menu-shipping-cart-total">Total: $150</p>
                                <button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>
                            </li>
                        </ul>
                    </li>
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                </ul>
            </div>
        </nav>
        <!-- ====================== -->
        <nav class="navbar-default navbar-main-white yamm">
            <div class="container">
                <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#"><span >Shop by</span>Department<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-category">
                                <li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Home & Garden</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Home & Garden</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home</a>
                                                                <p>Vehicula nostra lacus dapibus himenaeos</p>
                                                            </li>
                                                            <li><a href="#">Kitchen</a>
                                                                <p>Vel dolor duis libero ligula</p>
                                                            </li>
                                                            <li><a href="#">Furniture & Decor</a>
                                                                <p>Magnis consectetur facilisi habitasse curae</p>
                                                            </li>
                                                            <li><a href="#">Bedding & Bath</a>
                                                                <p>Semper maecenas habitasse metus scelerisque</p>
                                                            </li>
                                                            <li><a href="#">Appilances</a>
                                                                <p>Consectetur placerat leo aenean sagittis</p>
                                                            </li>
                                                            <li><a href="#">Patio, Lawn & Garden</a>
                                                                <p>Arcu eros vitae netus porta</p>
                                                            </li>
                                                            <li><a href="#">Wedding Registry</a>
                                                                <p>Senectus non consectetur felis litora</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Home Improvement</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Home Improvement</a>
                                                                <p>Inceptos ligula cras aliquam fames</p>
                                                            </li>
                                                            <li><a href="#">Lamps & Light Fixtures</a>
                                                                <p>Dui tempus tempor sed luctus</p>
                                                            </li>
                                                            <li><a href="#">Kitchen & Bath Fixtures</a>
                                                                <p>Quis sociis tellus sociosqu magnis</p>
                                                            </li>
                                                            <li><a href="#">Home Automation</a>
                                                                <p>Elit venenatis in faucibus venenatis</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="dropdown-menu-category-section-theme-img" src="/guest/img/test_cat/2-i.png" alt="Image Alternative text" title="Image Title" style="right: -10px;" />
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="navbar-item-top" href="#">Following</a>
                        </li>
                        <li class="dropdown"><a class="navbar-item-top" href="#">Today Delas</a>
                        </li>
                        <li class="dropdown"><a class="navbar-item-top" href="#">Gift Cards</a>
                        </li>
                        <li class="dropdown"><a class="navbar-item-top" href="#">Gift Ideas</a>
                        </li>
                        <li class="dropdown"><a class="navbar-item-top" href="#">Weekly Ad</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" class="navbar-item-top">Shipping</a>
                        </li>
                        <li><a href="#" class="navbar-item-top">Payment</a>
                        </li>
                        <li><a href="#" class="navbar-item-top">Customer Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- =========================================== -->
        <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true,"autoplay":true,"autoplayTimeout":5000}'>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#E3D8FF;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left">
                                <h4 class="slider-item-caption-title">Playstation 4</h4>
                                <p class="slider-item-caption-desc">This is for The Players</p><a class="btn btn-lg btn-ghost btn-black" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-right" src="/guest/img/test_slider/13-i.png" alt="Image Alternative text" title="Image Title" style="top: 60%; width: 56%;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-image:url(/guest/img/1400x500.png);">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-right slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Smart Watches</h4>
                                <p class="slider-item-caption-desc">Get One Just from $99</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#E5F54B;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left">
                                <h4 class="slider-item-caption-title">Run! Run! Run!</h4>
                                <p class="slider-item-caption-desc">Your Running Shoes, Right Away.</p><a class="btn btn-lg btn-ghost btn-black" href="#">Shop Now</a>
                            </div>
                            <img class="slider-item-img-right" src="/guest/img/test_slider/3-i.png" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="/guest/js/jquery.js"></script>
    <script src="/guest/js/bootstrap.js"></script>
    <script src="/guest/js/icheck.js"></script>
    <script src="/guest/js/ionrangeslider.js"></script>
    <script src="/guest/js/jqzoom.js"></script>
    <script src="/guest/js/card-payment.js"></script>
    <script src="/guest/js/owl-carousel.js"></script>
    <script src="/guest/js/magnific.js"></script>
    <script src="/guest/js/custom.js"></script>
</body>
</html>