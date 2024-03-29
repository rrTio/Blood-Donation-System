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
    $donorAddress = $_POST['cityAdd'];
    $bloodType = $_POST['bType'];
    $contactNumber = $_POST['mobileNumber'];
    $donationVenue = $_POST['venue'];
    $userName = $_POST['uName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insertToDonorTable = "INSERT INTO donortable (donorID, firstName, middleName, lastName, fullName, birthMonth, birthDay, birthYear, age, gender, donorAddress, bloodType, contactNumber, donationVenue, userName, donorEmail, donorPassword)
                            VALUES('$donorID', '$firstName', '$middleName', '$lastName', '$fullName', '$birthMonth', '$birthDay', '$birthYear', '$age', '$gender', '$donorAddress', '$bloodType', '$contactNumber', '$donationVenue', '$userName', '$email', '$password');";
    mysqli_query($conn, $insertToDonorTable);
    header("Location: ../donorLogin.php");
}

if(isset($_POST['btnRegisterHead'])){
    $headID = $_POST['headID'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $fullName = $lastName . ', ' . $firstName . ' ' . $middleName;
    $position = $_POST['position'];
    $organization = $_POST['organization'];
    $cityAddress = $_POST['cityAdd'];
    $mobileNumber = $_POST['mobileNumber'];
    $userName = $_POST['uName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insertToHeadTable = "INSERT INTO headtable (headID, firstName, middleName, lastName, fullName, headAddress, contactNumber, headPosition, organization, email, userName, headPassword)
                            VALUES ('$headID', '$firstName', '$middleName', '$lastName', '$fullName', '$cityAddress', '$mobileNumber', '$position', '$organization', '$email', '$userName', '$password');";
    mysqli_query($conn, $insertToHeadTable);
    header("Location: ../headLogin.php");
}

?>