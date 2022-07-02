<?php

include_once("connection.php");
date_default_timezone_set('Asia/Manila');

if(isset($_POST['btnRegisterDonor'])){
    $donorID = $_POST['donorID'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $fullName = $lastName . ', ' . $firstName . ' ' . $middleName;
    $birthMonth = $_POST['bMonth'];
    $birthDay = $_POST['bDay'];
    $birthYear = $_POST['bYear'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $donationDate = date('Y-m-d');
    $donationDateText = date('M d, Y');
    $donationTime = date('h:ia');
    $donorAddress = $_POST['cityAdd'];
    $bloodType = $_POST['bType'];
    $contactNumber = $_POST['mobileNumber'];
    $donationVenue = $_POST['venue'];
    $userName = $_POST['uName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insertToDonorTable = "INSERT INTO donortable (donorID, firstName, middleName, lastName, fullName, birthMonth, birthDay, birthYear, age, gender, donationText, donationDate, donationTime, donorAddress, bloodType, contactNumber, donationVenue, userName, donorEmail, donorPassword)
                            VALUES('$donorID', '$firstName', '$middleName', '$lastName', '$fullName', '$birthMonth', '$birthDay', '$birthYear', '$age', '$gender', '$donationDateText', '$donationDate', '$donationTime', '$donorAddress', '$bloodType', '$contactNumber', '$donationVenue', '$userName', '$email', '$password');";
    mysqli_query($conn, $insertToDonorTable);
    header("Location: ../index.php");
}

?>