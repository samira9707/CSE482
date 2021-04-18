<?php

include "dbconnect.php";
$success = "Comment Added";
date_default_timezone_set("Asia/Dhaka");


if (isset($_POST['submit'])) {
 $comment =$_POST['comment'];
 $userid =$_POST['userid'];
 $blogid =$_POST['blogid'];
 $date = date("h:i A (d-m-Y)");




 $check= mysqli_query($db, "INSERT INTO blog_comment (comment,user_id,blog_id,ctime) values ('$comment','$userid','$blogid','$date')"); 
 if($check==TRUE){
    $_SESSION['msg']=$success;
    echo ("<script>location.href='../blogdetails.php?blogid=$blogid'</script>");
}
else{
    echo "Sorry";
    echo $blogid;
    echo $userid;
    echo $date;
}
}
?>