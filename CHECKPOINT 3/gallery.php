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
    <h1 class="h1-responsive">h1. heading</h1>

    <div class="container mt-lg-5">
        <h1 class="h1-responsive">Let's See Our Bangladesh</h1>
        <div class="row">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Cox's Bazar" data-image="img/cox.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/cox.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bandarban" data-image="img/5.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/5.jpg" alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sajek" data-image="img/6.png" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/6.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bangldesh" data-image="img/A.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/A.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bangladesh" data-image="img/ab.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/ab.jpg" alt="Another alt text">
                    </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Amiakhum falls" data-image="img/af.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/af.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Mosque" data-image="img/B.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/B.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bangladesh" data-image="img/ba.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/ba.jpg" alt="Another alt text">
                    </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Promodini Boat, Rangamati" data-image="img/boat.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/boat.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="BD" data-image="img/c.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/c.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sundarban" data-image="img/d.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/d.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sylhet" data-image="img/f.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/f.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="BD" data-image="img/g.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/g.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Hanging Bridge, Rangamati" data-image="img/h.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/h.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="National Martyrs Memorial, Savar" data-image="img/i.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/i.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sylhet" data-image="img/j.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/j.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bhola" data-image="img/k.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/k.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kuakata" data-image="img/ku.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/ku.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sylhet" data-image="img/l.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/l.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bogura" data-image="img/m.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/m.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sylhet" data-image="img/n.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/n.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="BD" data-image="img/r.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/r.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sajek" data-image="img/s2.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/s2.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sajek" data-image="img/sajek.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/sajek.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Dhaka" data-image="img/ss.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/ss.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="BD" data-image="img/t.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/t.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="BD" data-image="img/v.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/v.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Saat Gombuj Mosque" data-image="img/w.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/w.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sylhet" data-image="img/x.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/x.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Sundarban" data-image="img/z.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="img/z.jpg" alt="Another alt text">
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>






    <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->


    <!--.............eta logo with address..............-->


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

    <!--......................................................footer.................................................-->
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

    <script src="extra_added_file/scrpits.js"></script>


    <!--....................................bootsnip js added....................................................-->



</body>

</html>