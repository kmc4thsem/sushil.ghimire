<?php
require "config/database.php";

// ============================================
// 06 - SELECT ONE STUDENT
// ============================================


// Get student ID
echo "Enter student ID: ";
$id = trim(fgets(STDIN));


// SELECT query
$sql = "SELECT * FROM students WHERE id = $id";


// Execute query
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn) . PHP_EOL);
}


// Check student
if (mysqli_num_rows($result) == 0) {

    echo "Student not found." . PHP_EOL;

} else {

    $student = mysqli_fetch_assoc($result);

    echo PHP_EOL;
    echo "========== STUDENT ==========" . PHP_EOL;

    echo "ID     : " . $student["id"] . PHP_EOL;
    echo "Name   : " . $student["name"] . PHP_EOL;
    echo "Email  : " . $student["email"] . PHP_EOL;
    echo "Age    : " . $student["age"] . PHP_EOL;
    echo "Course : " . $student["course"] . PHP_EOL;
}


// Close connection
mysqli_close($conn);