<?php

include 'dbconnect.php';

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $encrptpass = md5($pass);

    $signup = "INSERT INTO user (f_name,l_name,email,phone,password,status)
    VALUES ('$fname', '$lname','$email','$phone','$encrptpass','1')";

    if($db->query($signup)===TRUE){
        echo '<script> alert("User Account created Successfully") </script>';
        echo ("<script>location.href='../login.php'</script>");
    }
    else{
        echo "Sorry";
    }


}




?>