<?php
    require_once('./config/root.php');
    require_once('./config/User.php');

    
   function NewPassword($passwordReset)
   {
    $_POST[$passwordReset] ??= '';
    return htmlspecialchars(stripcslashes($_POST[$passwordReset]));
   };

   define('ERROR_MSG', ucwords('this field is required'));
   $errors = [];
 $response = [
                'status' => null,
                'data' => [
                    'message' => ''
                ]
];


   $data = [
        $password = '',
        $password_confirmnation = ''
   ];

$tokenValidate = null;

if ($_SESSION['token']) {
    $tokenValidate = $_SESSION['token'];
   
}else{
    header("Location: ./tokeninput.php");
}

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $data['password'] = NewPassword('password');
       $data['password_confirmation'] = NewPassword('confirm_password');
      
        if (strlen($data['password'] < 5)) {
           $errors['password'] = ucwords('password is too short');
       }
       if (!$data['password']) {
           $errors['password'] = ERROR_MSG;
       }
      if (!$data['password_confirmation']) {
           $errors['confirm_password'] = ERROR_MSG;
       }
       if ($data['password'] !== $data['password_confirmation']) {
           $errors['confirm_password'] = ucwords('password does not match');
       }
       $hash_password = password_hash($data['password'], PASSWORD_DEFAULT);
       if (count($errors) < 1) {
                $stm = $GLOBALS['dbh']->prepare('UPDATE user SET password = ? WHERE remember_token = ?');
                try {
                    $stm->execute([$hash_password, $tokenValidate]);
                    $stm2 = $GLOBALS['dbh']->prepare('UPDATE user SET remember_token = ? WHERE remember_token = ?');
                    // $stm2->execute([substr(str_shuffle('1234567890ASDFGHJKLPOIUYTREWQasdfghjklpoiuytreww'), 0,5), $tokenValidate]);
                    $stm2->execute([substr(str_shuffle('1234567890'),0,5), $tokenValidate]);

                    $response = [
                        'statu' => true,
                        'data' => [
                            'message' => 'password has been reset'
                        ]
                    ];
                    header("Location: login.php");
                } catch (Exception $e) {
                    $errors[] = $e->getmessage();
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
                            <h2 class="ec-breadcrumb-title">Step -3- New Password </h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?php ROOT ?> ./tokeninput.php">Token input</a></li>
                                <li class="ec-breadcrumb-item active">create new password</li>
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
                                    <label>New password*</label>
                                    <input type="password" name="password" placeholder="Enter New Password" value= "<?php echo $data['password'] ?? ''?>"  class="<?php echo isset( $errors['password']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['password'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                 <span class="ec-login-wrap margin_bottom">
                                    <label>confirm New password*</label>
                                    <input type="password" name="confirm_password" value= "<?php echo $data['confirm_password'] ?? ''?>" placeholder="confirm new password"  class=" mb-0 <?php echo isset( $tokenValidate['message']) ? 'is-valid' : '' ?> <?php echo isset( $errors['confirm_password']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['confirm_password'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                <span class="ec-login-wrap ec-login-btn small">
                                    <button class="btn btn-primary " type="submit">create password</button>
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