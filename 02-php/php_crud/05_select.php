<?php
require "config/database.php";

// ============================================
// 05 - SELECT ALL STUDENTS
// ============================================

// SELECT query
$sql = "SELECT * FROM students";


// Execute query
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn) . PHP_EOL);
}


// Check if records exist
if (mysqli_num_rows($result) == 0) {

    echo "No students found." . PHP_EOL;

} else {

    echo "========== STUDENT LIST ==========" . PHP_EOL;

    while ($row = mysqli_fetch_assoc($result)) {

        echo "----------------------------------" . PHP_EOL;

        echo "ID     : " . $row["id"] . PHP_EOL;
        echo "Name   : " . $row["name"] . PHP_EOL;
        echo "Email  : " . $row["email"] . PHP_EOL;
        echo "Age    : " . $row["age"] . PHP_EOL;
        echo "Course : " . $row["course"] . PHP_EOL;
    }

    echo "----------------------------------" . PHP_EOL;
}


// Close connection
mysqli_close($conn);