<?php
include 'php_actions/dbconnect.php';
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location:login.php");
    die();
}

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db, "SELECT f_name FROM user WHERE user_id = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['f_name'];


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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="stylesheet" href="extra_added_file/style.css">
    <link rel="stylesheet" href="extra_added_file/slider.css">
    <style>
    .news {
    width: 160px;
    background-color: rgb(207, 23, 23);
}

.news-scroll a {
    text-decoration: none;
    color: white;
}

.dot {
    height: 6px;
    width: 6px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 2px !important;
    background-color: rgb(207, 23, 23);
    border-radius: 50%;
    display: inline-block
}</style>
</head>

<body>
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

                        <a class="btn blue-gradient btn-sm" href="userprofile.php?id=<?php echo $user_check; ?>">Your Profile</a>
                    </li>
                    <li class="nav-item">

                        <a class="btn purple-gradient btn-sm" href="php_actions/logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

    </header>
    <!--Main Navigation-->



    <!--------------------------------------------JAA KORAR EKHAN THEKE KORTE HOBEEEE-------------------------------------->





    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Write a Blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="php_actions/add_blog.php" enctype="multipart/form-data">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="hidden" name="uid" value="<?php echo $user_check; ?>">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control validate">

                        </div>


                        <div class="md-form">
                            <label for="">Description</label>
                            <textarea type="text" name="desc" class="md-textarea form-control" rows="4"></textarea>

                        </div>

                        <div class="md-form">

                            <input type="file" name="image" class="form-control">

                        </div>

                        <div id="success"></div>


                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-unique" type="submit" name="blogsubmit">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <section>
    <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
  <ol class="carousel-indicators">
    <li class="active" data-target="#carousel" data-slide-to="0"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active boat">
      <div class="container h-100 d-none d-md-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">Share Memories</h2>
              <p class="animated fadeInRight">Read our blogs or share something about your any tour.</p>
              <a class="animated fadeInUp btn delicious-btn" href="blog.php">Blogs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item sea">
      <div class="container h-100 d-none d-md-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">Get the best Guideline</h2>
              <p class="animated fadeInRight">Read our guideline & tips for a better tour.</p>
              <a class="animated fadeInUp btn delicious-btn" href="tips.php">Our Guidelines </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </section>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-dark">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Updated News</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <?php
                $n = "SELECT * FROM news  ORDER BY news_id 
                          DESC 
                          LIMIT 0, 3;";
                $news = mysqli_query($db, $n);

                if (mysqli_num_rows($news) > 0) {
                    while ($nws = mysqli_fetch_assoc($news)) {
                ?>
                <a href="<?php echo $nws['news_link']; ?>"><?php echo $nws['news_text']; ?></a>
                 <span class="dot"></span> 
                 <?php
                    }
                } else {
                 ?>
                    <a href="#">No News Update</a>
                    <?php 
                }
                ?>
                </marquee>
            </div>
        </div>
    </div>
</div>


    <div class="container my-5 py-5">


        <!--Section: Content-->
        <section class="text-center">

            <h3 class="text-center font-weight-bold mb-5">Tour Guidelines</h3>
            <!--Grid row-->
            <div class="row">
            <?php
                $psql = "SELECT * FROM guideline  ORDER BY guideline_id 
                          DESC 
                          LIMIT 0, 3;";
                $plc = mysqli_query($db, $psql);

                if (mysqli_num_rows($plc) > 0) {
                    while ($place = mysqli_fetch_assoc($plc)) {
                ?>


                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="tipsimage/<?php echo $place['image']; ?>" width="60px" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <p class="mb-1"><a href="" class="font-weight-bold black-text"><?php echo $place['title']; ?></a></p>

                         

                            <a href="tipsdetails.php?tipsid=<?php echo $place['guideline_id']; ?> " class="btn btn-outline-black btn-rounded btn-sm px-3 waves-effect">Read Details</a>

                        </div>

                    </div>
                </div>

                <?php
                    }
                } else {
                    echo "No Tips";
                }
                ?>
            </div>
        </section>



    </div>




    <div class="container mt-5">
        <section class="">
            <h3 class="text-center font-weight-bold mb-5">Featured Blog</h3>
            <div class="row">

                <?php
                $sql = "SELECT * FROM blog  WHERE status='1' ORDER BY blog_id 
                          DESC 
                          LIMIT 0, 3;";
                $result = mysqli_query($db, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                            <div class="card hoverable">
                                <img class="card-img-top" src="blogimage/<?php echo $row['image']; ?>" width="60px" alt="Card image cap">
                                <div class="card-body">
                                    <a href=" " class="black-text"><?php echo $row['title']; ?></a> <br>
                                    <a href="blogdetails.php?blogid=<?php echo $row['blog_id']; ?> " class="btn blue-gradient p-2 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                } else {
                    echo "No Blogs";
                }
                ?>


            </div>
            <!-- Grid row -->

            <div class="text-center mt-5">
                <a href="blog.php">Browse all blog posts<i class="fa fa-angle-right ml-2"></i></a>
            </div>

        </section>
        <!--Section: Content-->


    </div>



    <div class="container my-5 py-5 z-depth-1">


        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center dark-grey-text">


            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466451.7041893772!2d90.39015015455186!3d24.025636125484137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1620025619646!5m2!1sen!2sbd" frameborder="0" style="border:0" loading="lazy" allowfullscreen></iframe>
            </div>


            <!--Google Maps-->

            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-5">

                <!--Grid column-->
                <div class="col-md-6 text-center">

                    <h3 class="font-weight-bold">Contact Us</h3>
            <form action="contact.php" method="post">
                     <!-- Material outline input -->
                     <div class="md-form md-outline mt-3">
                        <input type="text" id="form-text" name="Name" class="form-control">
                        <label for="form-email">Name</label>
                    </div>

                    <!-- Material outline input -->
                    <div class="md-form md-outline mt-3">
                        <input type="email" id="form-email" name="Email" class="form-control">
                        <label for="form-email">E-mail</label>
                    </div>

                    <!-- Material outline input -->
                    <div class="md-form md-outline">
                        <input type="text" id="form-subject" name="Subject" class="form-control">
                        <label for="form-subject">Subject</label>
                    </div>

                    <!--Material textarea-->
                    <div class="md-form md-outline mb-3">
                        <textarea id="form-message" class="md-textarea form-control" name="Message" rows="5"></textarea>
                        <label for="form-message">How we can help?</label>
                    </div>

                    <button type="submit" name="mailSubmit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>
                    </form>
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

                    <p class="text-muted">North South University</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <i class="fas fa-phone fa-2x blue-text"></i>

                    <p class="font-weight-bold my-3">Phone number</p>

                    <p class="text-muted">+88 0132211244</p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <i class="fas fa-envelope fa-2x blue-text"></i>

                    <p class="font-weight-bold my-3">E-mail</p>

                    <p class="text-muted">travelguide@gmail.com</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


        </section>
        <!--Section: Content-->


    </div>







    <div class="container my-5">

        <section class="p-5 z-depth-1">

            <h3 class="text-center font-weight-bold mb-5">Covid-19 Update</h3>

            <div class="row d-flex justify-content-center">

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-viruses indigo-text"></i>
                        <span class="d-inline-block count-up" data-from="0" data-to="100" id="LastCase" data-time="2000"> </span>
                    </h4>
                    <p class="font-weight-normal text-muted">Todays Cases</p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-hospital-user indigo-text"></i>

                        <span class="d-inline-block count1" data-from="0" data-to="250" id="TotalCase" data-time="2000"></span>
                    </h4>
                    <p class="font-weight-normal text-muted">Total Cases</p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-bed indigo-text"></i>
                        <span class="d-inline-block count2" data-from="0" data-to="330" id="LastDeath" data-time="2000">330</span>
                    </h4>
                    <p class="font-weight-normal text-muted">Todays Death</p>
                </div>

                <div class="col-md-6 col-lg-3 mb-4 text-center">
                    <h4 class="h1 font-weight-normal mb-3">
                        <i class="fas fa-bed indigo-text"></i>
                        <span class="d-inline-block count3" data-from="0" data-to="430" id="TotalDeath" data-time="2000">430</span>
                    </h4>
                    <p class="font-weight-normal text-muted">Total Death</p>
                </div>

            </div>

        </section>

    </div>





    <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://binaryBros.digital/"> binaryBros.digital</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->




    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="extra_added_file/scrpits.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="covid.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#blogsubmit').click(function(e) {
                e.preventDefault();
                var title = $('#title').val();
                var desc = $('#desc').val();
                var img = $('#image').val();
                var userid = $('#userid').val();
                $.ajax({
                    type: "POST",
                    url: "php_actions/add_blog.php",
                    data: {
                        "title": title,
                        "desc": desc,
                        "image": img,
                        "userid": userid
                    },
                    success: function(data) {
                        $('#success').html("<div class='alert alert-success' role='alert'>Post Uploaded!</div>");


                    }
                });
            });
        });
    </script>



    <script type="text/javascript" src="js/alert.js"></script>


    <?php
    if(isset($_SESSION['msg'])){

   
    $msg = $_SESSION['msg'];
    if ($msg) { ?>

        <script>
            swal({
                title: "<?php echo $msg; ?>",

                icon: "success",
                timer: 2000,
            });
        </script>


    <?php
        unset($_SESSION['msg']);
    } else {
    }

}
    ?>

</body>

</html>