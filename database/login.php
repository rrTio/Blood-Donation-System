<?php 
include_once("connection.php");

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
        header("location: ");
    }

    else{
        echo '<script> alert("Error credentials"); </script>';
        header("Location: ../index.php");
    }
}

?>