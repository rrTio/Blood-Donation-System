<?php

include_once("./connection.php");

if(isset($_POST['btnChangePasswordDonor'])){

    $dUsername = $_POST['donorUsername'];
    $dPassword = $_POST['donorPassword'];

    $donorChangePassword = "UPDATE donortable SET (userName = '$dUsername' OR donorEmail = '$dUsername') AND donorPassword = '$dPassword';";
    mysqli_query($conn, $donorChangePassword);

    header("Location: ../donorLogin.php");
    
}

if(isset($_POST['btnChangePasswordHead'])){

    $dUsername = $_POST['headUsername'];
    $dPassword = $_POST['headPassword'];

    $headChangePassword = "UPDATE headtable SET (userName = '$dUsername' OR email = '$dUsername') AND headPassword = '$dPassword';";
    mysqli_query($conn, $headChangePassword);

    header("Location: ../headLogin.php");
    
}

?>