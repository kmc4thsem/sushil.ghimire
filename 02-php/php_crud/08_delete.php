<?php
require "config/database.php";

// ============================================
// 08 - DELETE STUDENT
// ============================================


// Get student ID
echo "Enter student ID to delete: ";
$id = trim(fgets(STDIN));


// Check whether student exists
$sql = "SELECT * FROM students WHERE id = $id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn) . PHP_EOL);
}


if (mysqli_num_rows($result) == 0) {

    echo "Student not found." . PHP_EOL;

} else {

    $student = mysqli_fetch_assoc($result);

    echo PHP_EOL;
    echo "Student found:" . PHP_EOL;

    echo "ID     : " . $student["id"] . PHP_EOL;
    echo "Name   : " . $student["name"] . PHP_EOL;
    echo "Email  : " . $student["email"] . PHP_EOL;

    echo PHP_EOL;

    echo "Are you sure you want to delete this student? (yes/no): ";
    $confirm = trim(fgets(STDIN));


    if (strtolower($confirm) == "yes") {

        // DELETE query
        $sql = "DELETE FROM students WHERE id = $id";

        if (mysqli_query($conn, $sql)) {

            echo "Student deleted successfully!" . PHP_EOL;

        } else {

            echo "Delete failed: " . mysqli_error($conn) . PHP_EOL;
        }

    } else {

        echo "Delete cancelled." . PHP_EOL;
    }
}


// Close connection
mysqli_close($conn);