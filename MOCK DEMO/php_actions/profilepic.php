
<?php

include 'dbconnect.php';

if(isset($_POST['profilepic'])){

    $userid = mysqli_real_escape_string($db,$_POST['userid']);

    $image = $_FILES['image']['name'];

    $target = "../profilephoto/".basename($image);
   
   move_uploaded_file($_FILES['image']['tmp_name'], $target);


    $update = "UPDATE user SET image ='$image' WHERE user_id='$userid' ";

    if($db->query($update)===TRUE){
        echo '<script> alert("Picture Uploaded Successfully") </script>';
        echo ("<script>location.href='../userprofile.php?id=$userid'</script>");
    }
    else{
        echo "Sorry";
    }


}


?>
