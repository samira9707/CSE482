<?php
include 'dbconnect.php';


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

  

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {


      
  echo '<script>alert("File is not an image.")</script>' ;
  echo ("<script>location.href='../admin/gallery.php'</script>");
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo '<script>alert("Sorry, file already exists.")</script>' ;
  echo ("<script>location.href='../admin/gallery.php'</script>");

  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
 
  echo '<script>alert("Sorry, your file is too large.")</script>' ;
  echo ("<script>location.href='../admin/gallery.php'</script>");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  
  echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>' ;
  echo ("<script>location.href='../admin/gallery.php'</script>");
  
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {


  echo '<script>alert("Sorry, your file was not uploaded.")</script>' ;
  echo ("<script>location.href='../admin/gallery.php'</script>");
  
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

    $img = $_FILES["image"]["name"];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    $sql = "INSERT INTO images (image, image_text) VALUES ('$img', '$image_text')";
  	
  	mysqli_query($db, $sql);

  echo '<script>alert("Image Uploaded")</script>' ;
  echo ("<script>location.href='../admin/gallery.php'</script>");


  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>