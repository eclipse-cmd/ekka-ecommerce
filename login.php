<?php
require_once('./config/root.php');
require_once('./config/User.php');


if ($GLOBALS['isAuthenticated'] === true) {
    header("Location: ./index.php");
}
$response = [];
$success = [];

$data = [
    $param = '',
    $password = ''
];
function validatelogin($logindata)
{
    $_POST['$logindata'] ??= '';
    return htmlspecialchars(stripcslashes($_POST[$logindata]));
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data['param'] = validatelogin('param');
    $data['password'] = validatelogin('password');
    $response = User::login($data);
    if ($response['status'] === false) {
    } elseif ($response['status'] === true) {
        $_SESSION['isAuth'] = $response;
        header("Location: index.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./_inc/header-login.php') ?>
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
                            <h2 class="ec-breadcrumb-title">Login</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?php ROOT ?> index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Login</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec login page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Log In</h2>
                        <h2 class="ec-title">Log In</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <?php if (!empty($response)) : ?>
                                <div class="alert alert-danger bg-danger text-white text-capitalize text-center ">
                                    <?php if (!empty($response)) : ?>
                                        <div>
                                            <?php echo $response['message'] ?? '' ?>
                                            <?php echo $response['messages'] ?? '' ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                            <form action="" method="post">
                                <span class="ec-login-wrap margin_bottom">
                                    <label>Email Address*</label>
                                    <input type="text" name="param" placeholder="Enter your email add..." required class="<?php echo isset($response['message']) ? 'is-invalid' : '' ?>" value="<?php echo $data['param'] ?? '' ?>">

                                </span>
                                <span class="ec-login-wrap margin_bottom">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" required class="<?php echo isset($response['messages']) ? 'is-invalid' : '' ?>">

                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="<?php ROOT ?>./password_recovery.php">Forgot Password?</a></label>
                                </span>
                                <span class="ec-login-wrap ec-login-btn">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                    <a href="create-account.php" class="btn btn-secondary">Register</a>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="<?php ROOT ?> index.php" class="ec-header-btn"><img src="assets/images/icons/home.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="<?php ROOT ?>./login.php" class="ec-header-btn"><img src="assets/images/icons/user.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <?php require_once('./_inc/js.php') ?>
</body>

</html>