<?php
declare(strict_types=1);

// Typed Function Parameters
function greet(string $name): void
{
    echo "<h3>1. Typed Parameter</h3>";
    echo "Hello, $name <br><br>";
}

// Typed Return Value
function add(int $a, int $b): int
{
    return $a + $b;
}

// Float Type
function multiply(float $x, float $y): float
{
    return $x * $y;
}

// Boolean Type
function isAdult(int $age): bool
{
    return $age >= 18;
}

// Array Type
function showSubjects(array $subjects): void
{
    echo "<h3>5. Array Type</h3>";
    foreach ($subjects as $subject) {
        echo $subject . "<br>";
    }
    echo "<br>";
}

// Nullable Type
function showAge(?int $age): void
{
    echo "<h3>6. Nullable Type</h3>";

    if ($age === null) {
        echo "Age is not provided.<br><br>";
    } else {
        echo "Age: $age <br><br>";
    }
}

// Typed Class Properties
class Student
{
    public string $name;
    public int $age;
}

// Main Program

// String
greet("Sushil");

// Integer Return
echo "<h3>2. Integer Return Type</h3>";
echo "Sum = " . add(10, 20);
echo "<br><br>";

// Float
echo "<h3>3. Float Type</h3>";
echo "Multiplication = " . multiply(5.5, 2);
echo "<br><br>";

// Boolean
echo "<h3>4. Boolean Type</h3>";
echo isAdult(20) ? "Adult" : "Not Adult";
echo "<br><br>";

// Array
$subjects = ["PHP", "JavaScript", "HTML", "CSS"];
showSubjects($subjects);

// Nullable
showAge(22);
showAge(null);

// Object with Typed Properties
echo "<h3>7. Typed Class Properties</h3>";

$student = new Student();
$student->name = "Ram";
$student->age = 21;

echo "Name: " . $student->name . "<br>";
echo "Age: " . $student->age . "<br>";
?>