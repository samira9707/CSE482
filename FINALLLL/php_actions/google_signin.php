<?php

include 'dbconnect.php';
session_start();

        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $image = $_POST['image'];
        
    
        $login = "SELECT user_id FROM user WHERE email = '$email' ";
    
        $result = mysqli_query($db, $login);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $id = $row['user_id'];
    
        $count = mysqli_num_rows($result);
    
        if ($count == 1) {
         
            $_SESSION['login_user'] = $id;
            header("location:../home.php");
        } else {
            
            $signup = "INSERT INTO user (f_name,email,image,status)
            VALUES ('$fname','$email','$image','1')";
            
            if ($db->query($signup) === TRUE) {
                $id = mysqli_insert_id($db);
                $_SESSION['login_user'] = $id;
                header("location:../home.php");
                


              } else {
                echo "Error: " . $signup . "<br>" . $db->error;
              }


        }
?>