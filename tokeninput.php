<?php
    require_once('./config/root.php');
    require_once('./config/User.php');

    
   function tokenvalidation($fetchtoken)
   {
    $_POST[$fetchtoken] ??= '';
    return htmlspecialchars(stripcslashes($_POST[$fetchtoken]));
   };
   $data = [
        $token = ''
   ];
   $tokenValidate = [];


   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $data['token'] = tokenvalidation('tokens');
       $tokenValidate = User::tokenvalidation($_POST);

       if ($tokenValidate['status'] === true) {
        try {
            $_SESSION['token'] = $data['token'];
        header("Location: ./new-password.php");

        } catch (Exception $e) {
            echo "pls connent to the internet";
        }
       }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once('./_inc/header-login.php') ?>
</head>

<body>
   

     <!-- Ec breadcrumb start -->
     <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Step -2- token verification</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?php ROOT ?> ./password_recovery.php">Password Recovery</a></li>
                                <li class="ec-breadcrumb-item active">Token input</li>
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
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            <form action="" method="post">
                                <span class="ec-login-wrap margin_bottom">
                                    <label>Token*</label>
                                    <input type="text" name="tokens" placeholder="Enter token" required class="<?php echo isset( $tokenValidate['message']) ? 'is-valid' : '' ?> <?php echo isset( $tokenValidate['message']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $tokenValidate['message'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                
                                <span class="ec-login-wrap ec-login-btn">
                                    <button class="btn btn-primary" type="submit">Verify Token</button>
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
                    <a href="<?php ROOT ?>./login.php" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <?php require_once('./_inc/js.php') ?>
</body>

</html>