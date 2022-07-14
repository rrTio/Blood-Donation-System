<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = '';
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

$createDB = "CREATE DATABASE IF NOT EXISTS bloodDB;";
mysqli_query($conn, $createDB);
mysqli_select_db($conn, "bloodDB");

$createHeadTable = "CREATE TABLE IF NOT EXISTS `headtable`(
    `headID` TEXT,
    `firstName` TEXT,
    `middleName` TEXT,
    `lastName` TEXT,
    `fullName` TEXT,
    `headAddress` TEXT,
    `contactNumber` TEXT,
    `headPosition` TEXT,
    `organization` TEXT,
    `email` TEXT,
    `userName` TEXT,
    `headPassword` TEXT
);";

$createDonorTable = "CREATE TABLE IF NOT EXISTS `donortable`(
    `donorID` TEXT,
    `firstName` TEXT,
    `middleName` TEXT,
    `lastName` TEXT,
    `fullName` TEXT,
    `birthMonth` VARCHAR(3),
    `birthDay` VARCHAR(2),
    `birthYear` VARCHAR(4),
    `age` VARCHAR(3),
    `gender` TEXT,
    `donorAddress` TEXT,
    `bloodType` TEXT,
    `contactNumber` VARCHAR(11),
    `donationVenue` TEXT,
    `userName` TEXT,
    `donorEmail` TEXT,
    `donorPassword` TEXT
);";

$createPatient = "CREATE TABLE IF NOT EXISTS `patientsTable`(
    `firstName` TEXT,
    `middleName` TEXT,
    `lastName` TEXT,
    `fullName` TEXT,
    `age` VARCHAR(3),
    `patientAddress` TEXT,
    `gender` TEXT
);";

$createRequestTable = "CREATE TABLE IF NOT EXISTS `requestTable`(
    `donorID` TEXT,
    `firstName` TEXT,
    `lastName` TEXT,
    `fullName` TEXT,
    `bloodType` TEXT,
    `email` TEXT,
    `contactNumber` VARCHAR(11),
    `donationText` TEXT,
    `donationDate` DATE,
    `donationTime` TEXT,
    `donorAddress` TEXT,
    `gender` TEXT,
    `venue` TEXT
);";

$createRequestFormTable = "CREATE TABLE IF NOT EXISTS `requestFormTable`(
    `donorID` TEXT,
    `fullName` TEXT,
    `question1` TEXT DEFAULT('NO ANSWER'),
    `question2` TEXT DEFAULT('NO ANSWER'),
    `question3` TEXT DEFAULT('NO ANSWER'),
    `question4` TEXT DEFAULT('NO ANSWER'),
    `question5` TEXT DEFAULT('NO ANSWER'),
    `question6` TEXT DEFAULT('NO ANSWER'),
    `question7` TEXT DEFAULT('NO ANSWER'),
    `question8` TEXT DEFAULT('NO ANSWER'),
    `question9` TEXT DEFAULT('NO ANSWER'),
    `question10` TEXT DEFAULT('NO ANSWER'),
    `question11` TEXT DEFAULT('NO ANSWER'),
    `question12` TEXT DEFAULT('NO ANSWER'),
    `question13` TEXT DEFAULT('NO ANSWER'),
    `question14` TEXT DEFAULT('NO ANSWER'),
    `question15` TEXT DEFAULT('NO ANSWER'),
    `question16` TEXT DEFAULT('NO ANSWER'),
    `question17` TEXT DEFAULT('NO ANSWER'),
    `question18` TEXT DEFAULT('NO ANSWER'),
    `question19` TEXT DEFAULT('NO ANSWER'),
    `question20` TEXT DEFAULT('NO ANSWER'),
    `question21` TEXT DEFAULT('NO ANSWER'),
    `question22` TEXT DEFAULT('NO ANSWER'),
    `question23` TEXT DEFAULT('NO ANSWER'),
    `question24` TEXT DEFAULT('NO ANSWER'),
    `question25` TEXT DEFAULT('NO ANSWER'),
    `question26` TEXT DEFAULT('NO ANSWER'),
    `question27` TEXT DEFAULT('NO ANSWER'),
    `question28` TEXT DEFAULT('NO ANSWER'),
    `question29` TEXT DEFAULT('NO ANSWER'),
    `question30` TEXT DEFAULT('NO ANSWER'),
    `question31` TEXT DEFAULT('NO ANSWER'),
    `question32` TEXT DEFAULT('NO ANSWER'),
    `question33` TEXT DEFAULT('NO ANSWER'),
    `question34` TEXT DEFAULT('NO ANSWER'),
    `question35` TEXT DEFAULT('NO ANSWER'),
    `question36` TEXT DEFAULT('NO ANSWER'),
    `question37` TEXT DEFAULT('NO ANSWER')
);";

$createBloodTypes = "CREATE TABLE IF NOT EXISTS `bloodTypesTable`(`bloodType` TEXT UNIQUE);";
$createOrganization = "CREATE TABLE IF NOT EXISTS  `organizationsTable`(`organization` TEXT UNIQUE);";
$createPositions = "CREATE TABLE IF NOT EXISTS `positionsTable`(`positions` TEXT UNIQUE);";
$createMonths = "CREATE TABLE IF NOT EXISTS `birthMonths`(`birthmonths` TEXT UNIQUE);";
$createDays = "CREATE TABLE IF NOT EXISTS `birthDays` (`birthdays` VARCHAR(2) UNIQUE);";

$insertBloodTypes = "INSERT IGNORE INTO bloodTypesTable(bloodType) VALUES ('A+'), ('A-'), ('B+'), ('B-'), ('O+'), ('O-'), ('AB+'), ('AB-');";
$insertOrganization = "INSERT IGNORE INTO organizationsTable(organization) VALUES ('Dagupan City'), ('Alaminos City'), ('San Carlos City');" ;
$insertPosition = "INSERT IGNORE INTO positionsTable(positions) VALUES ('Admin'), ('Staff');";
$insertMonths = "INSERT IGNORE INTO birthMonths (birthmonths) VALUES ('January'),('February'),('March'),('April'),('May'),('June'),('July'),('August'),('September'),('October'),('November'),('December');";
$insertDays = "INSERT IGNORE INTO birthDays (birthdays) VALUES ('01'),('02'),('03'),('04'),('05'),('06'),('07'),('08'),('09'),('10'),('11'),('12'),('13'),('14'),('15'),('16'),('17'),('18'),('19'),('20'),('21'),('22'),('23'),('24'),('25'),('26'),('27'),('28'),('29'),('30'),('31');";

mysqli_query($conn, $createHeadTable);
mysqli_query($conn, $createDonorTable);
mysqli_query($conn, $createPatient);
mysqli_query($conn, $createRequestTable);

mysqli_query($conn, $createBloodTypes);
mysqli_query($conn, $createOrganization);
mysqli_query($conn, $createPositions);
mysqli_query($conn, $createMonths);
mysqli_query($conn, $createDays);
mysqli_query($conn, $createRequestFormTable);

mysqli_query($conn, $insertBloodTypes);
mysqli_query($conn, $insertOrganization);
mysqli_query($conn, $insertPosition);
mysqli_query($conn, $insertMonths);
mysqli_query($conn, $insertDays);
?>