<?php
include '../php_actions/dbconnect.php';

session_start();
if (isset($_SESSION['admin'])) {
    header("location:admin.php");
    die();
}

if (isset($_POST['submit'])) {

    $email = $_POST['username'];
    $pass = $_POST['pass'];
    

    $login = "SELECT admin_id FROM admin WHERE username = '$email' and password = '$pass'";

    $result = mysqli_query($db, $login);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $id = $row['admin_id'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {
       
        $_SESSION['admin'] = $id;
        header("location: admin.php");
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
    <title>Tour Guide-Home</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/extra.css">
    <link rel="stylesheet" href="../extra_added_file/style.css">
</head>

<body>
    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark black scrolling-navbar">
            <a class="navbar-brand" href="#"><strong>TRAVEL GUIDE</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
         
                <ul class="navbar-nav nav-flex-icons">
                   
                   
                    <li class="nav-item">

                        <a class="btn blue-gradient btn-sm" href="../home.php">GO TO WEBSITE</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->




    <div class="container my-5">

<!-- Section -->
<section>

  <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">admn</h6>
  <h3 class="font-weight-normal text-center dark-grey-text pb-2 display-4"><strong>Admin Login</strong></h3>
  <hr class="w-header my-4">
      
  
  <div class="row d-flex justify-content-center">

 
    <div class="col-6">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="md-form md-outline form-lg">
        <input type="text" name="username" class="form-control form-control-lg">
        <label for="form2">Username</label>
      </div>
      
 
      <div class="md-form md-outline form-lg">
        <input type="password" name="pass" class="form-control form-control-lg">
        <label for="form3">Password</label>
      </div>
      
      <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg">Login</button>

      </form>

    </div>
  </div>
</section>


</div>



    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>






    <script type="text/javascript" src="../js/alert.js"></script>



</body>

</html>