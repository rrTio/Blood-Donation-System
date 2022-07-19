<?php 
include_once("./connection.php"); 
date_default_timezone_set('Asia/Manila');
session_start();

if(isset($_POST['btnApproved'])){

    $fullname = $_POST['fullName'];
    $donorID = $_POST['req_donorID'];
    $email = $_POST['email'];

    $_SESSION['da_fullname'] = $fullname;
    $_SESSION['da_email'] = $email;
    $_SESSION['da_donorID'] = $donorID;
    header("Location: ../headScheduling.php");
}

if(isset($_POST['btnApproveDonor'])){
    $da_donorID = $_POST['da_donorID'];

    $insertHistory = "UPDATE historytable SET result = 'APPROVED' WHERE donorID = '$da_donorID';";
    mysqli_query($conn, $insertHistory);
    header("Location: ../headRequestList.php");
}

if(isset($_POST['btnDenied'])){
    $donorID = $_POST['req_donorID'];

    $insertHistory = "UPDATE historytable SET result = 'DENIED' WHERE donorID = '$donorID';";
    mysqli_query($conn, $insertHistory);
    header("Location: ../headRequestList.php");
}
?>
