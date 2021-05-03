<?php
include 'php_actions/dbconnect.php';
session_start();

   if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    die();
 }
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT f_name FROM user WHERE user_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['f_name'];
   
  
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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="stylesheet" href="extra_added_file/style.css">



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


    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark black scrolling-navbar">
            <a class="navbar-brand" href="#"><strong>TRAVEL GUIDE</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
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
                    <a class="dropdown-item" href="tips.php"><b>TOUR TIPS</b></a>
                        <a class="dropdown-item" href="links.php"><b>Useful Links</b></a>
                        <a class="dropdown-item" href="#"><b>More Informations</b></a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                    <div class="dropdown-menu blue-gradient" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="blog.php"><b>All Blogs</b></a>
                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalContactForm"><b>Add New Blog</b></a>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">GALLERY</a>
                </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <div class="container">


                            <input class="form-control" onkeyup="showResult(this.value)" type="text" placeholder="Type something to search list items">
                            <ul class="stack-top" id="search"></ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userprofile.php?id=<?php echo $user_check; ?>">Hello <?php echo $login_session; ?></a>
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


    <h1>test</h1>

    <div class="container my-5 py-5">




        <div class="row">
            <div class="col-12">
                <div class="container my-5">

                    <!-- Section: Block Content -->
                    <section>

                        <div class="card">
                            <div class="card-body">

                                <h5 class="text-center font-weight-bold mb-4">All Useful Links</h5>

                                <hr>

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-12 mb-3 mx-auto">

                                    <?php
                                    
                                    $result = mysqli_query($db, "SELECT * FROM links");
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                          ?>






                                        <div class="media">
                                        
                                            <div class="media-body">
                                                <h6 class="mt-1 font-weight-bold"><a href="<?php echo $row['link'] ;?>"><?php echo $row['name'] ;?></a>

                                                
                                           
                                        
                                            
                                                <a href="<?php echo $row['link'] ;?>"  class="btn btn-success float-right">Visit</a>
                                            </h6>
                                             
                                            </div>
                                        </div>
                                        <hr>

                      
                                        <?php
                                      }
                                    } else {
                                        echo "0 results";
                                      }
                                      ?>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <hr>

                         

                            </div>
                        </div>

                    </section>
                    <!-- Section: Block Content -->

                </div>

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



    <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="extra_added_file/scrpits.js"></script>

</body>

</html>