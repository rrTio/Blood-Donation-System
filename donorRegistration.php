<?php 
include_once("./database/connection.php");
$id = date("Y") . "-" . "03" . substr(hexdec(uniqid()), 12) . date("s");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" http-equiv="Content-Type">
    <title>Student Registration Form</title>  
    <link rel="icon" href="./assets/images/logo.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/donorRegistration.css">
</head>
<body>
    <section>
            <div class="container mt-5">
                <form method="POST" action="./database/database.php" enctype="multipart/form-data">
                    <input type="hidden" name='studentId' value='<?php echo $id?>'>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h1>Donor  Registration Form</h1>
                            <h4>Basic Information</h4>
                            <h6>ID: <?php echo $id?></h4>
                        </div>
                    </div>
                    <div class="row">
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
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-control form-control-lg p-2 pt-3" id="bMonth" name="bMonth" required>
                                            <option selected disabled>--SELECT--</option>
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
                                        <label class="form-label" for="bMonth">BIRTH MONTH</label>    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <select class="form-control form-control-lg p-2 pt-3" id="bDay" name="bDay" required>
                                            <option selected disabled>--SELECT--</option>
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
                                        <label class="form-label" for="bDay">BIRTH DAY</label>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg" type="number" id="bYear" name="birthYear" placeholder="Birth Year" required>
                                        <label class="form-label" for="bYear">BIRTH YEAR</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-control form-control-lg p-2 pt-3" id="gender" name="gender" required>
                                    <option selected disabled>--SELECT--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label class="form-label" for="gender">GENDER</label>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-control form-control-lg p-2 pt-3" id="cStatus" name="cStatus" required>
                                    <option selected disabled>--SELECT--</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Separated">Separated</option>
                                </select>
                                <label class="form-label" for="cStatus">CIVIL STATUS</label>    
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h4>
                                Contact Information
                            </h4>
                        </div>    
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" rows="3" type="text" id="cityAdd" name="cityAdd" placeholder="cityAdd" required>
                                <label for="cityAdd">CITY ADDRESS</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="number" id="mobileNumber" name="mobileNumber" placeholder="mobileNumber" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                                <label class="form-label" for="mobileNumber">MOBILE NUMBER</label>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control form-control-lg" type="number" id="homeNumber" name="homeNumber" placeholder="mobileNumber" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                                <label class="form-label" for="mobileNumber">HOME NUMBER</label>    
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h4>
                                Account Credentials
                            </h4>
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
                                <label class="form-label" for="cPsswrd">CONFIRM PASSWORD</label>
                            </div>
                        </div>
                    </div>                    
                    <center>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <button type="submit" name="btnRegisterStudent" onClick="checkValidation()" class="btn btn-primary btn-block btn-large">Register</button>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </section>
    </body>
</html>