<?php

include 'dbconnect.php';

if(isset($_POST['profileupdate'])){

    $fname = $_POST['F_Name'];
    $lname = $_POST['L_Name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $fb = $_POST['fb'];
    $userid = $_POST['userid'];



    $update = "UPDATE user SET f_name ='$fname',l_name='$lname',email='$email', phone='$phone',fb_link='$fb', address='$address' WHERE user_id='$userid' ";

    if($db->query($update)===TRUE){
        echo '<script> alert("Profile Updated Successfully") </script>';
        echo ("<script>location.href='../userprofile.php?id=$userid'</script>");
    }
    else{
        echo "Sorry";
    }


}




?>