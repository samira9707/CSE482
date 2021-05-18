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


if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
   
    $check= mysqli_query($db, "DELETE FROM blog WHERE blog_id='$id' "); 
    
    if($check==TRUE){
        echo '<script> alert("Post Deleted") </script>';
        echo ("<script>location.href='userprofile.php'</script>");
    }
    else{
        echo "Sorry";
    }


}

if(isset($_POST['postupdate'])){

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $bid = $_POST['bid'];



    $update = "UPDATE blog SET title ='$title',description='$desc' WHERE blog_id='$bid' ";

    if($db->query($update)===TRUE){
        echo '<script> alert("Post Updated Successfully") </script>';
        echo ("<script>location.href='userprofile.php'</script>");
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
    <title>Travel Guide</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="stylesheet" href="extra_added_file/style.css">



</head>

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
    <?php

   

    $ses_sql = mysqli_query($db, "SELECT * FROM user WHERE user_id =$user_check ");

    $user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    
    $fname = $user['f_name'];
    $lname = $user['l_name'];
    $email = $user['email'];
    $phone = $user['phone'];
    $address = $user['address'];
    $image = $user['image'];
    $fb = $user['fb_link'];


    ?>

    <div class="container mt-5 p-5">

        <div class="main-body">



            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">


<?php 
$filename ="profilephoto/$image"; 
if (file_exists($filename)==1) {
    ?>
    <img src="profilephoto/<?php echo $image; ?>" alt="Admin" class="rounded-circle" width="150">
    <?php
   
} else {
    ?>
    <img src="<?php echo $image;?>" alt="Admin" class="rounded-circle" width="150">
    <?php
}
    ?>
                            
                         
                                <div class="mt-3">
                                    <h4><?php echo $fname . " " . $lname; ?> </h4>
                                    <p class="text-secondary mb-1"><?php echo  $phone; ?></p>
                                    <p class="text-muted font-size-sm"><?php echo $email; ?></p>
                                    <p class="text-muted font-size-sm"><?php echo $address; ?></p>

                                    <button data-toggle="modal" data-target="#uploadpic" class="btn btn-outline-primary">Upload New Photo</button>
                                    <button data-toggle="modal" data-target="#updateprofile" class="btn btn-primary ">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                         
                        
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary"><a href="<?php echo $fb; ?>" target="_blank" rel="noopener noreferrer">View >></a></span>
                            </li>
                        </ul>
                    </div>
                </div>


 <!------------------------------Profile Picture--------------------------------->
 <div class="modal fade" id="uploadpic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Update your Profile Info</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="php_actions/profilepic.php" enctype="multipart/form-data">
                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-5">
                                                    <input type="hidden" name="userid" value="<?php echo $user_check; ?>">
                                                 
                                                    <input type="file" name="image"  class="form-control validate">
                                                </div>
                                                


                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn btn-unique" type="submit" name="profilepic">Upload <i class="fas fa-paper-plane-o ml-1"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                     

                            <!------------------------------UPDATE  PROFILE--------------------------------->
                            <div class="modal fade" id="updateprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Update your Profile Info</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="php_actions/profileupdate.php">
                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-5">
                                                    <input type="hidden" name="userid" value="<?php echo $user_check; ?>">
                                                    <label for="">First name</label>
                                                    <input type="text" name="F_Name" value="<?php echo $fname; ?>" class="form-control validate">
                                                </div>
                                                <div class="md-form mb-5">
                                                    <label for="">Last name</label>
                                                    <input type="text" name="L_Name" value="<?php echo $lname; ?>" class="form-control validate">
                                                </div>
                                                <div class="md-form mb-5">
                                                    <label for="">Email </label>
                                                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control validate">
                                                </div>

                                                <div class="md-form mb-5">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control validate">
                                                </div>

                                                <div class="md-form mb-5">
                                                    <label for="">Address</label>
                                                    <input type="text" name="address" value="<?php echo $address; ?>" class="form-control validate">
                                                </div>
                                                <div class="md-form mb-5">
                                                    <label for="">Facebook Profile Link</label>
                                                    <input type="text" name="fb" value="<?php echo $fb; ?>" class="form-control validate">
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn btn-unique" type="submit" name="profileupdate">Update <i class="fas fa-paper-plane-o ml-1"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!------------------------------UPDATE  PROFILE--------------------------------->




                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="modal-title w-100 font-weight-bold">Your Post</h4> <br>

                            <?php

                          

                          $sql = "SELECT * FROM blog  WHERE user_id = $user_check";
                          $get = mysqli_query($db, $sql);
                          
                          if (mysqli_num_rows($get) > 0) {
                            // output data of each row
                            while($userpost = mysqli_fetch_assoc($get)) {
                                $title = $userpost['title'];
                                $desc = $userpost['description'];
                                $img = $userpost['image'];
                                $bid = $userpost['blog_id'];
                                $time = $userpost['up_time'];
                                $status = $userpost['status'];
                                ?>



                            <div class="media">
                                <img class="d-flex mr-3" width="100px" src="blogimage/<?php echo $img ; ?>" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6 class="mt-1 font-weight-bold"><a href="blogdetails.php?blogid=<?php echo $bid ; ?>"><?php echo $title ; ?></a>
                                    <?php 
                                    if ($status=="0"){ ?>
                                        <button  class="btn btn-warning float-right">PENDING</button>
                                    <?php }
                                    else {
                                        ?>
                                        <button data-toggle="modal" data-target="#updateblog<?php echo $bid ; ?>" class="btn btn-success float-right">Edit</button>
                                        <button data-toggle="modal" data-target="#blogdelete<?php echo $bid ; ?>" class="btn btn-danger float-right">Delete</button>

                                        <?php
                                        }
                                        ?>
                                    </h6>
                                   
                                </div>
                            </div>
                            <hr class="my-3">

                                    

                            <!------------------------------UPDATE  POST--------------------------------->
                            <div class="modal fade" id="updateblog<?php echo $bid ; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Update your Post</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-5">
                                                    <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                                                    <label for="textarea">Title</label>
                                                    <input type="text" name="title" value="<?php echo $title; ?>" class="form-control validate">
                                                </div>
                                                <div class="md-form">
                                                <label >Description</label>
                                                    <textarea  name="desc" class="md-textarea form-control" rows="4"> <?php echo $desc; ?></textarea>
                                                </div>

                                             

                                                <div id="success"></div>


                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn btn-unique" type="submit" name="postupdate">Update <i class="fas fa-paper-plane-o ml-1"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!------------------------------UPDATE  POST--------------------------------->


                            <!-------------------------DELETE POST-------------------------->
                            <div class="modal fade" id="blogdelete<?php echo $bid ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                            <!--Content-->
                            <div class="modal-content text-center">
                                <!--Header-->
                                <div class="modal-header d-flex justify-content-center">
                                <p class="heading">Are you sure to delete <?php echo $title;?> ?</p>
                                
                                </div>

                                <!--Body-->
                                <div class="modal-body">

                                <i class="fas fa-times fa-4x animated rotateIn"></i>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer flex-center">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $bid;?>">
                                <input type="submit" name="delete" value="Yes" class="btn  btn-outline-danger" >
                                </form>
                                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
                                </div>
                            </div>
                            <!--/.Content-->
                            </div>
                            </div>
                            <!-------------------------DELETE POST-------------------------->



                            <?php
                            }
                            
                                    } 
                                    else {
                                        echo "No Blogs";
                                    }
                                      ?>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <!-------------------------------------------AR EKHANEE ESHEE SESH HOBEEEE------------------------------------------->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark pt-4 ">


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
    <script type="text/javascript" src="extra_added_file/scrpits.js"></script>
    <script type="text/javascript" src="js/alert.js"></script>



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