<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fuel Delivery</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="front_css/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front_css/assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="front_css/assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="front_css/assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="front_css/assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="front_css/assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="front_css/assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="front_css/assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="front_css/assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="front_css/assets/css/plugins/nice-select.css">
    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="front_css/assets/css/style.css">
    <!--<link rel="stylesheet" href="front_css/assets/css/style.min.css">-->

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Uren's Newsletter Popup Area -->
        <!-- <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off"><i class="ion-android-close"></i></span>
                <div class="subscribe_area">
                    <h2>Sign Up Newsletter</h2>
                    <p>Subscribe to the our store mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form class="subscribe-form" action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Uren's Newsletter Popup Area Here -->

        <!-- Begin Uren's Header Main Area -->
        <header class="header-main_area bg--sapphire">
            <div class="header-top_area d-lg-block d-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav">
                                    <ul>
                                    <li class="dropdown-holder active"><a href="/">Home</a></li>
                                        <li class=" "><a href="{{url('fuelstation')}}">Fuel Station</a></li>
                                        <li class=""><a href="#">About Us</a></li>
                                        <li class=""><a href="#">Contact</a></li>
                                        <li class=""><a href="#">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul>
                                    <li><a href="#">My Account<i class="fa fa-chevron-down"></i></a>
                                            <ul class="ht-dropdown ht-my_account">
                                            <li><a href="{{url('register')}}">Register</a></li>
                                                <li class="active"><a href="{{url('login')}}">Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top_area header-sticky bg--sapphire">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav">
                                    <ul>
                                    <li class="dropdown-holder active"><a href="/">Home</a></li>
                                        <li class=" "><a href="{{url('fuelstation')}}">Fuel Station</a></li>
                                        <li class=""><a href="about-us.html">About Us</a></li>
                                        <li class=""><a href="contact.html">Contact</a></li>
                                        <li class=""><a href="blog-left-sidebar.html">Blog </a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </div>
            <div class="header-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="custom-logo_col col-12">
                           
                        </div>
                        <div class="custom-category_col col-12">
                            <div class="category-menu ">
                                <div class="category-heading">
                                    <h3 style="text-align: center;">
                                        <span>FUEL DELIVERY SYSTEM</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="custom-search_col col-12">
                            <div >
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All Fuel</option>
                                        <option value="10">Octane</option>
                                        <option value="17">Petrol</option>
                                        <option value="20">Diesel</option>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="header-search_btn" type="submit"><i
                                        class="ion-ios-search-strong"><span>Search</span></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="custom-cart_col col-12">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="inner-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="/"><span
                                        class="mm-text">Home</span></a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-left-sidebar.html">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                        class="mm-text">User
                                        Setting</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Uren's Header Main Area End Here -->

        <!-- Begin Popular Search Area -->
        <div class="popular-search_area">
            <div class="container-fluid">
                
            </div>
        </div>
        <!-- Popular Search Area End Here -->

        <div class="uren-slider_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-slider slider-navigation_style-2">
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide animation-style-01 bg-1">
                                <div class="slider-content">
                                    <span>New thinking new possibilities</span>
                                    <h3>Car interior</h3>
                                    <h4>Starting at <span>$99.00</span></h4>
                                    <div class="uren-btn-ps_left slide-btn">
                                        <a class="uren-btn" href="shop-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slide Area End Here -->
                            <!-- Begin Single Slide Area -->
                            <div class="single-slide animation-style-02 bg-2">
                                <div class="slider-content slider-content-2">
                                    <span class="primary-text_color">Car, Truck, CUV &amp; SUV Tires</span>
                                    <h3>Wheels &amp; Tires</h3>
                                    <h4>Sale up to 20% off</h4>
                                    <div class="uren-btn-ps_left slide-btn">
                                        <a class="uren-btn" href="shop-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide animation-style-02 bg-3">
                                <div class="slider-content slider-content-3">
                                    <span class="primary-text_color">Car, Truck, CUV &amp; SUV Tires</span>
                                    <h3>Wheels &amp; Tires</h3>
                                    <h4>Sale up to 20% off</h4>
                                    <div class="uren-btn-ps_left slide-btn">
                                        <a class="uren-btn" href="shop-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Uren's Shipping Area -->
        <div class="uren-shipping_area">
            <div class="container-fluid">
                <div class="shipping-nav">
                    <div class="row no-gutters">
                        <div class="shipping-grid">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <i class="ion-ios-paperplane-outline"></i>
                                </div>
                                <div class="shipping-content">
                                    <h6>Free Shipping</h6>
                                    <p>Free shipping on all US order</p>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-grid">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <i class="ion-ios-help-outline"></i>
                                </div>
                                <div class="shipping-content">
                                    <h6>Support 24/7</h6>
                                    <p>Contact us 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-grid">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <i class="ion-ios-refresh-empty"></i>
                                </div>
                                <div class="shipping-content">
                                    <h6>100% Money Back</h6>
                                    <p>You have 30 days to Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-grid">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <i class="ion-ios-undo-outline"></i>
                                </div>
                                <div class="shipping-content">
                                    <h6>90 Days Return</h6>
                                    <p>If goods have problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-grid">
                            <div class="shipping-item">
                                <div class="shipping-icon">
                                    <i class="ion-ios-locked-outline"></i>
                                </div>
                                <div class="shipping-content last-child">
                                    <h6>Payment Secure</h6>
                                    <p>We ensure secure payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Shipping Area End Here -->

        <!-- Begin Fuel Station Area -->
        <div class="featured-categories_area">
            <div class="container-fluid">
                <div class="section-title_area">
                    <span>Fuel Station</span>
                    <h3>Bangladesh All Fuel Station</h3>
                </div>
                <iframe src="https://www.google.com/maps/d/embed?mid=1AeQLL07IVgDiRTZ0dhHpqvybgSyIWKlj&ehbc=2E312F" width="100%" height="500"></iframe>
            </div>
        </div>
        <!-- Fuel Station Area End Here -->

       

      <br>
      <br>
      <div></div>

       
        <!-- Begin Uren's Footer Area -->
        <div class="uren-footer_area">
            <div class="footer-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="newsletter-area">
                                <h3 class="title">Join Our Newsletter Now</h3>
                                <p class="short-desc">Get E-mail updates about our latest shop and special offers.</p>
                                <div class="newsletter-form_wrap">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter your email" />
                                                <button class="newsletter-btn" id="mc-submit">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widgets_info">
                                <div class="footer-widgets_logo">
                                    <a href="#">
                                        <img src="front_css/assets/images/menu/logo/1.png" alt="Uren's Footer Logo">
                                    </a>
                                </div>
                                <div class="widget-short_desc">
                                    <p>We are a team of designers and developers that create high quality HTML Template &
                                        Woocommerce, Shopify Theme.
                                    </p>
                                </div>
                                <div class="widgets-essential_stuff">
                                    <ul>
                                        <li class="uren-address"><span>Address:</span> Ashulia
                                            Savar,Dhaka, Bangladesh</li>
                                        <li class="uren-phone"><span>Call
                                        Us:</span> <a href="tel://+880123123321345">+880123 321 345</a>
                                        </li>
                                        <li class="uren-email"><span>Email:</span> <a href="mailto://info@yourdomain.com">info@yourdomain.com</a></li>
                                    </ul>
                                </div>
                                <div class="uren-social_link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fab fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-widgets_area">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Information</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">About Us</a></li>
                                                <li><a href="javascript:void(0)">Delivery Information</a></li>
                                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Customer Service</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                                <li><a href="javascript:void(0)">Returns</a></li>
                                                <li><a href="javascript:void(0)">Site Map</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Extras</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">About Us</a></li>
                                                <li><a href="javascript:void(0)">Delivery Information</a></li>
                                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>My Account</h3>
                                        </div>
                                        <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">My Account</a></li>
                                                <li><a href="javascript:void(0)">Order History</a></li>
                                                <li><a href="javascript:void(0)">Wish List</a></li>
                                                <li><a href="javascript:void(0)">Newsletter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container-fluid">
                    <div class="footer-bottom_nav">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright">
                                    <span><a href="#">© Omar faruqe</a></span>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="payment">
                                    <a href="#">
                                        <img src="front_css/assets/images/footer/payment/1.png" alt="Uren's Payment Method">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Footer Area End Here -->
        
    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="front_css/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Modernizer JS -->
    <script src="front_css/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="front_css/assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="front_css/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="front_css/assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="front_css/assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="front_css/assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="front_css/assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="front_css/assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="front_css/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="front_css/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Lightgallery JS -->
    <script src="front_css/assets/js/plugins/lightgallery.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="front_css/assets/js/plugins/scroll-top.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="front_css/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="front_css/assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="front_css/assets/js/plugins/jquery.zoom.min.js"></script>

    <!-- Main JS -->
    <script src="front_css/assets/js/main.js"></script>

</body>

</html>