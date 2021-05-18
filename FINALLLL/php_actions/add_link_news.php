<?php

include "dbconnect.php";
$success = "Tips Added";
date_default_timezone_set("Asia/Dhaka");


if (isset($_POST['usefullink'])) {
 $name =mysqli_real_escape_string($db, $_POST['name']);
 $link = mysqli_real_escape_string($db,$_POST['link']);


 

 $check= mysqli_query($db, "INSERT INTO links (name,link) values ('$name', '$link')"); 
 if($check==TRUE){
    $_SESSION['msg']=$success;
    echo '<script>alert("Link Added")</script>' ;
  echo ("<script>location.href='../admin/links.php'</script>");
}
else{
    echo "Sorry";
}
}

if (isset($_POST['newssubmit'])) {
  $news =mysqli_real_escape_string($db, $_POST['newstext']);
  $link = mysqli_real_escape_string($db,$_POST['link']);
 
 
  
 
  $check= mysqli_query($db, "INSERT INTO news (news_text,news_link) values ('$news', '$link')"); 
  if($check==TRUE){
     $_SESSION['msg']=$success;
     echo '<script>alert("News Added")</script>' ;
   echo ("<script>location.href='../admin/news.php'</script>");
 }
 else{
     echo "Sorry";
 }
 }
?>