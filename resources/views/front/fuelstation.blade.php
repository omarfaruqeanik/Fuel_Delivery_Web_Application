<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fuel Station List</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="front_cssassets/images/favicon.ico">

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
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here -->
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
                            <div class="hm-form_area">
                                <form action="{{ url('/fuelstation') }}" method="GET" class="hm-searchbox">
                                    <select name="fuel_name" class="nice-select select-search-category">
                                        <option value="">All Fuel</option>
                                        <option value="Petrol">Octane</option>
                                        <option value="Octane">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                    </select>
                                    <input type="text" name="area" placeholder="Enter your search key ...">
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
                                <li class="menu-item-has-children active"><a href="index.html"><span
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

        <!-- Begin Uren's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>All Fuel Station List</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Grid Fullwidth</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->

        <!-- Begin Uren's Shop Grid Fullwidth  Area -->
        <div class="shop-content_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       
                        <div class="shop-product-wrap grid gridview-3 listfullwidth img-hover-effect_area row">
                           
                    @foreach($fuelstn as $fulsn)
                        <div class="col-lg-4">
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <iframe src="{{$fulsn->map_url}}" 
                                                    class="primary-img"  style="border:0;" 
                                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                    </iframe>   </a>
                                                <div class="sticker">
                                                    <span class="sticker">New1</span>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="uren-add_cart" href="{{ URL::to('orderplace/' . $fulsn->id) }}" data-toggle="tooltip" data-placement="top" title="Add To Cart Fuel"><i
                                                            class="ion-bag"></i></a>
                                                        </li>
                                                        <!-- <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Cart Petrol"><i
                                                            class="ion-bag"></i></a>
                                                        </li>
                                                        <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Cart Diesel"><i
                                                            class="ion-bag"></i></a>
                                                        </li> -->
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                            class="ion-android-open"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    
                                                    <h4>Name: {{$fulsn->stn_name}}</h4>
                                                    <h6>Phone: {{$fulsn->stn_phn}}</h6>
                                                    <h6>Area: {{$fulsn->area}}</h6>
                                                    <div class="price-box">
                                                    @Isset($fulsn->fuel_name1)
                                                    <span class="new-price">Fuel Name: {{$fulsn->fuel_name1}}</span> <br>
                                                    @endisset
                                                    @Isset($fulsn->fuel_name2)
                                                    <span class="new-price">Fuel Name: {{$fulsn->fuel_name2}}</span> <br>
                                                    @endisset
                                                    @Isset($fulsn->fuel_name3)
                                                    <span class="new-price">Fuel Name: {{$fulsn->fuel_name3}}</span>
                                                    @endisset
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                @endforeach


                        </div>
                        
        <!-- Begin Uren's Footer Area -->
        <div class="uren-footer_area">
            <!-- <div class="footer-top_area">
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
            </div> -->
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
                                        <li class="uren-address"><span>Address:</span> The Barn,
                                            Ullenhall, Henley
                                            in
                                            Arden B578 5CC, England</li>
                                        <li class="uren-phone"><span>Call
                                        Us:</span> <a href="tel://+123123321345">+123 321 345</a>
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
                                    <span><a href="templateshub.net">Templateshub</a></span>
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
        <!-- Begin Uren's Modal Area -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area sp-area row">
                            <div class="col-lg-5">
                                <div class="sp-img_area">
                                    <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                    }'>
                                        <div class="single-slide red">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.254935228074!2d90.35459098633632!3d23.778474834142695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0bb1a67163f%3A0xf8520f840f8558ff!2sSahil%20Filling%20%26%20Gas%20Station!5e0!3m2!1sen!2sbd!4v1693542193182!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>                 </div>
                                    </div>
                                    <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider",
                                   "focusOnSelect": true,
                                   "arrows" : true,
                                   "spaceBetween": 30
                                  }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                ]'>
                                        <div class="single-slide red">
                                            <img src="front_css/assets/images/product/small-size/1.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="front_css/assets/images/product/small-size/2.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="front_css/assets/images/product/small-size/3.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="front_css/assets/images/product/small-size/4.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide black">
                                            <img src="front_css/assets/images/product/small-size/5.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide golden">
                                            <img src="front_css/assets/images/product/small-size/6.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="sp-content">
                                    <div class="sp-heading">
                                        <h5><a href="#">Dolorem odio provident ut nihil</a></h5>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li class="silver-color"><i class="ion-android-star"></i></li>
                                            <li class="silver-color"><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price new-price-2">$194.00</span>
                                        <span class="old-price">$241.00</span>
                                    </div>
                                    <div class="sp-essential_stuff">
                                        <ul>
                                            <li>Brands <a href="javascript:void(0)">Buxton</a></li>
                                            <li>Product Code: <a href="javascript:void(0)">Product 16</a></li>
                                            <li>Reward Points: <a href="javascript:void(0)">100</a></li>
                                            <li>Availability: <a href="javascript:void(0)">In Stock</a></li>
                                            <li>EX Tax: <a href="javascript:void(0)"><span>$453.35</span></a></li>
                                            <li>Price in reward points: <a href="javascript:void(0)">400</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-list_area">
                                        <div class="color-list_heading">
                                            <h4>Available Options</h4>
                                        </div>
                                        <span class="sub-title">Color</span>
                                        <div class="color-list">
                                            <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                                <span class="bg-red_color"></span>
                                                <span class="color-text">Red (+$150)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                                <span class="burnt-orange_color"></span>
                                                <span class="color-text">Orange (+$170)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                                <span class="brown_color"></span>
                                                <span class="color-text">Brown (+$120)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                                <span class="raw-umber_color"></span>
                                                <span class="color-text">Umber (+$125)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="black">
                                                <span class="black_color"></span>
                                                <span class="color-text">Black (+$125)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="golden">
                                                <span class="golden_color"></span>
                                                <span class="color-text">Golden (+$125)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <div class="uren-group_btn">
                                        <ul>
                                            <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                            <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="uren-tag-line">
                                        <h6>Tags:</h6>
                                        <a href="javascript:void(0)">Ring</a>,
                                        <a href="javascript:void(0)">Necklaces</a>,
                                        <a href="javascript:void(0)">Braid</a>
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
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fab fa-youtube"></i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Modal Area End Here -->

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

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="front_css/assets/js/main.js"></script>

</body>


</html>