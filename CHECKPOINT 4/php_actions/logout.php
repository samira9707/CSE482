<?php
include 'dbconnect.php';
session_destroy();
header("location:../login.php");
?>