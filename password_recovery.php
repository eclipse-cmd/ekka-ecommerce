<?php
    require_once('./config/root.php');
    require_once('./config/User.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'composer/vendor/autoload.php';
    $mail = new PHPMailer(true);


    
   function MAILVERIFICATION($fetchmail)
   {
    $_POST[$fetchmail] ??= '';
    return htmlspecialchars(stripcslashes($_POST[$fetchmail]));
   };
   $data = [
        $mails = ''
   ];
   $responses = [];


   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $data['mails'] = MAILVERIFICATION('recoverpass');
       $responses = User::passwordRecovery($_POST);
       if ($responses['status'] === false) {
           
       }elseif($responses['status'] === true){
            try {

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lovingbenga@gmail.com';                     //SMTP username
    $mail->Password   = 'lovingbenga.12';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('lovingbenga@gmail.com', 'EKKA-ECOMMERCE');
    $mail->addAddress($data['mails']);     //Add a recipient
    $mail->addAddress($data['mails']);               //Name is optional
    $mail->addReplyTo('lovingbenga@gmail.com', 'EKKA-ECOMMERCE');
    // $mail->addCC('lovingbenga@gmail.com');
    // $mail->addBCC($data['mails']);

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        $recovery_token = substr(str_shuffle('1234567890ASDFGHJKLPOIUYTREWQasdfghjklpoiuytreww'), 0,5);
                $message = "Please connent to the internet";

        $body = ('<body class="container"><h2> Your recovery token is </h2> <br> <b><h3 style="background-color: #0000ff73; text-align:center;            padding:10px 20px; border: 1px solid blue">'.$recovery_token.'</h3></b> <h3 style="text-align:center;">To reset your passowrd click <a href =".$url" >here</a></h3> </body>');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        $stm = $GLOBALS['dbh']->prepare("UPDATE user SET remember_token = '$recovery_token' WHERE gmail =?");

        try {
            $stm->execute([$data['mails']]);
            $mail->send();
            header("Location: ./tokeninput.php");

        } catch (Exception $e) {
                   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
                            <h2 class="ec-breadcrumb-title">Step -1- verify email</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?php ROOT ?> ./login.php">login</a></li>
                                <li class="ec-breadcrumb-item active">Password Recovery</li>
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
                                    <label>Email Address*</label>
                                    <input type="text" name="recoverpass" placeholder="Enter verification email" required class="<?php echo isset( $responses['user']) ? 'is-valid' : '' ?> <?php echo isset( $responses['message']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $responses['message'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                
                                <span class="ec-login-wrap ec-login-btn">
                                    <button class="btn btn-primary" type="submit">verify mail</button>
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