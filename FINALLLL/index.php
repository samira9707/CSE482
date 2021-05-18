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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="covid.js"></script>


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


                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="btn blue-gradient btn-sm" href="login.php">Login / Register</a>
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
                        <img class="d-block w-100" src="img/cover/1.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Sajek</h3>
                        <p>test</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="img/cover/2.jpg" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Slider 2</h3>
                        <p> text</p>
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
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>

                    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <div class="card hoverable">
                            <img class="card-img-top" src="blogimage/<?php echo $row['image'] ;?>" width="60px" alt="Card image cap">
                            <div class="card-body">
                                <a href=" " class="black-text">
                                    <?php echo $row['title'] ;?>
                                </a> <br>
                                <a href="blogdetails.php?blogid=<?php echo $row['blog_id'] ;?> " class="btn blue-gradient p-2 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <?php
                            }
                            
                                    } 
                                    else {
                                        echo "No Blogs";
                                    }
                                      ?>


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