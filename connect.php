<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "quiz_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}


