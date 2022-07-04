<?php 
include_once("./database/connection.php");
$id = date("Y") . "-" . "03" . substr(hexdec(uniqid()), 12) . date("s");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" http-equiv="Content-Type">
    <title>Admin Registration Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/headRegistration.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script type="text/javascript" src="./assets/js/headRegistration.js"></script>
</head>
<body>
    <section>
            <div class="container mt-3">
                <form name="headReg" method="POST" action="./database/registrations.php">
                    <input type="hidden" name='headID' value='<?php echo $id?>'>
                    <div class="row mb-2 headerTitle">
                        <div class="col-md-12">
                            <center>
                                <h1>Admin Registration Form</h1>
                            </center>
                            <h4>Basic Information</h4>
                            <h6>Head ID: <?php echo $id?></h4>
                        </div>
                    </div>
                    <!--NAME ROW-->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="lName" name="lastName" placeholder="Last Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                                        <label class="form-label" for="lName">LAST NAME</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="fName" name="firstName" placeholder="First Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                                        <label class="form-label" for="fName">FIRST NAME</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="text" id="mName" name="middleName" placeholder="Middle Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                                        <label class="form-label" for="mName">MIDDLE NAME</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--POSITION AND ORGANIZATION ROW-->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-control form-control-lg p-2 pt-3" id="position" name="position" required>
                                    <option selected disabled>--SELECT--</option>
                                    <?php
                                        $getPosition = "SELECT * FROM positionstable;";
                                        $resultPosition = mysqli_query($conn, $getPosition);
                                        if(mysqli_num_rows($resultPosition) > 0){
                                            while($position = mysqli_fetch_assoc($resultPosition)){
                                                echo "<option value=".$position['positions'].">".$position['positions']."</option>";                                          
                                            }
                                        }
                                    ?>
                                </select>
                                <label class="form-label" for="position">POSITION</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-control form-control-lg p-2 pt-3" id="organization" name="organization" required>
                                    <option selected disabled>--SELECT--</option>
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
                                <label class="form-label" for="organization">ORGANIZATION</label>    
                            </div>
                        </div>
                    </div>
                    <!--CONTACT INFORMATION-->
                    <div class="row mb-2 headerTitle">
                        <div class="col-md-12">
                            <center>
                                <h4> Contact Information </h4>
                            </center>
                        </div>    
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" rows="3" type="text" id="cityAdd" name="cityAdd" placeholder="cityAdd" required>
                                <label for="cityAdd">CITY ADDRESS</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="number" id="mobileNumber" name="mobileNumber" placeholder="mobileNumber" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                                <label class="form-label" for="mobileNumber">MOBILE NUMBER</label>    
                            </div>
                        </div>
                    </div>
                    <!--ACCOUNT CREDENTIALS-->
                    <div class="row mb-2 headerTitle">
                        <div class="col-md-12">
                            <center>
                                <h4> Account Credentials </h4>
                            </center>
                        </div>    
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="uName" name="uName" placeholder="User Name" required>
                                <label class="form-label" for="uName">USERNAME</label>
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="email" required>
                                <label class="form-label" for="email">E-MAIL ADDRESS</label>    
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Password" required>
                                <label class="form-label" for="psswrd">PASSWORD</label>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Pasword" required>
                                <label class="form-label" for="confirmPassword">CONFIRM PASSWORD</label>
                            </div>
                        </div>
                    </div>
                    <!--BUTTON-->               
                    <center>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <button type="submit" name="btnRegisterHead" onClick="checkValidation()" class="btn btn-danger btn-block btn-large">Register</button>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </section>
    </body>
</html>