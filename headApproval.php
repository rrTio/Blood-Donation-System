<?php 
include_once("./database/connection.php"); 

if(isset($_POST['btnApproved'])){
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $donorID = $_POST['donorID'];
    echo '<script>
            alert("WINDOW");
        </script>';
}

if(isset($_POST['btnDenied'])){
    $email = $_POST['email'];
    $donorID = $_POST['donorID'];
    $subject = 'REQUEST FOR DONATION SCHEDULE';
    $message = 'WE ARE SORRY FOR THE INCONVENIENCE, YOUR REQUEST FOR DONATION HAS BEEN DENIED.%0D%0A%0D%0A%0D%0AYOURS TRULY,%0D%0ASYSTEM ADMIN';


    $removeRequest = "DELETE FROM requesttable WHERE donorID = '$donorID';";
    $removeAnswers = "DELETE FROM requestformtable WHERE donorID = '$donorID';";
    mysqli_query($conn, $removeRequest);
    mysqli_query($conn, $removeAnswers);
    header("Location: ./headViewRequest.php");
}
?>

<!DOCTYPE html>
<html lang='en'>
    <head>

    </head>
    <body>
        <?php
            echo $fullname . "<br>";
            echo $email . "<br>";
            echo $donorID . "<br>";
        ?>
    </body>

</html>