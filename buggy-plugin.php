<?php
function printGrade($marks) {
    if ($marks === null || !is_numeric($marks)) {
        echo "Invalid Marks\n";
    } else if ($marks >= 90 && $marks <= 100) {
        echo "Grade: A\n";
    } else if ($marks >= 80 && $marks < 90) {
        echo "Grade: B\n";
    } else if ($marks >= 70 && $marks < 80) {
        echo "Grade: C\n";
    } else if ($marks >= 60 && $marks < 70) {
        echo "Grade: D\n";
    } else if ($marks < 60) {
        echo "Grade: F\n";
    } else {
        echo "Invalid Marks\n";
    }
}

$students = [
    ["name" => "Alice", "score" => 92],
    ["name" => "Bob", "score" => 85],
    ["name" => "Charlie", "score" => 55],
    ["name" => "David", "score" => 103],
    ["name" => "Eve", "score" => null],
    ["name" => "Frank"]
];

foreach ($students as $student) {
    echo "Student: " . $student["name"] . "\n";
    // Use null coalescing operator to avoid undefined index notice
    printGrade($student["score"] ?? null);
    echo "------------------\n";
}
?>