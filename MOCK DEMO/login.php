<?php
include 'php_actions/dbconnect.php';

session_start();
if (isset($_SESSION['login_user'])) {
    header("location:home.php");
    die();
}
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $encrptpass = md5($pass);

    

    $login = "SELECT user_id FROM user WHERE email = '$email' and password = '$encrptpass'";

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



</head>
<style>
    .map-container {
        height: 200px;
        position: relative;
    }
    
    .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>

<body>
    <!-- Start your project here-->


    <!--Main Navigation-->
    <header class="mb-5">

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark black scrolling-navbar">
            <a class="navbar-brand" href="#"><strong>TRAVEL GUIDE</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                    </li>


                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="btn blue-gradient btn-sm" href="signup.html">Register</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->



    <!--------------------------------------------JAA KORAR EKHAN THEKE KORTE HOBEEEE-------------------------------------->



    <div class="container p-5">
        <div class="row">

           

            <div class="col-12">

                <!-- Default form login -->
                <form class="text-center border border-light p-5" name="signin" method="POST" onsubmit="signinform()" action="login.php">

                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->
                    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" name="pass" class="form-control mb-4" placeholder="Password">

                    <div class="custom-control custom-checkbox">
    <input type="checkbox" name="rem" value="1" class="custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked">Remember Me</label>
</div>



                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" name="submit" type="submit">Sign in</button>
                    <button class="g-signin2" data-onsuccess="onSignIn" ></button>
                    
<br>
                    <!-- Register -->
                    <p>Don't have an account?
                        <a href="signup.html">Register</a>
                    </p>




                </form>
                <!-- Default form login -->

            </div>

          

        </div>

    </div>




    <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4">

        <div class="container">
            <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                </li>
                <li class="list-inline-item">
                    <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
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