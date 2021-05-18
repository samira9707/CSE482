<?php

include "dbconnect.php";
$success = "Blog uploaded";
date_default_timezone_set("Asia/Dhaka");


if(!empty($_POST)) {
 $title =mysqli_real_escape_string($db, $_POST['title']);
 $desc = mysqli_real_escape_string($db,$_POST['desc']);
 $userid = mysqli_real_escape_string($db,$_POST['uid']);
 $date = date("h:i A (d-m-Y)");

 $image = $_FILES['image']['name'];

 $target = "../blogimage/".basename($image);

move_uploaded_file($_FILES['image']['tmp_name'], $target);


 $check= mysqli_query($db, "INSERT INTO blog (title, description,image, user_id,status,up_time) values ('$title', '$desc','$image', '$userid','0','$date')"); 
 if($check==TRUE){
    $_SESSION['msg']=$success;
    echo ("<script>location.href='../home.php'</script>");
}
else{
    echo "Sorry";
}
}
?>