<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = '';
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

$createDB = "CREATE DATABASE IF NOT EXISTS bloodDB;";
mysqli_query($conn, $createDB);
mysqli_select_db($conn, "bloodDB");

$createDonorTable = "CREATE TABLE IF NOT EXISTS `donortable`(
    `donorID` TEXT,
    `firstName` TEXT,
    `middleName` TEXT,
    `lastName` TEXT,
    `age` VARCHAR(3),
    `gender` TEXT,
    `donationDate` DATE,
    `donationTime` TEXT,
    `donorAddress` TEXT,
    `bloodType` TEXT,
    `contactNumber` VARCHAR(11),
    `donationVenue` TEXT
);";

mysqli_query($conn, $createDonorTable);

?>