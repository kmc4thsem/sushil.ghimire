<?php
require "config/database.php";
// ============================================
// 04 - INSERT STUDENT
// ============================================

// Get student information
echo "========== ADD STUDENT ==========" . PHP_EOL;

echo "Enter name: ";
$name = trim(fgets(STDIN));

echo "Enter email: ";
$email = trim(fgets(STDIN));

echo "Enter age: ";
$age = trim(fgets(STDIN));

echo "Enter course: ";
$course = trim(fgets(STDIN));


// Escape string values
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$course = mysqli_real_escape_string($conn, $course);


// Create INSERT query
$sql = "
    INSERT INTO students (name, email, age, course)
    VALUES ('$name', '$email', $age, '$course')
";


// Execute query
if (mysqli_query($conn, $sql)) {

    echo PHP_EOL;
    echo "Student inserted successfully!" . PHP_EOL;
    echo "Student ID: " . mysqli_insert_id($conn) . PHP_EOL;

} else {

    echo "Error: " . mysqli_error($conn) . PHP_EOL;
}


// Close connection
mysqli_close($conn);