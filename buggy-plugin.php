<?php

function printGrade($marks)
{
    if (!is_numeric($marks)) {
        echo "Grade: Invalid Marks\n";
        return;
    }

    if ($marks < 0 || $marks > 100) {
        echo "Grade: Invalid Marks\n";
    } elseif ($marks >= 90) {
        echo "Grade: A\n";
    } elseif ($marks >= 80) {
        echo "Grade: B\n";
    } elseif ($marks >= 70) {
        echo "Grade: C\n";
    } elseif ($marks >= 60) {
        echo "Grade: D\n";
    } else {
        echo "Grade: F\n";
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
    $name = $student["name"] ?? "Unknown";
    $score = $student["score"] ?? null;

    echo "Student: $name\n";
    printGrade($score);
    echo "------------------\n";
}


