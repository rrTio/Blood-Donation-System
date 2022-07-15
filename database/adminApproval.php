<?php

if(isset($_POST['btnApproved'])){
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $scheduleDate = $_POST[''];
    $scheduleTime = $_POST[''];
    $subject = 'REQUEST FOR DONATION SCHEDULE';

}

if(isset($_POST['btnDenied'])){
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $subject = 'REQUEST FOR DONATION SCHEDULE';
    $message = 'WE ARE SORRY FOR THE INCONVENIENCE, YOUR REQUEST FOR DONATION HAS BEEN DENIED.%0D%0A%0D%0A%0D%0AYOURS TRULY,%0D%0ASYSTEM ADMIN';
    $url = "https://mail.google.com/mail/?view=cm&fs=1&tf=1&body='.$message.'&su='.$subject.'&to='.$email.'";
    $target = '_blank';
    $link = '<script>window.open('.$url.','.$target.');</script>';
}

?>