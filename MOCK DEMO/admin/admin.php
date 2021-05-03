<?php
 include '../php_actions/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:index.php");
    die();
}

$admin = $_SESSION['admin'];

$sql = mysqli_query($db, "SELECT name FROM admin WHERE admin_id = '$admin' ");

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

$name = $row['name'];





$msg="";
if (!isset($_SESSION['success'])) {
    
}
else{
$msg=$_SESSION['success'];
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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/extra.css">



</head>


<body>
    <!-- Start your project here-->

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark black">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard
            <span class="sr-only">(current)</span>
          </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="gallery.php">Manage Gallery </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="tips_tricks.php">Manage Tips & Tricks </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="links.php">Useful Links </a>
                </li>



            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> <?php echo $name;?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="logout.php">LOGOUT</a>
                        
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->



    <!--------------------------------------------JAA KORAR EKHAN THEKE KORTE HOBEEEE-------------------------------------->

    <div class="container my-5 py-5">


        <!-- Section: Block Content -->
        <section>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media white z-depth-1 rounded">
                        <i class="far fa-money-bill-alt fa-lg blue z-depth-1 p-4 rounded-left text-white mr-3"></i>
                        <div class="media-body p-1">
                            <p class="text-uppercase text-muted mb-1"><small>Total Blog Post</small></p>
                            <h5 class="font-weight-bold mb-0">
                            <?php
                            $countblog=mysqli_query($db,"SELECT * from blog");

                            $row = mysqli_num_rows($countblog);

                            echo $row;

                            ?>
                             </h5>
                        </div>
                        
                    </div>



                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media white z-depth-1 rounded">
                        <i class="fas fa-chart-pie fa-lg teal z-depth-1 p-4 rounded-left text-white mr-3"></i>
                        <div class="media-body p-1">
                            <p class="text-uppercase text-muted mb-1"><small>Gallery Image</small></p>
                            <h5 class="font-weight-bold mb-0">
                            <?php
                            $countimage=mysqli_query($db,"SELECT * FROM images");

                            $ci = mysqli_num_rows($countimage);

                            echo $ci;

                            ?>
                            </h5>
                        </div>
                        </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media white z-depth-1 rounded">
                        <i class="fas fa-download fa-lg pink z-depth-1 p-4 rounded-left text-white mr-3"></i>
                        <div class="media-body p-1">
                            <p class="text-uppercase text-muted mb-1"><small>Total Guideline</small></p>
                            <h5 class="font-weight-bold mb-0">
                                
                            <?php
                            $counttips=mysqli_query($db,"SELECT * FROM guideline");

                            $ct = mysqli_num_rows($counttips);

                            echo $ct;

                            ?>
                            </h5>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!-- Section: Block Content -->


        <div class="row">
            <div class="col-12">
                <div class="container my-5">

                    <!-- Section: Block Content -->
                    <section>

                        <div class="card">
                            <div class="card-body">

                                <h5 class="text-center font-weight-bold mb-4">Recently Added Blogs</h5>

                                <hr>

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-12 mb-3 mx-auto">

                                    <?php
                          

                                    $sql = "SELECT * FROM blog";
                                    $result = mysqli_query($db, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                          ?>






                                        <div class="media">
                                            <img class="d-flex mr-3" width="50px" src="../blogimage/<?php echo $row['image'] ;?>" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h6 class="mt-1 font-weight-bold"><a href="#!"><?php echo $row['title'] ;?></a>

                                                <?php if ($row['status']==1) { ?>
                                                <a><span class="badge badge-success float-right">Approved</span></a>
                                              <?php  }

                                                    else {?>


                                                        <a data-toggle="modal" data-target="#modalRelatedContent<?php echo $row['blog_id'] ;?>"><span class="badge badge-danger float-right">Check & Approve</span></a>
                                                   <?php }

                                                ?>
                                            
                                            
                                            </h6>
                                           
                                            </div>
                                        </div>
                                        <hr>

 <div class="modal fade" id="modalRelatedContent<?php echo $row['blog_id'] ;?>" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog  modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading">Blog Details</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">

        <div class="row">
          <div class="col-5">
            <img src="../blogimage/<?php echo $row['image'] ;?>"
              class="img-fluid" alt="">
          </div>

          <div class="col-7">
            <p><strong><?php echo $row['title'] ;?></strong></p>
            <p><?php echo $row['description'] ;?></p>
            <form method="post" action="../php_actions/blog_approve.php">
            
                <input type="hidden" name="blogid" value="<?php echo $row['blog_id'] ;?>">
            <button type="submit" name="submit" class="btn btn-success btn-md">Approve</button>
            </form>

          </div>
          
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalRelatedContent-->



                                     
                                        
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


        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://binaryBros.digital/"> binaryBros.digital</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
if ($msg=='OK'){ ?>

<script>

swal({
  title: "Approved",
  
  icon: "success",
  timer:2000,
});
</script>


 <?php 
 unset($_SESSION['success']);
}
else{
    
}
?>
</body>

</html>