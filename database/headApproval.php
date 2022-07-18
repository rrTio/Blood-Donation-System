<?php 
include_once("./connection.php"); 
session_start();

if(isset($_POST['btnApproved'])){

    $fullname = $_POST['fullName'];
    $donorID = $_POST['donorID'];
    $email = $_POST['email'];

    $_SESSION['da_fullname'] = $fullname;
    $_SESSION['da_email'] = $email;
    $_SESSION['da_donorID'] = $donorID;
    header("Location: ../headScheduling.php");
}
?>
