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
    `donationText` TEXT,
    `donationDate` DATE,
    `donationTime` TEXT,
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
    `donorAddress` TEXT,
    `gender` TEXT,
    `venue` TEXT
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

mysqli_query($conn, $insertBloodTypes);
mysqli_query($conn, $insertOrganization);
mysqli_query($conn, $insertPosition);
mysqli_query($conn, $insertMonths);
mysqli_query($conn, $insertDays);
?>