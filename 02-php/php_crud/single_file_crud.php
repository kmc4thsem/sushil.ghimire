<?php

// ============================================================
// STUDENT CRUD USING MYSQLI
// Single File Console Application
// ============================================================

// ------------------------------------------------------------
// 1. DATABASE CONNECTION SETTINGS
// ------------------------------------------------------------

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "student_db";

// ------------------------------------------------------------
// 2. CONNECT TO MYSQL SERVER
// ------------------------------------------------------------

$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error() . PHP_EOL);
}

echo "Connected to MySQL successfully." . PHP_EOL;


// ------------------------------------------------------------
// 3. CREATE DATABASE IF IT DOES NOT EXIST
// ------------------------------------------------------------

$sql = "CREATE DATABASE IF NOT EXISTS `$dbName`";

if (mysqli_query($conn, $sql)) {
    echo "Database '$dbName' is ready." . PHP_EOL;
} else {
    die("Database creation failed: " . mysqli_error($conn) . PHP_EOL);
}


// ------------------------------------------------------------
// 4. SELECT DATABASE
// ------------------------------------------------------------

if (!mysqli_select_db($conn, $dbName)) {
    die("Could not select database: " . mysqli_error($conn) . PHP_EOL);
}


// ------------------------------------------------------------
// 5. CREATE STUDENTS TABLE
// ------------------------------------------------------------

$sql = "
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    course VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Students table is ready." . PHP_EOL;
} else {
    die("Table creation failed: " . mysqli_error($conn) . PHP_EOL);
}


// ============================================================
// FUNCTIONS
// ============================================================

// ------------------------------------------------------------
// READ USER INPUT
// ------------------------------------------------------------

function input($message)
{
    echo $message;
    return trim(fgets(STDIN));
}


// ------------------------------------------------------------
// CREATE STUDENT
// ------------------------------------------------------------

function createStudent($conn)
{
    echo PHP_EOL;
    echo "========== CREATE STUDENT ==========" . PHP_EOL;

    $name = input("Enter name: ");
    $email = input("Enter email: ");
    $age = input("Enter age: ");
    $course = input("Enter course: ");
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $course = mysqli_real_escape_string($conn, $course);

    $sql = "
        INSERT INTO students (name, email, age, course)
        VALUES ('$name', '$email', $age, '$course')
    ";

    if (mysqli_query($conn, $sql)) {
        echo "Student created successfully!" . PHP_EOL;
    } else {
        echo "Error: " . mysqli_error($conn) . PHP_EOL;
    }
}


// ------------------------------------------------------------
// READ ALL STUDENTS
// ------------------------------------------------------------

function readStudents($conn)
{
    echo PHP_EOL;
    echo "========== STUDENT LIST ==========" . PHP_EOL;

    $sql = "SELECT * FROM students";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn) . PHP_EOL;
        return;
    }

    if (mysqli_num_rows($result) == 0) {
        echo "No students found." . PHP_EOL;
        return;
    }

    while ($row = mysqli_fetch_assoc($result)) {

        echo "---------------------------------" . PHP_EOL;
        echo "ID     : " . $row["id"] . PHP_EOL;
        echo "Name   : " . $row["name"] . PHP_EOL;
        echo "Email  : " . $row["email"] . PHP_EOL;
        echo "Age    : " . $row["age"] . PHP_EOL;
        echo "Course : " . $row["course"] . PHP_EOL;
    }

    echo "---------------------------------" . PHP_EOL;
}


// ------------------------------------------------------------
// READ ONE STUDENT
// ------------------------------------------------------------

function readStudent($conn)
{
    echo PHP_EOL;
    echo "========== FIND STUDENT ==========" . PHP_EOL;

    $id = input("Enter student ID: ");

    $sql = "SELECT * FROM students WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn) . PHP_EOL;
        return;
    }

    if (mysqli_num_rows($result) == 0) {
        echo "Student not found." . PHP_EOL;
        return;
    }

    $student = mysqli_fetch_assoc($result);

    echo "---------------------------------" . PHP_EOL;
    echo "ID     : " . $student["id"] . PHP_EOL;
    echo "Name   : " . $student["name"] . PHP_EOL;
    echo "Email  : " . $student["email"] . PHP_EOL;
    echo "Age    : " . $student["age"] . PHP_EOL;
    echo "Course : " . $student["course"] . PHP_EOL;
    echo "---------------------------------" . PHP_EOL;
}


// ------------------------------------------------------------
// UPDATE STUDENT
// ------------------------------------------------------------

function updateStudent($conn)
{
    echo PHP_EOL;
    echo "========== UPDATE STUDENT ==========" . PHP_EOL;

    $id = input("Enter student ID: ");

    // Check if student exists
    $checkSql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $checkSql);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Student not found." . PHP_EOL;
        return;
    }

    $student = mysqli_fetch_assoc($result);

    echo "Current Name   : " . $student["name"] . PHP_EOL;
    echo "Current Email  : " . $student["email"] . PHP_EOL;
    echo "Current Age    : " . $student["age"] . PHP_EOL;
    echo "Current Course : " . $student["course"] . PHP_EOL;

    echo PHP_EOL;

    $name = input("Enter new name: ");
    $email = input("Enter new email: ");
    $age = input("Enter new age: ");
    $course = input("Enter new course: ");

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $course = mysqli_real_escape_string($conn, $course);

    $sql = "
        UPDATE students
        SET
            name = '$name',
            email = '$email',
            age = $age,
            course = '$course'
        WHERE id = $id
    ";

    if (mysqli_query($conn, $sql)) {
        echo "Student updated successfully!" . PHP_EOL;
    } else {
        echo "Error: " . mysqli_error($conn) . PHP_EOL;
    }
}


// ------------------------------------------------------------
// DELETE STUDENT
// ------------------------------------------------------------

function deleteStudent($conn)
{
    echo PHP_EOL;
    echo "========== DELETE STUDENT ==========" . PHP_EOL;

    $id = input("Enter student ID: ");

    // Check if student exists
    $checkSql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $checkSql);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Student not found." . PHP_EOL;
        return;
    }

    $student = mysqli_fetch_assoc($result);

    echo "Student: " . $student["name"] . PHP_EOL;

    $confirm = input("Are you sure? (yes/no): ");

    if (strtolower($confirm) !== "yes") {
        echo "Delete cancelled." . PHP_EOL;
        return;
    }

    $sql = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Student deleted successfully!" . PHP_EOL;
    } else {
        echo "Error: " . mysqli_error($conn) . PHP_EOL;
    }
}


// ============================================================
// MAIN MENU
// ============================================================

while (true) {

    echo PHP_EOL;
    echo "========================================" . PHP_EOL;
    echo "       STUDENT MANAGEMENT SYSTEM" . PHP_EOL;
    echo "========================================" . PHP_EOL;
    echo "1. Create Student" . PHP_EOL;
    echo "2. View All Students" . PHP_EOL;
    echo "3. Find Student" . PHP_EOL;
    echo "4. Update Student" . PHP_EOL;
    echo "5. Delete Student" . PHP_EOL;
    echo "6. Exit" . PHP_EOL;
    echo "========================================" . PHP_EOL;

    $choice = input("Enter your choice: ");

    switch ($choice) {

        case "1":
            createStudent($conn);
            break;

        case "2":
            readStudents($conn);
            break;

        case "3":
            readStudent($conn);
            break;

        case "4":
            updateStudent($conn);
            break;

        case "5":
            deleteStudent($conn);
            break;

        case "6":
            echo "Goodbye!" . PHP_EOL;
            mysqli_close($conn);
            exit;

        default:
            echo "Invalid choice. Please try again." . PHP_EOL;
    }
}