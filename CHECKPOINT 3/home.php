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


    <section>



        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="img/5.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Light mask</h3>
                        <p>First text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/A.jpg" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Strong mask</h3>
                        <p>Secondary text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/ab.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Slight mask</h3>
                        <p>Third text</p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->


    </section>


    <div class="container my-5 py-5">


        <!--Section: Content-->
        <section class="text-center">

            <h3 class="text-center font-weight-bold mb-5">Tour Packages</h3>
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="img/A.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <p class="mb-1"><a href="" class="font-weight-bold black-text">Guthia Mosque</a></p>



                            <div class="amber-text fa-xs mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <button type="button" class="btn btn-black btn-rounded btn-sm px-3">Quick View</button>
                            <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-3 waves-effect">Details</button>

                        </div>

                    </div>
                    <!-- Card -->


                </div>

            </div>
            <!--Grid row-->


        </section>
        <!--Section: Content-->


    </div>




    <div class="container mt-5">


        <!--Section: Content-->
        <section class="">

            <!-- Section heading -->
            <h3 class="text-center font-weight-bold mb-5">Featured Blog</h3>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

                    <!-- Card -->
                    <div class="card hoverable">

                        <!-- Card image -->
                        <img class="card-img-top" src="img/A.jpg" alt="Card image cap">


                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <a href="#!" class="black-text">Top 5 content marketing strategies</a>
                            <!-- Text -->
                            <p class="card-title text-muted font-small mt-3 mb-2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>

                            <button type="button" class="btn blue-gradient p-0 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></button>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <div class="text-center mt-5">
                <a href="#!">Browse all blog posts<i class="fa fa-angle-right ml-2"></i></a>
            </div>

        </section>
        <!--Section: Content-->


    </div>



    <div class="container my-5 py-5 z-depth-1">


        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center dark-grey-text">


            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!--Google Maps-->

            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-5">

                <!--Grid column-->
                <div class="col-md-6 text-center">

                    <h3 class="font-weight-bold">Contact Us</h3>

                    <!-- Material outline input -->
                    <div class="md-form md-outline mt-3">
                        <input type="email" id="form-email" class="form-control">
                        <label for="form-email">E-mail</label>
                    </div>

                    <!-- Material outline input -->
                    <div class="md-form md-outline">
                        <input type="text" id="form-subject" class="form-control">
                        <label for="form-subject">Subject</label>
                    </div>

                    <!--Material textarea-->
                    <div class="md-form md-outline mb-3">
                        <textarea id="form-message" class="md-textarea form-control" rows="5"></textarea>
                        <label for="form-message">How we can help?</label>
                    </div>

                    <button type="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">

                    <i class="fas fa-map-marker-alt fa-2x blue-text"></i>

                    <p class="font-weight-bold my-3">Address</p>

                    <p class="text-muted">New York, 94126, United States</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <i class="fas fa-phone fa-2x blue-text"></i>

                    <p class="font-weight-bold my-3">Phone number</p>

                    <p class="text-muted">+ 01 234 567 89</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <i class="fas fa-envelope fa-2x blue-text"></i>

                    <p class="font-weight-bold my-3">E-mail</p>

                    <p class="text-muted">info@gmail.com</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


        </section>
        <!--Section: Content-->


    </div>







    <div class="container my-5">


        <!--Section: Content-->
        <section class="p-5 z-depth-1">

            <h3 class="text-center font-weight-bold mb-5">Covid-19 Update</h3>

            <div class="row d-flex justify-content-center">

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-file-alt indigo-text"></i>
                        <span class="d-inline-block count-up" data-from="0" data-to="100" data-time="2000">100</span>
                    </h4>
                    <p class="font-weight-normal text-muted">Unique Page</p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-layer-group indigo-text"></i>
                        <span class="d-inline-block count1" data-from="0" data-to="250" data-time="2000">250</span>
                    </h4>
                    <p class="font-weight-normal text-muted">Block Variety</p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-pencil-ruler indigo-text"></i>
                        <span class="d-inline-block count2" data-from="0" data-to="330" data-time="2000">330</span>
                    </h4>
                    <p class="font-weight-normal text-muted">Reusable Component</p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fab fa-react indigo-text"></i>
                        <span class="d-inline-block count3" data-from="0" data-to="430" data-time="2000">430</span>
                    </h4>
                    <p class="font-weight-normal text-muted">Crafted Element</p>
                </div>

            </div>

        </section>
        <!--Section: Content-->

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

</body>

</html>