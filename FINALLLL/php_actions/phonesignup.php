<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['otp'])){


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $to = $_POST['phone'];
    $pass = $_POST['pass'];
    $encrptpass = md5($pass);

    $code=rand(10,10000);

    $_SESSION['verification_code'] = $code;
    $_SESSION['phone_number'] = $to;

    $token = "d7d67498962e55364dc4d4bb6fc42d76";
    $message = "Your verification code is: $code . - TravelGuide";
    
    $url = "http://api.greenweb.com.bd/api.php?json";
    
    
    $data= array(
    'to'=>"$to",
    'message'=>"$message",
    'token'=>"$token"
    ); // Add parameters in key value
    $ch = curl_init(); // Initialize cURL
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $smsresult = curl_exec($ch);
    
 
    $signup = "INSERT INTO user (f_name,l_name,phone,password,status)
    VALUES ('$fname', '$lname','$to','$encrptpass','0')";

    if($db->query($signup)===TRUE){
        echo '<script> alert("A verification code has been sent to your number.") </script>';


        echo ("<script>location.href='../verify.php'</script>");
    }
    else{
        echo "Sorry";
    }


}




?>