<?php 
include_once("./database/connection.php");
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
        <title>View Request Form</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/headViewRequestForm.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script type="text/javascript" src="./assets/js/headViewRequestForm.js"></script>
    </head>
    <body>
        <section>
            <div class="container mt-3">
                <form name="headReg" method="POST" action="./database/adminApproval.php">
                    <input type="hidden" name='headID' value='<?php echo $id?>'>
                    <div class="row mb-2 headerTitle">
                        <div class="col-md-12">
                            <center>
                                <h1>Donor's Request Form</h1>
                            </center>
                        </div>
                    </div>

                    <?php
                    
                        if(isset($_POST['btnView'])){
                            $donorID = $_POST['btnView'];

                            $getDonor = "SELECT * FROM donortable WHERE donorID = '$donorID';";
                            $donor = mysqli_query($conn, $getDonor);
                            if(mysqli_num_rows($donor) > 0){
                                while($donorInfo = mysqli_fetch_assoc($donor)){
                                    $donorID = $donorInfo['donorID'];
                                    $fullName = $donorInfo['fullName'];
                                    $birthDate = $donorInfo['birthMonth'] . ' ' . $donorInfo['birthDay'] . ', ' . $donorInfo['birthYear'];
                                    $age = $donorInfo['age'];
                                    $gender = $donorInfo['gender'];
                                    $bloodType = $donorInfo['bloodType'];
                                    $email = $donorInfo['donorEmail'];
                                    $contactNumber = $donorInfo['contactNumber'];
                                    $address = $donorInfo['donorAddress'];
                                }
                            }
                        }

                    ?>
                    
                    <!--TWO COLUMN QUESTION-->
                    <div class="row mb-2 headerBlock">
                        <div class="col-md-12">
                            <center>
                                <h1>Donor's Info</h1>
                            </center>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <center>
                                        <h3>DONOR ID</h3>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <h3>FULL NAME</h3>
                                    </center>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $donorID ?>" disabled>
                                        <label class="form-label" for="fName">Donor ID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $fullName ?>"  disabled>
                                        <label class="form-label" for="fName">Full Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-2">
                            <div class="col-md-6">
                                    <center>
                                        <h3>BIRTH DATE</h3>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <h3>AGE</h3>
                                    </center>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $birthDate ?>" disabled>
                                        <label class="form-label" for="answer">Birth Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $age ?>" disabled>
                                        <label class="form-label" for="fName">Age</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-2">
                            <div class="col-md-6">
                                    <center>
                                        <h3>GENDER</h3>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <h3>BLOOD TYPE</h3>
                                    </center>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $gender ?>" disabled>
                                        <label class="form-label" for="answer">Gender</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $bloodType ?>" disabled>
                                        <label class="form-label" for="fName">Blood Type</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-2">
                            <div class="col-md-6">
                                    <center>
                                        <h3>EMAIL</h3>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <h3>CONTACT NUMBER</h3>
                                    </center>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $email ?>" disabled>
                                        <label class="form-label" for="answer">Email</label>
                                        <input type='hidden' value='<?php echo $email?>' name='email'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $contactNumber ?>" disabled>
                                        <label class="form-label" for="fName">Contact Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <center>
                                        <h3>ADDRESS</h3>
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" value="<?php echo $address ?>" disabled>
                                        <label class="form-label" for="answer">Address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2 headerBlock">
                        <div class="col-md-12">
                            <center>
                                <h1>Donor's Request Form</h1>
                            </center>
                        </div>
                    </div>

                    <!--ONE COLUMN QUESTION-->
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3>
                                        Question 1
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" placeholder="answer" disabled>
                                        <label class="form-label" for="answer">ANSWER</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3>
                                        Question 2
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" placeholder="answer" disabled>
                                        <label class="form-label" for="answer">ANSWER</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3>
                                        Question 3
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" placeholder="answer" disabled>
                                        <label class="form-label" for="answer">ANSWER</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3>
                                        Question 4
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" placeholder="answer" disabled>
                                        <label class="form-label" for="answer">ANSWER</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3>
                                        Question 5
                                    </h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" placeholder="answer" disabled>
                                        <label class="form-label" for="answer">ANSWER</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h3>
                                        Question 6
                                    </h3>
                                </div>
                                <div class="col-md-12 mb-5">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="answer" name="answer" placeholder="answer" disabled>
                                        <label class="form-label" for="answer">ANSWER</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--BUTTON-->               
                    <center>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <button type="submit" name="btnApproved" class="btnApprove btn-success btn-lg btn-block">Approve</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="btnDenied" class="btnDeny btn-danger btn-lg btn-block">Deny</button>
                                </div>
                            </div>
                    </center>
                </form>
            </div>
        </section>
    </body>
</html>