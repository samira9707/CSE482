<?php
include 'php_actions/dbconnect.php';

session_start();
if (isset($_SESSION['login_user'])) {
    header("location:home.php");
    die();
}
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $encrptpass = md5($pass);

    

    $login = "SELECT user_id FROM user WHERE phone='$phone' or email = '$email' and password = '$encrptpass'";

    $result = mysqli_query($db, $login);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $id = $row['user_id'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {


        if(isset($_POST['rem'])){
            setcookie('login_user',$id, time()+86400 * 30);
        }
        $_SESSION['login_user'] = $id;
        header("location: home.php");
    } else {
        echo '<script> alert("Your Login Name or Password is invalid") </script>';
     
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tour GuideS</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="506621574105-36pjl1te4ca8mbldb5sf7hphjrfo1t64.apps.googleusercontent.com" >

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">
    <style>

html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 1100px;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  header,
  .view {
    height: 700px;
  }
}

.top-nav-collapse {
  background-color: #39448c !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
 .navbar:not(.top-nav-collapse) {
  background: #39448c !important;
 }
}

h6 {
  line-height: 1.7;
}

</style>


</head>

<body>
    <!-- Start your project here-->


   <!-- Main navigation -->
<header>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>TRAVELGUIDE</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
        
   
        </ul>
        <a class="btn btn-outline-white btn-rounded" href="signup.php">Sign Up</a>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('https://www.localguidesconnect.com/t5/image/serverpage/image-id/19639i548ED493E2E9ABB1/image-size/large?v=v2&px=999'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold">Travel Guide</h1>
            <hr class="hr-light">
            <h6 class="mb-3"> Your best travel guide partner.</h6>
            <a class="btn btn-outline-white btn-rounded">Know more</a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">
            <!--Form-->
            <section class="form-elegant">

            
  <!--Form without header-->
  <div class="card">

    <div class="card-body mx-4">

      <!--Header-->
      <div class="text-center">
        <h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>
      </div>
      
<form  name="signin" method="POST" onsubmit="signinform()" action="login.php">
      <!--Body-->
      <div class="md-form">
        <input type="email" name="email" id="Form-email1" class="form-control">
        <label for="Form-email1">Your email</label>
      </div>
      <div class="text-center">
        <h6 class="dark-grey-text"><strong>Or</strong></h6>
      </div>
      <div class="md-form">
        <input type="text" name="phone" id="Form-email1" class="form-control">
        <label for="Form-email1">Your Phone Number</label>
      </div>

      <div class="md-form pb-3">
        <input type="password" name="pass" id="Form-pass1" class="form-control">
        <label for="Form-pass1">Your password</label>

        <div class="d-flex justify-content-end custom-control custom-checkbox">
    <input type="checkbox" name="rem" value="1" class="form-control custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked">Remember Me</label>
</div>
     
      </div>
    
      

      <div class="text-center mb-3">
        <button  name="submit" type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
      </div>

      </form>
   
      <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:
      </p>

      <div class="row my-3 d-flex justify-content-center">
     
        <!--Google +-->
     
            <button class="g-signin2 btn btn-white btn-rounded z-depth-1a"  data-onsuccess="onSignIn"><i class="fab fa-google-plus-g blue-text"></i></button>
      </div>

    </div>

    <!--Footer-->
    <div class="modal-footer mx-5 pt-3 mb-1">
      <p class="font-small grey-text d-flex justify-content-end">Don't have an account? <a href="signup.php"
          class="blue-text ml-1"> Sign Up</a></p>
    </div>

  </div>
  <!--/Form without header-->

</section>
            <!--/.Form-->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->


    <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4">

        <div class="container">
            <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                </li>
                <li class="list-inline-item">
                    <a href="signup.php" class="btn btn-outline-white btn-rounded">Sign up!</a>
                </li>
            </ul>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://binaryBros.digital/"> binaryBros.digital</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script>
        function signinform() {


            var email = document.signin.email.value;
            var password = document.signin.password.value;

            if (password.length < 6) {
                alert("Password must be at least 6 Digit long.");
                return false;
            } else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
                return (true)
            }
            alert("You have entered an invalid email address!")
            return (false)

        }
    </script>


<script type="text/javascript">
	function onSignIn(googleUser) {
	  var profile = googleUser.getBasicProfile();
      
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());


      if(profile){
          $.ajax({
                type: 'POST',
                url: 'php_actions/google_signin.php',
                data: { fname:profile.getName(),image:profile.getImageUrl(), email:profile.getEmail()}
            }).done(function(data){
                
                window.location.href = 'login.php';
              
                
           var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
    });
                    
                  
                
            }).fail(function() { 
                alert( "Posting failed." );
            });
      }


    }
</script>
    <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>





</body>

</html>