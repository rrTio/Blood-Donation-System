<?php
include_once("./database/connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>History</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="stylesheet" href="./assets/css/headHistory.css">
    </head>
    <body>
        <div class="row mb-2 headerTabs">
            <div class="col-md-6">
                <center>
                    <a id='anchorPage' href="./headRequestList.php">REQUESTS</a>
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <a id='anchorPage' href="./headHistory.php">HISTORY</a>
                </center>
            </div>
        </div>
        <div class="row mb-2 headerTitle">
            <div class="col-md-12">
                <center>
                    <h1>HISTORY</h1>
                </center>
            </div>
        </div>
        <div class="row mx-5">
            <table class="table table-striped table-class" id= "table-id">
                <thead>
                    <tr>
                        <th>Donor ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Blood Type</th>
                        <th>Date and Time</th>
                        <th>RESULT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $getRequests = "SELECT * FROM requesttable";
                        $requests = mysqli_query($conn, $getRequests);
                        if(mysqli_num_rows($requests) > 0){
                            while($donorRequests = mysqli_fetch_assoc($requests)){
                                echo "
                                <form method='POST' action='./headViewRequestForm.php'>
                                    <tr id='requestsRow'>
                                        <td name='donorID'>".$donorRequests['donorID']."</td>
                                        <td name='name'>".$donorRequests['fullName']."</td>
                                        <td name='email'>".$donorRequests['email']."</td>
                                        <td name='bloodtype'><strong>".$donorRequests['bloodType']."</strong></td>
                                        <td name='result'>DATE AND TIME</td>
                                        <td name='result'><strong>VIEW FORM</strong></td>
                                    </tr>
                                </form>
                                ";
                            }
                        }
                    ?>
                <tbody>
            </table>
        </div>
    </body>
</html>