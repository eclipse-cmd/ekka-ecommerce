<?php
require_once('./config/root.php');
require_once('./config/Product.php');
$isAuth = $GLOBALS['isAuthenticated'];
// if ($isAuth !== true) {
//     header("Location: ./login");
// }
$products = Product::getProducts();
if ($products['status'] === true) {
    $products = $products['data'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('./_inc/header-index.php');
    ?>
</head>

<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <?php require_once('./_inc/header.php') ?>

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">

                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="<?php ROOT ?>./cart.php" class="btn btn-primary">View Cart</a>
                    <a href="<?php ROOT ?>./checkout.php" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">New Fashion Collection Summer Sale</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex ec-slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">Boat Headphone Sets</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">For
                                All</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">For
                                Men</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">For
                                Women</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child">For
                                Children</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-for-all">
                            <div class="row">
                                <?php if (count($products) > 0) : ?>
                                    <?php foreach ($products as $product) : ?>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="" class="image">
                                                            <?php
                                                            $img1 = json_decode($product['img_path'])[0];
                                                            $img2 = json_decode($product['img_path'])[1];
                                                            if ($img1) print("<img class='main-class' src='assets/images/product-image/" . $img1 . "' alt='product'>");
                                                            if ($img2) print("<img class='hover-image' src='assets/images/product-image/" . $img2 . "' alt='product'>");
                                                            ?>
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <!-- <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal">
                                                            <img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" />
                                                        </a> -->
                                                        <div class="ec-pro-actions">
                                                            <button title="Add To Cart" class="add-to-cart" onclick="addToCart(<?php echo $product['id'] ?>)">
                                                                <img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                                                                Add To Cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <h5 class="ec-pro-title" style="text-transform: capitalize;">
                                                        <a href="<?php echo ROOT ?>/product/<?php echo $product['id'] ?>/<?php echo join("-", explode(" ", strtolower($product['name']))) ?>"><?php echo $product['name'] ?></a>
                                                    </h5>
                                                    <div class="ec-pro-rating">
                                                        <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
                                                            <i class="ecicon eci-star fill"></i>
                                                        <?php endfor ?>
                                                        <?php for ($i = 0; $i < 5 - $product['rating']; $i++) : ?>
                                                            <i class="ecicon eci-star"></i>
                                                        <?php endfor ?>
                                                    </div>
                                                    <span class="ec-price">
                                                        <span class="old-price">$27.00</span>
                                                        <span class="new-price">$<?php echo $product['price'] ?></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-men">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_1.jpg" data-src-hover="assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_2.jpg" data-src-hover="assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/7_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/7_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_1.jpg" data-src-hover="assets/images/product-image/7_1.jpg" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_2.jpg" data-src-hover="assets/images/product-image/7_2.jpg" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$18.00" data-new="$15.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/2_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/2_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$20.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/2_1.jpg" data-src-hover="assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/4_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/4_2.jpg" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_1.jpg" data-src-hover="assets/images/product-image/4_1.jpg" data-tooltip="Gray"><span style="background-color:#ebbf60;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_2.jpg" data-src-hover="assets/images/product-image/4_2.jpg" data-tooltip="Orange"><span style="background-color:#b4fc57;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_3.jpg" data-src-hover="assets/images/product-image/4_3.jpg" data-tooltip="Green"><span style="background-color:#2ea1cd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/4_4.jpg" data-src-hover="assets/images/product-image/4_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#c1a1fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/5_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/5_2.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/5_1.jpg" data-src-hover="assets/images/product-image/5_1.jpg" data-tooltip="Gray"><span style="background-color:#9e9e9e;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/5_2.jpg" data-src-hover="assets/images/product-image/5_2.jpg" data-tooltip="Orange"><span style="background-color:#eb8e76;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$10.00" data-tooltip="Small">32</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$17.00" data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$15.00" data-tooltip="Large">36</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-shop.php" class="image">
                                                    <img class="main-image" src="assets/images/product-image/10_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/10_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Shoes for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_1.jpg" data-src-hover="assets/images/product-image/10_1.jpg" data-tooltip="Gray"><span style="background-color:#41d49c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_2.jpg" data-src-hover="assets/images/product-image/10_2.jpg" data-tooltip="Orange"><span style="background-color:#fc8484;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_3.jpg" data-src-hover="assets/images/product-image/10_3.jpg" data-tooltip="Green"><span style="background-color:#db94f7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/10_4.jpg" data-src-hover="assets/images/product-image/10_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#24da0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve T-Shirt</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Gray"><span style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Orange"><span style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Green"><span style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-women">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Shoes for Men</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Gray"><span style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Orange"><span style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Green"><span style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_1.jpg" data-src-hover="assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_2.jpg" data-src-hover="assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/3_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_1.jpg" data-src-hover="assets/images/product-image/3_1.jpg" data-tooltip="Gray"><span style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_2.jpg" data-src-hover="assets/images/product-image/3_2.jpg" data-tooltip="Orange"><span style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_3.jpg" data-src-hover="assets/images/product-image/3_3.jpg" data-tooltip="Green"><span style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_5.jpg" data-src-hover="assets/images/product-image/3_5.jpg" data-tooltip="Sky Blue"><span style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/11_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/11_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                                        Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Classic Leather purse</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_1.jpg" data-src-hover="assets/images/product-image/11_1.jpg" data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_2.jpg" data-src-hover="assets/images/product-image/11_2.jpg" data-tooltip="Orange"><span style="background-color:#ff4a77;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_3.jpg" data-src-hover="assets/images/product-image/11_3.jpg" data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/11_4.jpg" data-src-hover="assets/images/product-image/11_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#ffcc5e;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/12_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/12_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                                        Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Fancy Ladies Sandal</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_1.jpg" data-src-hover="assets/images/product-image/12_1.jpg" data-tooltip="Gray"><span style="background-color:#db9dff;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_2.jpg" data-src-hover="assets/images/product-image/12_2.jpg" data-tooltip="Orange"><span style="background-color:#00ffff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_3.jpg" data-src-hover="assets/images/product-image/12_3.jpg" data-tooltip="Green"><span style="background-color:#ffa7f3;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/12_4.jpg" data-src-hover="assets/images/product-image/12_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#89ff7e;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/13_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/13_2.jpg" alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                                        Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Leather Backpack</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_1.jpg" data-src-hover="assets/images/product-image/13_1.jpg" data-tooltip="Gray"><span style="background-color:#deffa4;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_2.jpg" data-src-hover="assets/images/product-image/13_2.jpg" data-tooltip="Orange"><span style="background-color:#ffcdbe;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_3.jpg" data-src-hover="assets/images/product-image/13_3.jpg" data-tooltip="Green"><span style="background-color:#ff94df;"></span></a>
                                                        </li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/13_4.jpg" data-src-hover="assets/images/product-image/13_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#dd9bfc;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/14_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/14_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Watch for Women</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_1.jpg" data-src-hover="assets/images/product-image/14_1.jpg" data-tooltip="Gray"><span style="background-color:#bb8641;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_2.jpg" data-src-hover="assets/images/product-image/14_2.jpg" data-tooltip="Orange"><span style="background-color:#5dd677;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_3.jpg" data-src-hover="assets/images/product-image/14_3.jpg" data-tooltip="Green"><span style="background-color:#32ffdd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/14_4.jpg" data-src-hover="assets/images/product-image/14_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#56ccfa;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Small">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Medium">7</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$90.00" data-new="$80.00" data-tooltip="Large">8</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$100.00" data-new="$90.00" data-tooltip="Extra Large">9</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                        <!-- ec 4th Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-for-child">
                            <div class="row">
                                <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/1_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_1.jpg" data-src-hover="assets/images/product-image/1_1.jpg" data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_2.jpg" data-src-hover="assets/images/product-image/1_2.jpg" data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_3.jpg" data-src-hover="assets/images/product-image/1_3.jpg" data-tooltip="Green"><span style="background-color:#ffc476;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_4.jpg" data-src-hover="assets/images/product-image/1_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#1af0ba;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/15_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/15_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Clasic Baby Shoes
                                                </a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$80.00</span>
                                                <span class="new-price">$70.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_1.jpg" data-src-hover="assets/images/product-image/15_1.jpg" data-tooltip="Gray"><span style="background-color:#ffacfb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_2.jpg" data-src-hover="assets/images/product-image/15_2.jpg" data-tooltip="Orange"><span style="background-color:#90dfff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_3.jpg" data-src-hover="assets/images/product-image/15_3.jpg" data-tooltip="Green"><span style="background-color:#c6ff4a;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/15_4.jpg" data-src-hover="assets/images/product-image/15_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#ffb158;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00" data-tooltip="Small">4</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00" data-tooltip="Medium">5</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00" data-tooltip="Large">6</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Extra Large">7</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/16_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/16_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby Doctor Toy Kit</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_1.jpg" data-src-hover="assets/images/product-image/16_1.jpg" data-tooltip="Gray"><span style="background-color:#6ee9ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_2.jpg" data-src-hover="assets/images/product-image/16_2.jpg" data-tooltip="Orange"><span style="background-color:#eb99ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_3.jpg" data-src-hover="assets/images/product-image/16_3.jpg" data-tooltip="Green"><span style="background-color:#ff6464;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/16_4.jpg" data-src-hover="assets/images/product-image/16_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#e476ff;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/17_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/17_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby Leather Purse</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$60.00</span>
                                                <span class="new-price">$50.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_1.jpg" data-src-hover="assets/images/product-image/17_1.jpg" data-tooltip="Gray"><span style="background-color:#8ad2fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_2.jpg" data-src-hover="assets/images/product-image/17_2.jpg" data-tooltip="Orange"><span style="background-color:#ff8ef6;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_3.jpg" data-src-hover="assets/images/product-image/17_3.jpg" data-tooltip="Green"><span style="background-color:#ffbe31;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/17_4.jpg" data-src-hover="assets/images/product-image/17_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#a3ffba;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/9_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/9_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Shoes for Boy</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_1.jpg" data-src-hover="assets/images/product-image/9_1.jpg" data-tooltip="Gray"><span style="background-color:#21b7fc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_2.jpg" data-src-hover="assets/images/product-image/9_2.jpg" data-tooltip="Orange"><span style="background-color:#1df0ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/9_3.jpg" data-src-hover="assets/images/product-image/9_3.jpg" data-tooltip="Green"><span style="background-color:#94f7a1;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$27.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$45.00" data-new="$35.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$30.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_1.jpg" data-src-hover="assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_2.jpg" data-src-hover="assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/8_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/8_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_2.jpg" data-src-hover="assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_3.jpg" data-src-hover="assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/8_4.jpg" data-src-hover="assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="assets/images/product-image/3_1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/3_2.jpg" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_1.jpg" data-src-hover="assets/images/product-image/3_1.jpg" data-tooltip="Gray"><span style="background-color:#75e3ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_2.jpg" data-src-hover="assets/images/product-image/3_2.jpg" data-tooltip="Orange"><span style="background-color:#11f7d8;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_3.jpg" data-src-hover="assets/images/product-image/3_3.jpg" data-tooltip="Green"><span style="background-color:#acff7c;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/3_5.jpg" data-src-hover="assets/images/product-image/3_5.jpg" data-tooltip="Sky Blue"><span style="background-color:#e996fa;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 shop-all-btn"><a href="shop-left-sidebar-col-3.html">Shop All Collection</a></div>
                            </div>
                        </div>
                        <!-- ec 4th Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once("./_inc/footer.php") ?>

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle">
                        <img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" />
                        <span class="ec-cart-noti ec-header-count cart-count-lable"><?php echo count($session_cart) ?></span>
                    </a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="<?php ROOT ?> index.php" class="ec-header-btn"><img src="assets/images/icons/home.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="<?php ROOT ?>./login.php" class="ec-header-btn"><img src="assets/images/icons/user.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <?php require_once('./_inc/js.php') ?>

    <script>
        setCart()
        var products = [];

        (function getProducts() {
            $.ajax({
                url: `<?php echo ROOT ?>/config/core/get-products`,
                type: "POST",

                success: function(response) {
                    response = JSON.parse(response)
                    if (response.status === true) {
                        products = response.data.products
                    }
                }
            });
        })();

        // get product
        // function getProduct(id) {

        // }

        function getCart() {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: `<?php echo ROOT ?>/config/core/get-cart`,
                    type: "GET",
                    success: function(response) {
                        response = JSON.parse(response)
                        if (response.status === true) {
                            const cart = response.data
                            if (cart.length > 0) {
                                addCartToStorage(cart)
                            }
                            console.log(cart)
                        }
                        const cart = JSON.parse(localStorage.getItem('cart')) ?? []

                        $.ajax({
                            url: `<?php echo ROOT ?>/config/core/set-session-cart`,
                            type: "POST",
                            data: {
                                'cart': JSON.stringify(cart)
                            }

                        });

                        resolve(cart)
                    }
                });
            })
        }

        function setCart() {
            const cartDiv = $('.eccart-pro-items')

            getCart().then(cart => {

                if (cart.length > 0) {
                    let htmlDiv = ""
                    for (let i = 0; i < cart.length; i++) {
                        htmlDiv = htmlDiv.concat(`
                        <li>
                            <a href="<?php echo ROOT ?>/product/${cart[i].id}/${cart[i].name}" class="sidekka_pro_img">
                                <img src="<?php echo ROOT ?>/assets/images/product-image/${cart[i]['img_path'][0]}" alt='product'>
                            </a>
                            <div class="ec-pro-content">
                                <a href="<?php echo ROOT ?>/product/${cart[i].id}/${cart[i].name}" class="cart_pro_title">${cart[i].name}</a>
                                <span class="cart-price"><span>${cart[i].price}</span> x 100</span>
                                <div class="qty-plus-minus"><div class="dec ec_qtybtn">-</div>
                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1">
                                <div class="inc ec_qtybtn">+</div></div>
                                <a href="javascript:void(0)" onclick = "remove()" class="remove">×</a>
                            </div>
                        </li>
                        `)
                        console.log(cart[i])
                    }

                    cartDiv.html(htmlDiv)
                } else {
                    cartDiv.html(`<li><p class='emp-cart-msg'>Your cart is empty!</p></li>`)
                }
            })
        }


        function remove() {
            var existingItem = JSON.parse(localStorage.getItem("cart"));
            var indexOf = 0;
            existingItem.splice(indexOf, 1)
            localStorage.setItem('cart', JSON.stringify(existingItem));
        }

        //Add to local storage cart
        function addCartToStorage(cart) {
            const localCart = JSON.parse(localStorage.getItem('cart')) ?? []

            const newCart = localCart.concat(cart)

            localStorage.setItem('cart', JSON.stringify(newCart))
        }

        function addToCart(id) {

            $.ajax({
                url: `<?php echo ROOT ?>/config/core/add-to-cart`,
                type: "POST",
                data: {
                    id
                },

                success: function(response) {
                    response = JSON.parse(response)
                    console.log(response)
                    if (response.status === false) {
                        const product = products.filter(p => p.id === id)[0]
                        addCartToStorage(product)
                        setCart()
                        const overlay = document.querySelector(".ec-side-cart-overlay")
                        const cartBox = document.querySelector("#ec-side-cart")
                        overlay.style.display = 'block'
                        cartBox.classList.add('ec-open')
                    }

                }

            });
        }
    </script>
</body>

</html>