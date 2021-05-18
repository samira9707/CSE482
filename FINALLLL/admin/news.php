<?php
 include '../php_actions/dbconnect.php';
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:index.php");
    
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


if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
   
    $check= mysqli_query($db, "DELETE FROM images WHERE id='$id' "); 
    
    if($check==TRUE){
        $msg =  "IMAGE DELETED.";
        header('location:gallery.php');
    }
    else{
        echo "Sorry";
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
      <!--Navbar -->
      <nav class="mb-1 navbar navbar-expand-lg navbar-dark black">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="admin.php">Dashboard
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
                    <a class="nav-link active" href="links.php">Useful Links </a>
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


    <div class="modal fade" id="imageupload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Update News</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="border border-light p-5" method="post"  action="../php_actions/add_link_news.php">


                <input   class="form-control mb-4" name="newstext" placeholder="News Text">
                <input   class="form-control mb-4" name="link" placeholder="News Link">



    <button class="btn btn-info btn-block" name="newssubmit" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>


    <div class="container my-5 py-5">

    
        <!-- Section: Block Content -->
        <section>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-12 col-md-6 mb-4">

                    <div class="media white z-depth-1 rounded">
                        <i class="far fa-money-bill-alt fa-lg blue z-depth-1 p-4 rounded-left text-white mr-3"></i>
                        <div class="media-body p-1">
                            <p class="text-uppercase text-muted mb-1"><small>Total News</small></p>
                            <h5 class="font-weight-bold mb-0">2 </h5>
                        </div>
                        <button type="button" href="" data-toggle="modal" data-target="#imageupload" class="btn btn-primary">Add New News</button>
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

                                <h5 class="text-center font-weight-bold mb-4">All News</h5>

                                <hr>

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-12 mb-3 mx-auto">

                                    <?php
                                    
                                    $result = mysqli_query($db, "SELECT * FROM news");
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                          ?>






                                        <div class="media">
                                        
                                            <div class="media-body">
                                                <h6 class="mt-1 font-weight-bold"><a href="<?php echo $row['news_link'] ;?>"><?php echo $row['news_text'] ;?></a>

                                                
                                           
                                        
                                            
                                                <button type="button" href="" data-toggle="modal" data-target="#tipsdelete<?php echo $row['news_id'];?>" class="btn btn-danger float-right">Delete</button>
                                            </h6>
                                             
                                            </div>
                                        </div>
                                        <hr>

                      

                            <!--Modal: modalConfirmDelete-->
                            <div class="modal fade" id="tipsdelete<?php echo $row['news_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                            <!--Content-->
                            <div class="modal-content text-center">
                                <!--Header-->
                                <div class="modal-header d-flex justify-content-center">
                                <p class="heading">Are you sure?</p>
                                </div>

                                <!--Body-->
                                <div class="modal-body">

                                <i class="fas fa-times fa-4x animated rotateIn"></i>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer flex-center">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <input type="submit" name="delete" class="btn  btn-outline-danger" >
                                </form>
                                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
                                </div>
                            </div>
                            <!--/.Content-->
                            </div>
                            </div>
                            <!--Modal: modalConfirmDelete-->



                                     
                                        
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
    <script type="text/javascript" src="../js/alert.js"></script>



<?php

if (isset($msg) && $msg!="")
{
    
    ?>
<script>
swal({

    title: "<?php echo $msg ; ?>",
    icon: ""


});
</script>
<?php



}

?>

</body>

</html>