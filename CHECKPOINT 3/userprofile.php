<!DOCTYPE html>
<html lang="en">

<?php
include 'php_actions/dbconnect.php';

   session_start();
   if(!isset($_SESSION['login_user'])){
    header("location:logout.php");
    die();
 }
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT f_name FROM user WHERE user_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['f_name'];
   
  
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Travel Guide</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

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


    <!--Main Navigation-->
    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark black scrolling-navbar">
            <a class="navbar-brand" href="#"><strong>TRAVEL GUIDE</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown multi-level-dropdown">
                        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle">PLACES</a>
                        <ul class="dropdown-menu mt-2 rounded-0  blue-gradient lighten-4 border-0 z-depth-1">
                            <li class="dropdown-item dropdown-submenu p-0">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100 "><b>Barishal</b> </a>
                                <ul class="dropdown-menu ml-2 rounded-0 blue-gradient border-0 z-depth-1">
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Bhola</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Potuakhali</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Borguna</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Pirojpur</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Jhalokathi</b></a>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown-item dropdown-submenu p-0">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Chottogram</b> </a>
                                <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Noakhali</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Cumilla</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Cox's Bazar</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Feni</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Bandarban</b></a>
                                    </li>
                                    <li class="dropdown-item p-0">
                                        <a href="#" class="text-black w-100"><b>Khagrachari</b></a>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Chadpur</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Lokkhipur</b></a>
                                        </li>

                                </ul>
                                </li>

                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Khulna</b> </a>
                                    <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Jessore</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Jhinaidhah</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Chuadanga</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Meherpur</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Pabna</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Kushtia</b></a>
                                            <li class="dropdown-item p-0">
                                                <a href="#" class="text-black w-100"><b>Mongla</b></a>
                                            </li>
                                            <li class="dropdown-item p-0">
                                                <a href="#" class="text-black w-100"><b>Narail</b></a>
                                            </li>

                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Dhaka</b> </a>
                                    <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Narshingdi</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Narayanganj</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Tangail</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Shonargaon</b></a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Rangpur</b> </a>
                                    <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Dinajpur</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Jaipurhat</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Gaibandha</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Nilphamari</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Phulbari</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Thakurgaon</b></a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Rajshahi</b> </a>
                                    <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Bogura</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Natore</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Sirajganj</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Chapainabanganj</b></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Sylhet</b> </a>
                                    <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Sunamganj</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Habiganj</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Maulvibazar</b></a>
                                        </li>


                                    </ul>
                                </li>
                                <li class="dropdown-item dropdown-submenu p-0">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-black w-100"><b>Mymanshing</b> </a>
                                    <ul class="dropdown-menu mr-2 rounded-0 blue-gradient  border-0 z-depth-1 r-100 l-auto">
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Jamalpur</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Sherpur</b></a>
                                        </li>
                                        <li class="dropdown-item p-0">
                                            <a href="#" class="text-black w-100"><b>Netrokona</b></a>
                                        </li>

                                    </ul>
                                </li>

                        </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIPS & TRICKS</a>
                            <div class="dropdown-menu blue-gradient" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#"><b>TOUR TIPS</b></a>
                                <a class="dropdown-item" href="#"><b>Useful Tricks</b></a>
                                <a class="dropdown-item" href="#"><b>More Informations</b></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">GALLERY</a>
                        </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <form class="form-inline">
                            <div class="md-form my-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="userprofile.php?id=<?php echo $user_check;?>">Hello <?php echo $login_session; ?></a>
                        </li>
                    <li class="nav-item">
                   
                        <a class="btn blue-gradient btn-sm" href="php_actions/logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->



    



    <!--------------------------------------------JAA KORAR EKHAN THEKE KORTE HOBEEEE-------------------------------------->
<?php
include 'php_actions/dbconnect.php';

    $user_id = $_GET['id'];

    $ses_sql = mysqli_query($db,"SELECT * FROM user WHERE user_id = '$user_id' ");
   
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $fname = $row['f_name'];
    $lname = $row['l_name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];

    ?>

    <div class="container p-5">
        <div class="row">
            <div class="col-4">.col-4</div>
            <div class="col-4">



            </div>
            <div class="col-4">.col-4</div>
        </div>


    </div>

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1><?php echo $fname." ".$lname ; ?></h1>
            </div>
            <div class="col-sm-2">
                <a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->


                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>



                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                </ul>

            

            </div>
            <!--/col-3-->
            <div class="col-sm-9">



                <div class="tab-content">
                    <div class="tab-pane active" id="home">


                        <form class="form" name="profile" onsubmit="return(validateform());" action="php_actions/profileupdate.php" method="POST">
                            <div class="form-group ">

                                <div class="col-xs-6 ">
                                    <label for="first_name "><h4>First name</h4></label>
                                    <input type="text " class="form-control " name="F_Name" value="<?php echo $fname; ?>">
                                </div>
                            </div>
                            <div class="form-group ">

                                <div class="col-xs-6 ">
                                    <label for="last_name "><h4>Last name</h4></label>
                                    <input type="text " class="form-control " name="L_Name" id="last_name " value="<?php echo $lname; ?>" title="enter your last name if any. ">
                                </div>
                            </div>


                            <div class="form-group ">
                                <div class="col-xs-6 ">
                                    <label for="mobile "><h4>Mobile</h4></label>
                                    <input type="text " class="form-control " name="phone" value="<?php echo $phone; ?>">
                                </div>
                            </div>
                            <div class="form-group ">

                                <div class="col-xs-6 ">
                                    <label for="email "><h4>Email</h4></label>
                                    <input type="email " class="form-control" name="email" value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="form-group ">

                                <div class="col-xs-6 ">
                                    <label for="address "><h4>Address</h4></label>
                                    <input type="text" class="form-control" name="address"value="<?php echo $address; ?>">
                                </div>
                            </div>

                            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

                            <div class="form-group ">
                                <div class="col-xs-12 ">
                                    <br>
                                    <button class="btn btn-lg btn-success " name="submit" type="submit "><i class="glyphicon glyphicon-ok-sign "></i> Update</button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>
                    <!--/tab-pane-->



                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->




    <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4 ">

        <div class="container ">
            <ul class="list-unstyled list-inline text-center py-2 ">
                <li class="list-inline-item ">
                    <h5 class="mb-1 ">Register for free</h5>
                </li>
                <li class="list-inline-item ">
                    <a href="#! " class="btn btn-outline-white btn-rounded ">Sign up!</a>
                </li>
            </ul>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 ">© 2021 Copyright:
            <a href="https://binaryBros.digital/ "> binaryBros.digital</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script>
        function validateform() {

            var fname = document.profile.F_Name.value;
            var lname = document.profile.L_Name.value;
            var mobile = document.profile.mobile.value;
            var email = document.profile.email.value;
            var address = document.profile.address.value;

            if (fname == null || fname == "") {
                alert("First Name can't be blank");
                return false;
            } else if (lname == null || lname == "") {
                alert("Last Name can't be blank");
                return false;
            } else if (mobile.length < 11) {
                alert("Mobile Number must be at least 11 Digit long.");
                return false;
            } else if (address == null || address == "") {
                alert("Address can't be blank");
                return false;
            } else if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
                return (true)
            }
            alert("You have entered an invalid email address!")
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