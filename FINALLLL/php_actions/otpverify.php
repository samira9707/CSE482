<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['verify'])){

    $code = $_POST['code'];
    $number = $_SESSION['phone_number'] ;

    if($code==$_SESSION['verification_code']){

    $signup = "UPDATE user SET status=1 WHERE phone='$number'";

        $_SESSION['verifymsg']="TRUE";
        echo ("<script>location.href='../verify.php'</script>");
    }
    
    else{
        $_SESSION['verifymsg']="FALSE";
        echo ("<script>location.href='../verify.php'</script>");
    }
}





?>