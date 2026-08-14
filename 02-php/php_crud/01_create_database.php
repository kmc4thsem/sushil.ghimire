<?php
require "config/database.php";
// ============================================
// 01 - CREATE DATABASE
// ============================================

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS student_db";

if (mysqli_query($conn, $sql)) {
    echo "Database 'student_db' created successfully." . PHP_EOL;
} else {
    echo "Error creating database: " . mysqli_error($conn) . PHP_EOL;
}


// Close connection
mysqli_close($conn);