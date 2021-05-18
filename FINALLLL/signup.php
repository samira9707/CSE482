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
  <meta name="google-signin-client_id" content="506621574105-36pjl1te4ca8mbldb5sf7hphjrfo1t64.apps.googleusercontent.com">

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">


          </ul>
          <a class="btn btn-outline-white btn-rounded" href="login.php">Log in</a>
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
            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft" data-wow-delay="0.3s">
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

                <form method="POST" name="signup" onsubmit="signupform()" action="php_actions/signup.php">
                  <!--Form without header-->
                  <div class="card">

                    <div class="card-body mx-4">

                      <!--Header-->
                      <div class="text-center">
                        <h3 class="dark-grey-text mb-5"><strong>Sign Up</strong></h3>
                      </div>


                      <!--Body-->
                      <div class="md-form">
                        <input type="text" name="fname" class="form-control">
                        <label for="Form-email1">First Name</label>
                      </div>
                      <div class="md-form">
                        <input type="text" name="lname" class="form-control">
                        <label for="Form-email1">Last Name</label>
                      </div>
                      <div class="md-form">
                        <input type="text" name="phone" class="form-control">
                        <label for="Form-email1">Mobile Number</label>
                      </div>

                      <div class="md-form">
                        <input type="email" name="email" id="Form-email1" class="form-control">
                        <label for="Form-email1">Your email</label>
                      </div>

                      <div class="md-form pb-3">
                        <input type="password" name="pass" id="Form-pass1" class="form-control">
                        <label for="Form-pass1">Your password</label>


                      </div>
                      <div class="text-center mb-3">
                        <button name="submit" type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Register</button>
                      </div>

                      <div class="text-center mb-3">
                        <a  data-toggle="modal" data-target="#PhoneSignupForm" class="btn purple-gradient btn-block btn-rounded z-depth-1a">Sign Up with Phone Number</a>
                      </div>



                    </div>

                    <!--Footer-->
                    <div class="modal-footer mx-5 pt-3 mb-1">
                      <p class="font-small grey-text d-flex justify-content-end">Already have an account? <a href="login.php" class="blue-text ml-1"> Log in</a></p>
                    </div>

                  </div>
                  <!--/Form without header-->
                </form>
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


  <div class="modal fade" id="PhoneSignupForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

<form action="php_actions/phonesignup.php" method="post">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" name="fname" id="form3" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">First Name</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" name="lname" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Last Name</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-phone prefix grey-text"></i>
          <input type="text" name="phone" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Phone Number</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="pass" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo" type="submit" name="otp">Send OTP<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
    </form>

  </div>
</div>


  <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->



  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark pt-4">

    <div class="container">
      <ul class="list-unstyled list-inline text-center py-2">

        <li class="list-inline-item">
          <a href="login.php" class="btn btn-outline-white btn-rounded">Click to Login!</a>
        </li>
      </ul>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="https://binaryBros.digital/"> binaryBros.digital</a>
    </div>
    <!-- Copyright -->
  </footer>



  <script>
    function signupform() {

      var fname = document.signup.fname.value;
      var lname = document.signup.lname.value;
      var mobile = document.signup.phone.value;
      var email = document.signup.email.value;
      var password = document.signup.password.value;

      if (fname == null || fname == " ") {
        alert("First Name can 't be blank");
        return false;
      } else if (lname == null || lname == "") {
        alert("Last Name can't be blank ");
        return false;
      } else if (password.length < 6) {
        alert("Password must be at least 6 Digit long. ");
        return false;
      } else if (mobile.length < 11) {
        alert("Mobile Number must be at least 11 Digit long. ");
        return false;
      } else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
        return (true)
      }
      alert("You have entered an invalid email address! ")
      return (false)

    }
  </script>


  <!-- End your project here-->
  <!-- jQuery -->
  <script type="text/javascript " src="js/jquery.min.js "></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript " src="js/popper.min.js "></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript " src="js/bootstrap.min.js "></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript " src="js/mdb.min.js "></script>

</body>

</html>