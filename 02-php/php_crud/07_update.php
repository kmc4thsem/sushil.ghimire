<?php
require "config/database.php";

// ============================================
// 07 - UPDATE STUDENT
// ============================================

// Get student ID
echo "Enter student ID to update: ";
$id = trim(fgets(STDIN));


// Check whether student exists
$sql = "SELECT * FROM students WHERE id = $id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn) . PHP_EOL);
}


if (mysqli_num_rows($result) == 0) {

    echo "Student not found." . PHP_EOL;
    mysqli_close($conn);
    exit;

}


// Display existing student
$student = mysqli_fetch_assoc($result);

echo PHP_EOL;
echo "Current student information:" . PHP_EOL;

echo "Name   : " . $student["name"] . PHP_EOL;
echo "Email  : " . $student["email"] . PHP_EOL;
echo "Age    : " . $student["age"] . PHP_EOL;
echo "Course : " . $student["course"] . PHP_EOL;

echo PHP_EOL;


// Get new information
echo "Enter new name: ";
$name = trim(fgets(STDIN));

echo "Enter new email: ";
$email = trim(fgets(STDIN));

echo "Enter new age: ";
$age = trim(fgets(STDIN));

echo "Enter new course: ";
$course = trim(fgets(STDIN));


// Escape strings
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$course = mysqli_real_escape_string($conn, $course);


// UPDATE query
$sql = "
    UPDATE students
    SET
        name = '$name',
        email = '$email',
        age = $age,
        course = '$course'
    WHERE id = $id
";


// Execute query
if (mysqli_query($conn, $sql)) {

    echo PHP_EOL;
    echo "Student updated successfully!" . PHP_EOL;

} else {

    echo "Update failed: " . mysqli_error($conn) . PHP_EOL;
}


// Close connection
mysqli_close($conn);