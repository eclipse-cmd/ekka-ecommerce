<?php
    require_once('./config/root.php');
    require_once('./config/User.php');

     $isAuth = $GLOBALS['isAuthenticated'];

    if($isAuth === true){
    header("Location: ./index.php");
    }
    
    // sign up validation

    $errors = [];
    define('ERROR_MSG', 'This field is required');

    function validateData($fetchdata)
    {
        $_POST['$fetchdata'] ??= '';
        return htmlspecialchars(stripcslashes($_POST[$fetchdata]));
    }

    $data = [
        $first_name = '',
        $last_name = '',
        $email = '',
        $phone_number = '',        
        $password = '',
        $password_confirmnation = ''
        // $city = '',
        // $country = '',
    ];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $data["first_name"] = validateData('firstname');
      $data["last_name"] = validateData('lastname');
      $data["email"] = validateData('email');
      $data["phone_number"] = validateData('phonenumber');
      $data["password"] = validateData('password');
      $data["password_confirmnation"] = validateData('password_confirmnation');
      // $data["city"] = validateData('city');
      // $data["country"] = validateData('ec_select_country');
  

    if (!$data['first_name']) {
        $errors['firstname'] = ERROR_MSG;
    }
    if (!$data['last_name']) {
        $errors['lastname'] = ERROR_MSG;
    }
    if (!$data['email']) {
        $errors['email'] = ERROR_MSG;
    }elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = ucfirst("this email is invalid");
    }
    if (!$data['phone_number']) {
        $errors['phonenumber'] = ERROR_MSG;
    }
    if (strlen($data['password']) < 5)  {
        $errors['password'] = ucfirst('password is too short');
    }
    if (!$data['password']) {
        $errors['password'] = ERROR_MSG;
    }
    if (!$data['password_confirmnation']) {
        $errors['password_confirmnation'] = ERROR_MSG;
    }
    if ($data['password'] !== $data['password_confirmnation']) {
        $errors['password_confirmnation'] = ucfirst('password does not match');
    }
   
   // print_r(count($errors));
   //  exit();
  if (count($errors) < 1) {
      $response = User::sign_up($data);
      if ($response['success'] === false) {
          $error = explode('1062', $response['error'])[1];
          if(strpos($error, 'email') !== false){
               $errors['email'] = $error; 
            } 
            if(strpos($error, 'phone_number') !== false){
                $errors['phonenumber'] = $error;
            }
           //   var_dump(explode('1062', $response['error'])) ;
           // $errors['database_error'] = explode('1062', $response['error'])[1];
      }
      // print_r($response);
      
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
                            <h2 class="ec-breadcrumb-title">Register</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="<?php ROOT ?> index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Register</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Start Register -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        <h2 class="ec-title">Register</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                       
                            <form action="" method="post">
                                <span class="ec-register-wrap ec-register-half">
                                    <label>First Name*</label>
                                    <input type="text" name="firstname" value="<?php echo $data['first_name'] ?? ''?>" placeholder="Enter your first name" class=" <?php echo isset( $errors['firstname']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['firstname'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Last Name*</label>
                                    <input type="text" name="lastname" placeholder="Enter your last name" value="<?php echo $data['last_name'] ?? '' ?>" class=" <?php echo isset( $errors['lastname']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['lastname'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email add..." value="<?php echo $data['email'] ?? ''?>" class=" <?php echo isset( $errors['email']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['email'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phonenumber" placeholder="Enter your phone number" value="<?php echo $data['phone_number'] ?? ''?>" class="<?php echo isset( $errors['phonenumber']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['phonenumber'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Password*</label>
                                    <input type="password"  name="password"  class=" <?php echo isset( $errors['password']) ? 'is-invalid' : '' ?>" >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['password'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                 <span class="ec-register-wrap ec-register-half">
                                    <label>Confirm Password*</label>
                                    <input type="password" name="password_confirmnation" class=" <?php echo isset( $errors['password_confirmnation']) ? 'is-invalid' : '' ?>"  >
                                    <div class="invalid-feedback small">
                                            <div class="small text-danger">
                                                <?php echo $errors['password_confirmnation'] ?? '' ?>
                                            </div>
                                    </div>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address Line 1" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>City *</label>
                                    <input type="text" name="city" placeholder="City" />

                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Post Code *</label>
                                    <input type="text" name="postalcode" placeholder="Post Code" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Country *</label>
                                    <input type="text" name="country" placeholder="country" />

                                </span>
                              
                               <!--  <span class="ec-register-wrap ec-recaptcha">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S"
                                        data-callback="verifyRecaptchaCallback"
                                        data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control d-none" data-recaptcha="true" required
                                        data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span> -->
                                <span class="ec-register-wrap ec-register-btn">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register --> 

    <?php require_once('./_inc/js.php') ?>
</body>

</html>