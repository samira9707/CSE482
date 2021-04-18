<?php
include 'dbconnect.php';

$msg ="OK";

if(isset($_POST['submit'])){
    $id = $_POST['blogid'];
    
   
    $check= mysqli_query($db, "UPDATE blog SET status ='1' WHERE blog_id='$id' "); 
    
    if($check==TRUE){
        $_SESSION['success']=$msg;
        echo ("<script>location.href='../admin/admin.php'</script>");
    }
    else{
        echo "Sorry";
    }


}




?>