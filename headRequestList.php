<?php

include_once("./database/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Donor Requests</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/headRequestList.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script type="text/javascript" src="./assets/js/headRequestList.js"></script>
    </head>
    <body>
        <div class="row mb-2 headerTitle">
            <div class="col-md-12">
                <center>
                    <h1>DONOR REQUESTS LIST</h1>
                </center>
            </div>
        </div>
        <!---->
        <div class="container">
        <div class="header_wrap">
            <div class="num_rows">
                <div class="form-group">
                    <select class  ="form-control" name="state" id="maxRows">
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                        <option value="5000">Show ALL Rows</option>
                    </select>
                </div>
            </div>
        <div class="tb_search">
            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
        </div>
        <table class="table table-striped table-class" id= "table-id">
            <thead>
                <tr>
                    <th>Donor ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Blood Type</th>
                    <th>Action</th>
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
                                    <td name='phone'>".$donorRequests['contactNumber']."</td>
                                    <td name='gender'>".$donorRequests['gender']."</td>
                                    <td name='bloodtype'><strong>".$donorRequests['bloodType']."</strong></td>
                                    <td name='view'><button class='btn-primary' name='btnView' value=".$donorRequests['donorID'].">VIEW FORM</button></td>
                                </tr>
                            </form>
                            ";
                        }
                    }
                ?>
            <tbody>
        </table>
        <!---->
    </body>
</html>