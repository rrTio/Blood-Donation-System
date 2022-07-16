<?php

include_once("connection.php");

if(isset($_POST['btnRequestSched'])){
    $donorID = $_POST['btnRequestSched'];

    $checkDB = "SELECT * FROM requestformtable WHERE donorID = '$donorID';";
    $query = mysqli_query($conn, $checkDB);
    if(mysqli_num_rows($query) > 0){
    echo '<script type="text/javascript">
            alert("REQUEST ALREADY EXISTS\nYOU CAN ONLY FILE A REQUEST ONCE");
            window.location.href = "../donorRequest.php";
        </script>';
    }
    else{
        header("Location: ../donorRequestForm.php");
    }
}

if(isset($_POST['btnSubmitRequest'])){
    $donorID = $_POST['donorID'];
    $fullName = $_POST['donorFullName'];
    $q1 = $_POST['question1'];
    $q2 = $_POST['question2'];
    $q3 = $_POST['question3'];
    $q4 = $_POST['question4'];
    $q5 = $_POST['question5'];
    $q6 = $_POST['question6'];
    $q7 = $_POST['question7'];
    $q8 = $_POST['question8'];
    $q9 = $_POST['question9'];
    $q10 = $_POST['question10'];
    $q11 = $_POST['question11'];
    $q12 = $_POST['question12'];
    $q13 = $_POST['question13'];
    $q14 = $_POST['question14'];
    $q15 = $_POST['question15'];
    $q16 = $_POST['question16'];
    $q17 = $_POST['question17'];
    $q18 = $_POST['question18'];
    $q19 = $_POST['question19'];
    $q20 = $_POST['question20'];
    $q21 = $_POST['question21'];
    $q22 = $_POST['question22'];
    $q23 = $_POST['question23'];
    $q24 = $_POST['question24'];
    $q25 = $_POST['question25'];
    $q26 = $_POST['question26'];
    $q27 = $_POST['question27'];
    $q28 = $_POST['question28'];
    $q29 = $_POST['question29'];
    $q30 = $_POST['question30'];
    $q31 = $_POST['question31'];
    $q32 = $_POST['question32'];
    $q33 = $_POST['question33'];
    $q34 = $_POST['question34'];
    $q35 = $_POST['question35'];
    $q36 = $_POST['question36'];
    $q37 = $_POST['question37'];

    $insertToRequestFormTable = "INSERT INTO requestformtable (donorID, fullName, question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, question12, question13, question14, question15, question16, question17, question18, question19, question20, question21, question22, question23, question24, question25, question26, question27, question28, question29, question30, question31, question32, question33, question34, question35, question36, question37)
                                    VALUES('$donorID','$fullName','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31','$q32','$q33','$q34','$q35','$q36','$q37');";
    mysqli_query($conn, $insertToRequestFormTable);

    $getDonorInfo = "SELECT * FROM donortable WHERE donorID = '$donorID';";
        $query = mysqli_query($conn, $getDonorInfo);
        if(mysqli_num_rows($query) >0){
            while($donorInfo = mysqli_fetch_assoc($query)){
                $id = $donorInfo['donorID'];
                $fullName = $donorInfo['fullName'];
                $email = $donorInfo['donorEmail'];
                $contact = $donorInfo['contactNumber'];
                $gender = $donorInfo['gender'];
                $bloodType = $donorInfo['bloodType'];
            }
        }
        $insertRequestTable = "INSERT INTO requesttable (donorID, fullName, email, contactNumber, gender, bloodType) 
                                VALUES ('$donorID', '$fullName', '$email', '$contact', '$gender', '$bloodType');";
        mysqli_query($conn, $insertRequestTable);
        
    header("Location: ../donorRequest.php");
}

?>