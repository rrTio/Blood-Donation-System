<?php 
include_once("./database/connection.php");
$subject = 'REQUEST FOR DONATION SCHEDULE';
$message = 'WE ARE SORRY FOR THE INCONVENIENCE, YOUR REQUEST FOR DONATION HAS BEEN DENIED.%0D%0A%0D%0A%0D%0AYOURS TRULY,%0D%0ASYSTEM ADMIN';

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

    </head>
    <body>
        <section>
            <div class="container mt-3">
                <form method="POST" action="./database/headApproval.php">
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

                            $getAnswers = "SELECT * FROM requestformtable WHERE donorID = '$donorID';";
                            $answers = mysqli_query($conn, $getAnswers);
                            if(mysqli_num_rows($answers) > 0){
                                while($viewAnswers = mysqli_fetch_assoc($answers)){
                                    $q1 = $viewAnswers['question1'];
                                    $q2 = $viewAnswers['question2'];
                                    $q3 = $viewAnswers['question3'];
                                    $q4 = $viewAnswers['question4'];
                                    $q5 = $viewAnswers['question5'];
                                    $q6 = $viewAnswers['question6'];
                                    $q7 = $viewAnswers['question7'];
                                    $q8 = $viewAnswers['question8'];
                                    $q9 = $viewAnswers['question9'];
                                    $q10 = $viewAnswers['question10'];
                                    $q11 = $viewAnswers['question11'];
                                    $q12 = $viewAnswers['question12'];
                                    $q13 = $viewAnswers['question13'];
                                    $q14 = $viewAnswers['question14'];
                                    $q15 = $viewAnswers['question15'];
                                    $q16 = $viewAnswers['question16'];
                                    $q17 = $viewAnswers['question17'];
                                    $q18 = $viewAnswers['question18'];
                                    $q19 = $viewAnswers['question19'];
                                    $q20 = $viewAnswers['question20'];
                                    $q21 = $viewAnswers['question21'];
                                    $q22 = $viewAnswers['question22'];
                                    $q23 = $viewAnswers['question23'];
                                    $q24 = $viewAnswers['question24'];
                                    $q25 = $viewAnswers['question25'];
                                    $q26 = $viewAnswers['question26'];
                                    $q27 = $viewAnswers['question27'];
                                    $q28 = $viewAnswers['question28'];
                                    $q29 = $viewAnswers['question29'];
                                    $q30 = $viewAnswers['question30'];
                                    $q31 = $viewAnswers['question31'];
                                    $q32 = $viewAnswers['question32'];
                                    $q33 = $viewAnswers['question33'];
                                    $q34 = $viewAnswers['question34'];
                                    $q35 = $viewAnswers['question35'];
                                    $q36 = $viewAnswers['question36'];
                                    $q37 = $viewAnswers['question37'];
                                }
                            }
                        }

                    ?>
                    
                    <!--TWO COLUMN QUESTION-->
                    <div class="row mb-2">
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
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $donorID ?>" disabled>
                                        <input type="hidden" name='fullName' id='fullName' value='<?php echo $fullName?>'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $fullName ?>" disabled>
                                        <input type="hidden" name='donorID' value='<?php echo $donorID?>'>
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
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $birthDate ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $age ?>" disabled>
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
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $gender ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $bloodType ?>" disabled>
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
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $email ?>" disabled>
                                        <input type="hidden" name='email' id='email' value='<?php echo $email?>'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $contactNumber ?>" disabled>
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
                                        <input class="form-control form-control-lg p-2" type="text" id="answer" name="answer" value="<?php echo $address ?>" disabled>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 headerBlock">
                        <div class="col-md-12">
                            <center>
                                <h1>Donor's Request Form</h1>
                            </center>
                        </div>
                    </div>

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>1.	Maayos ba ang iyong kalusugan at pakiramdam ngayong araw?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question1" name="question1" disabled>
                                                <option <?php echo ($q1=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q1=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q1=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>2.	Nagkaroon ba ng pagkakataon na ikaw ay natanggihan o nasabing hindi maaring magbigya ng dugo?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question2" name="question2" disabled>
                                                <option <?php echo ($q2=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q2=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q2=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>3.	Magbibigay ng dugo upang masuri lamang sa HIV/AIDS o Hepatitis virus o iba pang nakakahang sakit?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question3" name="question3" disabled>
                                                <option <?php echo ($q3=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q3=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q3=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>4.	Alam mo bang ang taong may taong HIV/AIDS ay maari pa ring makawa ng virus kahit na negatibo sa HIV/AIDS /Hepatitis test?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question4" name="question4" disabled>
                                                <option <?php echo ($q4=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q4=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q4=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>5.	Sa loob ng 12 ORAS nakainom ka ba ng alak, serbesa o anumang inumang may alkohol?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question5" name="question5" disabled>
                                                <option <?php echo ($q5=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q5=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q5=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>6.	Saloob ng 3 ARAW, nakainom ka ba ng aspirin?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question6" name="question6" disabled>
                                                <option <?php echo ($q6=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q6=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q6=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>7.	Sa nakalipas na 4 NA LINGGO, nakainom ka ba ng gamot o nabakunahan?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question7" name="question7" disabled>
                                                <option <?php echo ($q7=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q7=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q7=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>8.	Sa nakalipas na 3 BUWAN, ikaw ba ay, Nakapaghandog ng dugo, platelets o plasma?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question8" name="question8" disabled>
                                                <option <?php echo ($q8=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q8=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q8=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <div class="row mb-2 mt-4">
                        <div class="col-md-12">
                            <center>
                                <h1>SA NAKALIPAS NA 12 BUWAN IKAW BA AY</h1>
                            </center>
                        </div>
                    </div>

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>9.	Nakapunta sa kahit anong lugar sa Pilipinas o ibang bansa na may ZIKA virus?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question9" name="question9" disabled>
                                                <option <?php echo ($q9=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q9=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q9=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>10.	Nakipagtalik na sa isang tao na kumpirmadong may impeksyon mula sa ZIKA virus?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question10" name="question10" disabled>
                                                <option <?php echo ($q10=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q10=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q10=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>11.	Nakipagtalik na sa isang tao na nakapunta sa kahit anong lugar sa Pilipinas o ibang bansa na may ZIKA virus?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question11" name="question11" disabled>
                                                <option <?php echo ($q11=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q11=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q11=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <div class="row mb-2 mt-4">
                        <div class="col-md-12">
                            <center>
                                <h1>SA NAKALIPAS NA 12 BUWAN IKAW BA AY:</h1>
                            </center>
                        </div>
                    </div>

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>12.	Nasalinan ng dugo dahil sa heamophilia o naoperahan at nahandugan ng bahagi ng katawan ng ibang tao?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question12" name="question12" disabled>
                                                <option <?php echo ($q12=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q12=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q12=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>13.	Sumailalim sa isang operasyong medikal o nagpanbunot ng ngipin?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question13" name="question13" disabled>
                                                <option <?php echo ($q13=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q13=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q13=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>14.	Nagpalagy ng tato, butas sa tenga o katawan, accupancture, natusok ng karayom o aksidenting nadiit sa dugo?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question14" name="question14" disabled>
                                                <option <?php echo ($q14=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q14=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q14=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>15.	Nakipagtalik sa mga taong may mataas na posibilidad na di ligtas o kaya ay kapalit ng material na bagay o pinansyal?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question15" name="question15" disabled>
                                                <option <?php echo ($q15=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q15=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q15=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>16.	Nakipagtalik sa paraang di ligtas o di protektado?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question16" name="question16" disabled>
                                                <option <?php echo ($q16=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q16=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q16=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>17.	May pagkakataon na nanilaw, nagkasakit o nakihalubilo sa may sakit sa atay?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question17" name="question17" disabled>
                                                <option <?php echo ($q17=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q17=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q17=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>18.	Nakulong o napiit sa isang kulungan?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question18" name="question18" disabled>
                                                <option <?php echo ($q18=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q18=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q18=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>19.	Nanirahan o may mga kamag anak sa United Kingdom o Europa?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question19" name="question19" disabled>
                                                <option <?php echo ($q19=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q19=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q19=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->
                    
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <div class="row mb-2 mt-4">
                        <div class="col-md-12">
                            <center>
                                <h1>IKAW BA AY:</h1>
                            </center>
                        </div>
                    </div>

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>20.	Nagbiyahe o nanirahan maliban sa kasalukuyan mong tirahan o sa labas ng Pilipinas?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question20" name="question20" disabled>
                                                <option <?php echo ($q20=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q20=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q20=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>21.	Nakagamit ng ipinagbabawal na gamot?? (uminom,lumanghap o nagturok)?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question21" name="question21" disabled>
                                                <option <?php echo ($q21=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q21=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q21=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>22.	Nakagamit ng mga gamot para sa maayos na pagpigil sa pangkaraniwang pagdurugo?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question22" name="question22" disabled>
                                                <option <?php echo ($q22=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q22=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q22=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>23.	Nagpositibo sa pagsusuri para sa HIV, Hepatitis, Syphilis o Malaria?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question23" name="question23" disabled>
                                                <option <?php echo ($q23=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q23=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q23=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>24.	Nagkaroon na ng Malaria o sakit sa atay?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question24" name="question24" disabled>
                                                <option <?php echo ($q24=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q24=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q24=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>25.	Nagkaroon o nagpagamot ng kulugo sa maseselang bahagi ng katawan, sipilis, gonorea o iba pang nakahahawang sakit mula sa pagtatalik?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question25" name="question25" disabled>
                                                <option <?php echo ($q25=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q25=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q25=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <div class="row mb-2 mt-4">
                        <div class="col-md-12">
                            <center>
                                <h1>NAGKAROON SA MGA SUMUSUNOD:</h1>
                            </center>
                        </div>
                    </div>

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>26.	Kanser,sakit sa dugo o di maipaliwanag na pagdurugo(hemophilia)?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question26" name="question26" disabled>
                                                <option <?php echo ($q26=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q26=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q26=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>27.	Sakit sa puso o pananakit ng dibdib?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question27" name="question27" disabled>
                                                <option <?php echo ($q27=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q27=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q27=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>28.	Sakit sa baga, tuberkulosiso hika?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question28" name="question28" disabled>
                                                <option <?php echo ($q28=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q28=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q28=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>29.	Sakit sa bato, diabetes o epilepsy?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question29" name="question29" disabled>
                                                <option <?php echo ($q29=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q29=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q29=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>30.	Bulutong o singaw?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question30" name="question30" disabled>
                                                <option <?php echo ($q30=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q30=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q30=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>31.	Iba pang sakit na di nabanggit o naoperahan?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input class="form-control form-control-lg" type="text" id="question31" name="question31" value='<?php echo $q31 ?>' placeholder="question31" disabled>
                                            <label class="form-label" for="question31">ANSWER</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>32.	Nagkaroon ka ba ng pantal o niagnat? Ito ba ay kasabay ng pananakit ng kasukasuan o rayuma o pamumula ng mata?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question32" name="question32" disabled>
                                                <option <?php echo ($q32=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q32=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q32=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <div class="row mb-2 mt-4">
                        <div class="col-md-12">
                            <center>
                                <h1>PARA SA MGA BABAE LAMANG:</h1>
                            </center>
                        </div>
                    </div>

                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->
                    <!--=====================================================================================================================================-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>33.	Ikaw ba ay buntis ngayon? Nagbuntis sa kahit anong pagkakataon?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question33" name="question33" disabled>
                                                <option <?php echo ($q36=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q36=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q36=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>34.	Kailan ang huli mong panganganak?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input class="form-control form-control-lg" type="text" id="question34" name="question34" value='<?php echo $q34 ?>' placeholder="question34" disabled>
                                            <label class="form-label" for="question34">ANSWER</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>35.	Sa nakaraang 1 TAON, nakunan o nagpalaglag ka ba?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question35" name="question35" disabled>
                                                <option <?php echo ($q35=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q35=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q35=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>36.	Ikaw ba ay nagpapasuso ng bata ngayon?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-control form-control-lg p-2" id="question36" name="question36" disabled>
                                                <option <?php echo ($q36=='NO ANSWER')?('selected'):(''); ?>>NO ANSWER</option>
                                                <option <?php echo ($q36=='Oo')?('selected'):(''); ?>>Oo</option>
                                                <option <?php echo ($q36=='Hindi')?('selected'):(''); ?>>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->

                    <!--QUESTION-->
                    <div class="q1">
                        <div class="row mt-2">
                            <h4>37.	Kalian ang huli mong buwanang dalaw(regla)?</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input class="form-control form-control-lg" type="text" id="question37" name="question37" value='<?php echo $q37 ?>' placeholder="question37" disabled>
                                            <label class="form-label" for="question37">ANSWER</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->
                    <?php
                        $subject = '&su=REQUEST FOR DONATION SCHEDULE';
                        $receiver = '&to='.$email;
                        $message = '&body=DEAR '.$fullName.',%0D%0AWE ARE SORRY FOR THE INCONVENIENCE, YOUR REQUEST FOR DONATION HAS BEEN DENIED.%0D%0A%0D%0A%0D%0AYOURS TRULY,%0D%0ASYSTEM ADMIN';
                        $link = "https://mail.google.com/mail/?view=cm&fs=1";
                        $url = $link.$subject.$message.$receiver;
                    ?>
                    <!--BUTTON-->               
                    <center>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <button type="submit" name="btnApproved" class="btnApprove btn-success btn-lg btn-block text-dark">Approve</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" onclick="window.open('<?php echo $url?>', '_blank');" name="btnDenied" class="btnDeny btn-danger btn-lg btn-block text-dark">Deny</but>
                                </div>
                            </div>
                    </center>
                </form>
            </div>
        </section>        
    </body>
</html>