<?php
require "config/database.php";
// ============================================
// 02 - CREATE TABLE
// ============================================

// Create students table
$sql = "
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    course VARCHAR(100) NOT NULL
)
";


if (mysqli_query($conn, $sql)) {
    echo "Students table created successfully." . PHP_EOL;
} else {
    echo "Error creating table: " . mysqli_error($conn) . PHP_EOL;
}


// Close connection
mysqli_close($conn);