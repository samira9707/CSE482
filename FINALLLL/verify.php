<?php
include 'php_actions/dbconnect.php';

session_start();
if (isset($_SESSION['login_user'])) {
    header("location:home.php");
    die();
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
    <meta name="google-signin-client_id" content="506621574105-36pjl1te4ca8mbldb5sf7hphjrfo1t64.apps.googleusercontent.com">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">


</head>

<body>
    <!-- Start your project here-->





    <div class="container my-5 px-0 z-depth-1">

        <!--Section: Content-->
        <section class="p-5 my-md-5 text-center" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg); background-size: cover; background-position: center center;">



            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" method="post" action="php_actions/otpverify.php">

                                <h3 class="font-weight-bold my-4 pb-2 text-center dark-grey-text">Verify Your Number</h3>

                                <!-- Name -->
                                <input type="text" name="code" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Enter your verification code here">




                                <div class="text-center">
                                    <button type="submit" name="verify" class="btn btn-outline-orange btn-rounded my-4 waves-effect">Submit</button>
                                </div>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form login -->
                </div>
            </div>



        </section>
        <!--Section: Content-->


    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>


    <?php

if (isset($_SESSION['verifymsg'])) {
    $check= $_SESSION['verifymsg'];

     
    if ($check=="TRUE") {

    ?>
        <script>
            swal({
                title: "Verified!",
                text: "Phone number verification successfull.",
                type: "success",
            }).then(function() {
                
                window.location.href = "login.php";
            });
        </script>


    <?php
    unset($_SESSION['verifymsg']);
    }
    
    elseif($check=="FALSE") {
    ?>

        <script>
            swal({
                title: "Wrong Code!",
                text: "Please try again",
                type: "error",
            });
        </script>


    <?php
    
    }
}

    ?>




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