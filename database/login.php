<?php 
include_once("connection.php");
session_start();

if(isset($_POST['btnLoginHead'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginQuery = "SELECT * FROM headtable WHERE (email = '$username' OR userName = '$username') AND headPassword = '$password';";
    $login = mysqli_query($conn, $loginQuery);

    if(mysqli_num_rows($login) > 0){
        while($head = mysqli_fetch_assoc($login)){
            $position = $head['headPosition'];
            $organization = $head['organization'];
            $fullName = $head['fullName'];
            $firstName = $head['firstName'];
            $lastName = $head['lastName'];
            $headID = $head['headID'];
        }
        header("location: ../headRequestList.php");
    }

    else{
        header("Location: ../headLogin.php");
        echo '<script> alert("Error credentials") </script>';
    }
}

if(isset($_POST['btnLoginDonor'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginQuery = "SELECT * FROM donortable WHERE (donorEmail = '$username' OR userName = '$username') AND donorPassword = '$password';";
    $login = mysqli_query($conn, $loginQuery);

    if(mysqli_num_rows($login) > 0){
        while($donor = mysqli_fetch_assoc($login)){
            $firstName = $donor['firstName'];
            $lastName = $donor['lastName'];
            $fullName = $donor['fullName'];
            $donorID = $donor['donorID'];
            $gender = $donor['gender'];
            $contactNumber = $donor['contactNumber'];
            $address = $donor['donorAddress'];
            $email = $donor['donorEmail'];
            $bloodType = $donor['bloodType'];
            $venue = $donor['donationVenue'];
        }
        $_SESSION['firstname'] = $firstName;
        $_SESSION['lastname'] = $lastName;
        $_SESSION['fullname'] = $fullName;
        $_SESSION['donorID'] = $donorID;
        $_SESSION['bloodType'] = $bloodType;
        $_SESSION['contactNumber'] = $contactNumber;
        $_SESSION['address'] = $address;
        $_SESSION['gender'] = $gender;
        $_SESSION['venue'] = $venue;
        $_SESSION['email'] = $email;
        header("Location: ../donorRequest.php");
    }

    else{
        header("Location: ../donorLogin.php");
        echo '<script> alert("Error credentials") </script>';
    }
}

?>