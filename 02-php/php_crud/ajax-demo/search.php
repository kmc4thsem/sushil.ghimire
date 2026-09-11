<?php
require "../config/database.php";


$query = $_GET['q'] ?? '';

$stmt = mysqli_prepare($conn, "SELECT * FROM students WHERE name LIKE ?");
$likeQuery = "%" . $query . "%";
mysqli_stmt_bind_param($stmt, "s", $likeQuery);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// if (mysqli_num_rows($result) > 0) {
//     echo "<table border='1' cellpadding='5'>";
//     echo "<tr><th>ID</th><th>Name</th><th>Course</th></tr>";
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['course']}</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "No matching students found.";
// }
$students = [];
while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}
header("Content-Type: application/json");
echo json_encode($students);

mysqli_close($conn);
