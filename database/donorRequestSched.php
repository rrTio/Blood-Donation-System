<?php

include_once("connection.php");
date_default_timezone_set('Asia/Manila');

if(isset($_POST['btnRequestSched'])){
    $donorID = $_POST['donorID'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $fullName = $_POST['fullname'];
    $bloodType = $_POST['bloodType'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $venue = $_POST['venue'];
    $donationDate = date('Y-m-d');
    $donationDateText = date('M d, Y');
    $donationTime = date('h:ia');

    $insertRequest = "INSERT INTO requestTable (donorID, firstName, lastName, fullName, bloodType, email, contactNumber, donorAddress, donationText, donationDate, donationTime, gender, venue) 
                        VALUES('$donorID', '$firstName', '$lastName', '$fullName', '$bloodType', '$email', '$contactNumber', '$address', '$donationDateText', '$donationDate', '$donationTime', '$gender', '$venue');";
    mysqli_query($conn, $insertRequest);

    echo '<script>
            alert("Request Submitted"); 
            window.location.href = "../donorRequest.php";
        </script>';
}

?>