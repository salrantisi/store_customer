<?php
include 'include/header.php'
?>
   <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here...">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home version 01</a></li>
                                    <li><a href="index-2.html">Home version 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="megamenu dropdown">
                                    <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left
                                                    sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                    sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product
                                                    details
                                                    affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details
                                                    variable</a></li>
                                            <li><a href="product-details-group.html">product details
                                                    group</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                        <ul class="dropdown">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                        <ul class="dropdown">
                                            <li><a href="my-account.html">my-account</a></li>
                                            <li><a href="login-register.html">login-register</a></li>
                                            <li><a href="contact-us.html">contact us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">shop grid left sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                            <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                            <li><a href="product-details-variable.html">product details variable</a></li>
                                            <li><a href="product-details-group.html">product details group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-grid-full-width.html">blog grid no sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                    <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <!-- user setting option start -->
                <div class="mobile-settings">
                    <ul class="nav">
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Currency
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currency">
                                    <a class="dropdown-item" href="#">$ USD</a>
                                    <a class="dropdown-item" href="#">$ EURO</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown mobile-top-dropdown">
                                <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                    <a class="dropdown-item" href="my-account.html">my account</a>
                                    <a class="dropdown-item" href="login-register.html"> login</a>
                                    <a class="dropdown-item" href="login-register.html">register</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- user setting option end -->

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0123456789</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

    <!-- main wrapper start -->
    <main>
        <!-- hero slider section start -->
        <section class="hero-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                            <!-- single slider item start -->
                            <div class="hero-single-slide">
                                <div class="hero-slider-item bg-img" data-bg="layout/assets/img/slider/slider-1.png">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Top Selling!</h5>
                                        <h2 class="slide-title">New Collection</h2>
                                        <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                                        <a href="shop.html" class="btn btn-hero">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->

                            <!-- single slider item start -->
                            <div class="hero-single-slide">
                                <div class="hero-slider-item bg-img" data-bg="layout/assets/img/slider/slider-2.png">
                                    <div class="hero-slider-content slide-1">
                                        <h5 class="slide-subtitle">Best Selling!</h5>
                                        <h2 class="slide-title">Top Collection</h2>
                                        <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                                        <a href="shop.html" class="btn btn-hero">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single slider item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero slider section end -->

        <!-- service features start -->
        <section class="service-policy-area">
            <div class="container">
                <div class="row">
                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-1">
                            <div class="policy-icon">
                                <img src="layout/assets/img/icon/policy-1.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">FREE SHIPPING</h5>
                                <p class="policy-desc">Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->

                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-2">
                            <div class="policy-icon">
                                <img src="layout/assets/img/icon/policy-2.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">ONLINE SUPPORT</h5>
                                <p class="policy-desc">Online support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->

                    <!-- single policy item start -->
                    <div class="col-lg-4">
                        <div class="service-policy-item mt-30 bg-3">
                            <div class="policy-icon">
                                <img src="layout/assets/img/icon/policy-3.png" alt="policy icon">
                            </div>
                            <div class="policy-content">
                                <h5 class="policy-title">MONEY RETURN</h5>
                                <p class="policy-desc">Back guarantee under 5 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- single policy item start -->
                </div>
            </div>
        </section>
        <!-- service features end -->

        <!-- our product area start -->
        <section class="our-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Our Product</h2>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="layout/assets/img/product/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Leather Mens Slipper</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="layout/assets/img/product/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Quickiin Mens shoes</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="layout/assets/img/product/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Rexpo Womens shoes</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="layout/assets/img/product/4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Primitive Mens shoes</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->

                            <!-- product single item start -->
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="layout/assets/img/product/2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="product-details.html">Leather Mens Slipper</a>
                                    </h5>
                                    <div class="price-box">
                                        <span class="price-regular">$80.00</span>
                                        <span class="price-old"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                            title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->

        <!-- banner statistic area start -->
        <div class="banner-statistics">
            <div class="container">
                <div class="row no-gutters mtn-30">
                    <div class="col-md-6">
                        <div class="img-container mt-30">
                            <a href="product-details.html">
                                <img src="layout/assets/img/banner/banner-1.png" alt="banner-image">
                            </a>
                            <div class="banner-text">
                                <h5 class="banner-subtitle">sports shoes</h5>
                                <h3 class="banner-title">20% Off<br>For Sports men</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-container mt-30">
                            <a href="product-details.html">
                                <img src="layout/assets/img/banner/banner-2.png" alt="banner-image">
                            </a>
                            <div class="banner-text">
                                <h5 class="banner-subtitle">sports shoes</h5>
                                <h3 class="banner-title">20% Off<br>For Sports men</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistic area end -->

        <!-- top seller area start -->
        <section class="top-seller-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">top seller</h2>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="product-banner">
                            <a href="#">
                                <img src="layout/assets/img/banner/banner-3.png" alt="product banner">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="top-seller-carousel slick-row-15 mtn-30">
                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="layout/assets/img/product/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Simple Fabric Shoe</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="layout/assets/img/product/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">exclusive mens shoe</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="layout/assets/img/product/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Quickiin Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="layout/assets/img/product/4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Primitive Men shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="layout/assets/img/product/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Sports Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->

                            <!-- product item start -->
                            <div class="slide-item">
                                <div class="pro-item-small mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="layout/assets/img/product/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pro-small-content">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Quickiin Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-regular">$80.00</span>
                                            <span class="price-old"><del>$70.00</del></span>
                                        </div>
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-link-2">
                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product item start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top seller area end -->

        <!-- latest blog area start -->
        <section class="latest-blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">our blog</h2>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-carousel-active slick-row-15">
                            <!-- blog single item start -->
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="layout/assets/img/blog/blog-1.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h5 class="blog-title">
                                        <a href="blog-details.html">
                                            Celebrity Daughter Opens About to Having Her Eye color
                                        </a>
                                    </h5>
                                    <ul class="blog-meta">
                                        <li><span>By: </span>Admin,</li>
                                        <li><span>On: </span>14.07.2029</li>
                                    </ul>
                                    <a href="blog-details.html" class="read-more">Read More...</a>
                                </div>
                            </div>
                            <!-- blog single item start -->

                            <!-- blog single item start -->
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="layout/assets/img/blog/blog-2.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h5 class="blog-title">
                                        <a href="blog-details.html">
                                            Sotto Winner Offering Money To Any Man That Will Date Her
                                        </a>
                                    </h5>
                                    <ul class="blog-meta">
                                        <li><span>By: </span>Admin,</li>
                                        <li><span>On: </span>14.07.2029</li>
                                    </ul>
                                    <a href="blog-details.html" class="read-more">Read More...</a>
                                </div>
                            </div>
                            <!-- blog single item start -->

                            <!-- blog single item start -->
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="layout/assets/img/blog/blog-3.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h5 class="blog-title">
                                        <a href="blog-details.html">
                                            Children Left Home Alone For 4 Days In TV Series Experiment
                                        </a>
                                    </h5>
                                    <ul class="blog-meta">
                                        <li><span>By: </span>Admin,</li>
                                        <li><span>On: </span>14.07.2029</li>
                                    </ul>
                                    <a href="blog-details.html" class="read-more">Read More...</a>
                                </div>
                            </div>
                            <!-- blog single item start -->

                            <!-- blog single item start -->
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="layout/assets/img/blog/blog-2.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h5 class="blog-title">
                                        <a href="blog-details.html">
                                            People Are Willing Lie When To Comes Money Research from
                                        </a>
                                    </h5>
                                    <ul class="blog-meta">
                                        <li><span>By: </span>Admin,</li>
                                        <li><span>On: </span>14.07.2029</li>
                                    </ul>
                                    <a href="blog-details.html" class="read-more">Read More...</a>
                                </div>
                            </div>
                            <!-- blog single item start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest blog area end -->

        <!-- brand area start -->
        <div class="brand-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active-carousel">
                            <div class="brand-item">
                                <a href="#">
                                    <img src="layout/assets/img/brand/br1.png" alt="brand image">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="#">
                                    <img src="layout/assets/img/brand/br2.png" alt="brand image">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="#">
                                    <img src="layout/assets/img/brand/br3.png" alt="brand image">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="#">
                                    <img src="layout/assets/img/brand/br4.png" alt="brand image">
                                </a>
                            </div>
                            <div class="brand-item">
                                <a href="#">
                                    <img src="layout/assets/img/brand/br5.png" alt="brand image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->
    </main>
    <!-- main wrapper end -->

    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img img-zoom">
                                        <img src="layout/assets/img/product/product-details-img1.jpg" alt="product thumb" />
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="layout/assets/img/product/product-details-img2.jpg" alt="product thumb"/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="layout/assets/img/product/product-details-img3.jpg" alt="product thumb"/>
                                    </div>
                                    <div class="pro-large-img img-zoom">
                                        <img src="layout/assets/img/product/product-details-img4.jpg" alt="product thumb"/>
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-5">
                                    <div class="pro-nav-thumb"><img src="layout/assets/img/product/product-details-img1.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="layout/assets/img/product/product-details-img2.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="layout/assets/img/product/product-details-img3.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="layout/assets/img/product/product-details-img4.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title">Primitive Mens Premium Shoes</h3>
                                    <div class="pro-review">
                                        <span><a href="#">1 Review(s)</a></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <a href="cart.html" class="btn btn-default">Add To Cart</a>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Availability:</h5>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5 class="cat-title">Share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->
<?php
include 'include/footer.php'; 
?>