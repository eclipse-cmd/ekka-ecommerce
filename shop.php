<?php
    require_once('./config/root.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
     
    <title>Ekka - Ecommerce HTML Template.</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nouislider.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
    
</head>

<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <?php require_once('./_inc/header.php') ?>

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <?php require_once("./_inc/sideCart.php") ?>
    <!-- ekka Cart End -->

  <!-- Ec breadcrumb start -->
  <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Shop page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid-50 active">
                                    <img src="assets/images/icons/grid.svg"
                                        class="svg_img gl_svg" alt="grid" />
                                </button>
                                <button class="btn btn-list-50">
                                    <img src="assets/images/icons/list.svg"
                                        class="svg_img gl_svg" alt="list" />
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/6_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/6_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/6_1.jpg"
                                                                data-src-hover="assets/images/product-image/6_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/6_2.jpg"
                                                                data-src-hover="assets/images/product-image/6_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                                data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/7_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/7_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/7_1.jpg"
                                                                data-src-hover="assets/images/product-image/7_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/7_2.jpg"
                                                                data-src-hover="assets/images/product-image/7_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b89df8;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$12.00" data-new="$10.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                                data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                                data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/1_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/1_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/1_1.jpg"
                                                                data-src-hover="assets/images/product-image/1_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#90cdf7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/1_2.jpg"
                                                                data-src-hover="assets/images/product-image/1_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ff3b66;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/1_3.jpg"
                                                                data-src-hover="assets/images/product-image/1_3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#ffc476;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/1_4.jpg"
                                                                data-src-hover="assets/images/product-image/1_4.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#1af0ba;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$40.00" data-new="$30.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                                data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/2_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/2_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>                                                
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/2_1.jpg"
                                                                data-src-hover="assets/images/product-image/2_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fdbf04;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/3_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/3_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Designer Leather Purses</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/3_1.jpg"
                                                                data-src-hover="assets/images/product-image/3_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/3_2.jpg"
                                                                data-src-hover="assets/images/product-image/3_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/3_3.jpg"
                                                                data-src-hover="assets/images/product-image/3_3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/3_5.jpg"
                                                                data-src-hover="assets/images/product-image/3_5.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/4_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/4_2.jpg" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Cowboy Hat</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/4_1.jpg"
                                                                data-src-hover="assets/images/product-image/4_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#ebbf60;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/4_2.jpg"
                                                                data-src-hover="assets/images/product-image/4_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b4fc57;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/4_3.jpg"
                                                                data-src-hover="assets/images/product-image/4_3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#2ea1cd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/4_4.jpg"
                                                                data-src-hover="assets/images/product-image/4_4.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#c1a1fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/5_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/5_2.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather Belt for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/5_1.jpg"
                                                                data-src-hover="assets/images/product-image/5_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#9e9e9e;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/5_2.jpg"
                                                                data-src-hover="assets/images/product-image/5_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#eb8e76;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$15.00" data-new="$10.00"
                                                                data-tooltip="Small">32</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$17.00"
                                                                data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="assets/images/product-image/8_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="assets/images/product-image/8_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart Watches</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.</div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/8_2.jpg"
                                                                data-src-hover="assets/images/product-image/8_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/8_3.jpg"
                                                                data-src-hover="assets/images/product-image/8_3.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="assets/images/product-image/8_4.jpg"
                                                                data-src-hover="assets/images/product-image/8_4.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop page -->
    
    <?php require_once("./_inc/footer.php") ?>

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <?php require_once('./_inc/js.php') ?>
</body>

</html>