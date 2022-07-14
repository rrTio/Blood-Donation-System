<?php
include_once("./database/connection.php"); 
session_start();
$id = $_SESSION['donorID']
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="UTF-8">
        <title>Donate Now</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="./assets/css/donorRequest.css">
        <link rel="stylesheet" href="./assets/css/main.css">
    </head>
    <body>
        <div class="top" id='top'>
            <center>
                <h3 class="welcome">Welcome, <?php echo $_SESSION['firstname']?></h3>
                <h1 class="header">DONATE BLOOD NOW!</h1>
                <form action='./database/donorRequestSched.php' method='POST'>
                    <button type="submit" name="btnRequestSched" value='<?php echo $id?>' class="btn btn-large">Request schedule</button>
                </form>
            </center>
        </div>
    </body>
</html>