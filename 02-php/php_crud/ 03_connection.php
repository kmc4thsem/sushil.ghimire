<?php

// ============================================
// 03 - DATABASE CONNECTION
// ============================================

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "student_db";


// Connect to MySQL
$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $dbName
);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . PHP_EOL);
}


echo "Database connection successful!" . PHP_EOL;


// Close connection
mysqli_close($conn);