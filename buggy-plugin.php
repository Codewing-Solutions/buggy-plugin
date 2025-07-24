<?php

// Fixed and refactored grading function
function printGrade($marks = null) {
    // Validate input: ensure $marks is numeric and within 0-100
    if (!is_numeric($marks) || $marks < 0 || $marks > 100) {
        echo "Invalid Marks<br>";
    } else if ($marks >= 90 && $marks <= 100) {
        echo "Grade: A<br>";
    } else if ($marks >= 80 && $marks < 90) {
        echo "Grade: B<br>";
    } else if ($marks >= 70 && $marks < 80) {
        echo "Grade: C<br>";
    } else if ($marks >= 60 && $marks < 70) {
        echo "Grade: D<br>";
    } else if ($marks < 60) {
        echo "Grade: F<br>";
    }
}

$students = [
    ["name" => "Alice", "score" => 92],
    ["name" => "Bob", "score" => 85],
    ["name" => "Charlie", "score" => 55],
    ["name" => "David", "score" => 103], // invalid score
    ["name" => "Eve", "score" => null], // null score
    ["name" => "Frank"] // missing score key
];

foreach ($students as $student) {
    echo "Student: " . $student["name"] . "<br>";

    // Use null coalescing operator to provide default value if score missing
    $score = $student["score"] ?? null;

    printGrade($score);
    echo "------------------<br>";
}

