<?php

include "dbconnect.php";
$success = "Tips Added";
date_default_timezone_set("Asia/Dhaka");


if(!empty($_POST)) {
 $title =mysqli_real_escape_string($db, $_POST['title']);
 $desc = mysqli_real_escape_string($db,$_POST['desc']);
 $place = mysqli_real_escape_string($db,$_POST['place']);
 $date = date("h:i A (d-m-Y)");

 $image = $_FILES['image']['name'];

 $target = "../tipsimage/".basename($image);

move_uploaded_file($_FILES['image']['tmp_name'], $target);


 $check= mysqli_query($db, "INSERT INTO guideline (title, description,image,place,time) values ('$title', '$desc','$image', '$place','$date')"); 
 if($check==TRUE){
    $_SESSION['msg']=$success;
    echo '<script>alert("Image Uploaded")</script>' ;
  echo ("<script>location.href='../admin/tips_tricks.php'</script>");
}
else{
    echo "Sorry";
}
}
?>