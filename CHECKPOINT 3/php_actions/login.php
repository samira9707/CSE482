<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['submit'])) {


    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $encrptpass = md5($pass);

    $login = "SELECT user_id FROM user WHERE email = '$email' and password = '$encrptpass'";

    $result = mysqli_query($db, $login);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $id = $row['user_id'];

    $count = mysqli_num_rows($result);

    if ($count == 1) {
       
        $_SESSION['login_user'] = $id;
        header("location: ../home.php");
    } else {
        echo  "Your Login Name or Password is invalid";
    }
}
