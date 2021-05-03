
<?php

if (isset($_POST["mailsubmit"])) {
    $name = $_POST['Name'];
    $to = "abirfarajee80@gmail.com";
    $subject = $_POST['Subject'];
    $txt = $_POST['Message'];
    $mail = $_POST['Email'];
    $headers = "From:$name <$mail> ". "\r\n";
    
  $mailcheck=  mail($to,$subject,$txt,$headers);

  if($mailcheck)
  {
    echo '<script>alert("Message has been send. Thank you");window.location="home.php";</script>'; 

  }
  else{
    echo '<script>alert("Oops! Something Error!!");window.location="home.php";</script>'; 
  }
} 



?>