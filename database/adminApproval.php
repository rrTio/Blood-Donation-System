<?php

include_once("connection.php");

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

if(isset($_POST['btnApproved'])){
    $email = "rozsraventio2305@gmail.com";
    $message = "Your request has been approved.";
    $subject = "DONATION REQUEST SCHEDULE";
    mail($email,$subject,$message);
}

if(isset($_POST['btnDenied'])){
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];

    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.yahoo.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rozsraven@yahoo.com';
        $mail->Password = 'Rrgt5235';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('rozsraven@yahoo.com', 'Mailer');
        $mail->addAddress($email, $fullName);
        $mail->isHTML(false);
        $mail->Subject = 'DONATION REQUEST SCHEDULE';
        $mail->Body = 'We are sorry to send you this message. The request you filed has been denied.';

        $mail->send();
        header("Location: ../headRequestList.php");
    }
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>