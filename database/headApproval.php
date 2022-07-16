<?php 
include_once("./connection.php"); 

if(isset($_POST['btnApproved'])){
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $donorID = $_POST['donorID'];
    echo '<script>
            alert("WINDOW");
        </script>';
}

if(isset($_POST['btnDenied'])){
    $donorID = $_POST['donorID'];
    //$removeRequest = "DELETE FROM requesttable WHERE donorID = '$donorID';";
    //$removeAnswers = "DELETE FROM requestformtable WHERE donorID = '$donorID';";
    //mysqli_query($conn, $removeRequest);
    //mysqli_query($conn, $removeAnswers);
    header("Location: ../headRequestList.php");
}
?>
