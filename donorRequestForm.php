<?php 
include_once("./database/connection.php");
session_start();
$id = $_SESSION['donorID'];
$fullName = $_SESSION['fullname'];
$gender = $_SESSION['gender'];
$bloodType = $_SESSION['bloodType'];
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
        <title>Request Form</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/donorRequestForm.css">
        <link rel="stylesheet" href="./assets/css/main.css">
        <script type="text/javascript" src="./assets/js/donorRequestForm.js"></script>
    </head>
    <body>
        <section>
            <div class="container mt-3">
                <form name="donorRequestForm" method="POST" action="./database/donorRequestSched.php">
                    <input type="hidden" name='donorID' value='<?php echo $id?>'>
                    <input type="hidden" name='donorFullName' value='<?php echo $id?>'>
                    <div class="row mb-4 headerTitle">
                        <div class="col-md-12">
                            <center>
                                <h1>Request Form</h1>
                                <p><?php echo $fullName?></p>
                                <p><?php echo $id?></p>
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
                                            <select class="form-control form-control-lg p-2" id="question1" name="question1" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question2" name="question2" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question3" name="question3" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question4" name="question4" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question5" name="question5" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question6" name="question6" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question7" name="question7" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question8" name="question8" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question9" name="question9" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question10" name="question10" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question11" name="question11" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question12" name="question12" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question13" name="question13" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question14" name="question14" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question15" name="question15" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question16" name="question16" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question17" name="question17" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question18" name="question18" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question19" name="question19" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question20" name="question20" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question21" name="question21" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question22" name="question22" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question23" name="question23" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question24" name="question24" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question25" name="question25" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question26" name="question26" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question27" name="question27" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question28" name="question28" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question29" name="question29" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question30" name="question30" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <input class="form-control form-control-lg" type="text" id="question31" name="question31" placeholder="question31" required>
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
                                            <select class="form-control form-control-lg p-2" id="question32" name="question32" required>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question33" name="question33" placeholder='question33'>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <input class="form-control form-control-lg" type="text" id="question34" name="question34" placeholder='question34'>
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
                                            <select class="form-control form-control-lg p-2" id="question35" name="question35" placeholder='question35'>
                                                <option value='NO ANSWER' selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <select class="form-control form-control-lg p-2" id="question36" name="question36" placeholder='question36'>
                                                <option value="NO ANSWER" selected hidden>--SELECT--</option>
                                                <option value="Oo">Oo</option>
                                                <option value="Hindi">Hindi</option>
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
                                            <input class="form-control form-control-lg" type="text" id="question37" name="question37" placeholder='question37'>
                                            <label class="form-label" for="question37">ANSWER</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BREAK-->


                    <!--BUTTON-->               
                    <center>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <button type="submit" onclick='return checkAnswer()' name="btnRequestSched" class="w-75 btn btn-primary btn-block btn-large">REQUEST SCHEDULE</button>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </section>
    </body>
</html>