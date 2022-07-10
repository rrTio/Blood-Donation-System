<?php

include_once("connection.php");

if(isset($_POST['btnApproved'])){
    $email = "rozsraventio2305@gmail.com";
    $message = "Your request has been approved.";
    $subject = "DONATION REQUEST SCHEDULE";
    mail($email,$subject,$message);
}

if(isset($_POST['btnDenied'])){

}

?>