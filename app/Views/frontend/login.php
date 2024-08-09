<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--  -->
    <link rel="stylesheet" href="<?= base_url()?>/public/assets/css/global.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--  -->
    <!-- Mulish font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!--  -->
</head>
<body>
    <div class="login-card card">
        <img class="logo" src="<?= base_url()?>/public/assets/images/logo  1.png" alt="">
        <h4>Let’s Sign In.!</h4>
        <p>Login to Your Account to Continue your Courses</p>
       <div class="login-info">
        <div class="input-box">
         <img src="<?= base_url()?>/public/assets/images/email.png" alt="">
         <input type="email" placeholder="email">
        </div>
        <div class="input-box ">
         <img src="<?= base_url()?>/public/assets/images/lock.png" alt="">
         <input type="password" placeholder="password">
         <!-- <img class="hide" src="<?= base_url()?>/public/assets/images/hide.png" alt=""> -->
        </div>
        <div class="forget-box">
            <div class="remember-box">
                <input type="radio">
                <p>Remember me</p>
            </div>
            <a href="#"><p>Forgot Password?</p></a>
        </div>
        <button class="login-action">Sign in <div class="imgs"><img src="<?= base_url()?>/public/assets/images/arrow.png" alt=""></div></button>
      
       </div>
       <div class="other-action">
       
        <!-- <p>Don't have an Account <a href="signup.html">SIGN UP</a></p> -->
       </div>
    </div>
</body>
</html>