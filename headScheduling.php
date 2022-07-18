<?php
include_once("./database/connection.php");
session_start();
$fullname = $_SESSION['da_fullname'];
$email = $_SESSION['da_email'];
$donorID = $_SESSION['da_donorID'];

$donationID = date("Y") . "-" . substr(hexdec(uniqid()), 12) . date("s");
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
        <title>Set Donor Schedule</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/headScheduling.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script type="text/javascript" src="./assets/js/headApproval.js"></script>
    </head>
    <body>
        <form name='approval'>
            <div class="row mb-2 headerTitle">
                <div class="col-md-12">
                    <center>
                        <h1>Schedule Donor</h1>
                    </center>
                </div>
            </div>

            <div class="row m-4">
                <h2>ID: <?php echo $donorID ?></h2>
                <input type="hidden" name='da_donorID' value='<?php echo $donorID?>'>
                <h2>NAME: <?php echo $fullname ?></h2>
                <input type="hidden" name='da_fullname' value='<?php echo $fullname?>'>
                <h2>EMAIL: <?php echo $email ?></h2>
                <input type="hidden" name='da_email' value='<?php echo $email?>'>
                <input type="hidden" name='donationID' value='<?php echo $donationID?>'>
            </div>

            <div class="q1">
                <div class="row mx-4">
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-control form-control-lg p-2 pt-3" id="venue" name="venue" required>
                                    <option selected hidden disabled>--SELECT--</option>
                                    <?php
                                        $getOrganization = "SELECT * FROM organizationsTable;";
                                        $resultOrganization = mysqli_query($conn, $getOrganization);
                                        if(mysqli_num_rows($resultOrganization) > 0){
                                            while($organization = mysqli_fetch_assoc($resultOrganization)){
                                                echo "<option value=".$organization['organization'].">".$organization['organization']."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                                <label class="form-label" for="venue">DONATON VENUE</label>    
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="da_month" name="da_month" required>
                                <option selected disabled hidden>--SELECT--</option>
                                <?php
                                    $getMonths = "SELECT * FROM birthmonths;";
                                    $resultMonths = mysqli_query($conn, $getMonths);
                                    if(mysqli_num_rows($resultMonths) > 0){
                                        while($months = mysqli_fetch_assoc($resultMonths)){
                                            echo"<option value=".$months['birthmonths'].">".$months['birthmonths']."</option>";
                                        }
                                    }
                                ?>
                            </select>
                            <label class="form-label" for="da_month">MONTH</label>    
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="da_day" name="da_day" required>
                                <option selected hidden disabled>--SELECT--</option>
                                <?php
                                    $getDays = "SELECT * FROM birthdays;";
                                    $resultDays = mysqli_query($conn, $getDays);
                                    if(mysqli_num_rows($resultDays) > 0){
                                        while($days = mysqli_fetch_assoc($resultDays)){
                                            echo "<option value=".$days['birthdays'].">".$days['birthdays']."</option>";
                                        }
                                    }
                                ?>
                            </select>
                            <label class="form-label" for="da_day">DAY</label>
                        </div> 
                    </div>

                    <div class="col-md-3">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="da_year" name="da_year" placeholder="Birth Year" onKeyPress="if(this.value.length==4) return false;" required>
                            <label class="form-label" for="da_year">YEAR</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mx-4 mt-2">
                <div class="col-md-3">
                    <input type="time" id="appt" name="appt" class="form-control form-control-lg" >
                </div>
            </div>

            <center>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <button type="submit" onclick="approveDonor()"name="btnApproveDonor" class="btn btn-success btn-block btn-large">APPROVE</button>
                    </div>
                </div>
            </center>
        </form>
    </body>

</html>