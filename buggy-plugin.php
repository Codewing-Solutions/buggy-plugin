// Function to print the grade based on the marks provided
// Accepts one parameter: marks (default is null)
// Handles validation for missing, non-numeric, or out-of-range marks
function printGrade($marks = null) {
    // Check if marks is a valid number
    if (!is_numeric($marks)) {
        // If marks is missing or not a number, print N/A
        echo "Grade: N/A (Invalid or missing marks)\n";
        return;
    }
    // Check if marks is within the valid range (0 to 100)
    if ($marks < 0 || $marks > 100) {
        // If marks are out of range, print invalid
        echo "Invalid Marks\n";
    } elseif ($marks >= 90) {
        // 90 to 100: Grade A
        echo "Grade: A\n";
    } elseif ($marks >= 80) {
        // 80 to 89: Grade B
        echo "Grade: B\n";
    } elseif ($marks >= 70) {
        // 70 to 79: Grade C
        echo "Grade: C\n";
    } elseif ($marks >= 60) {
        // 60 to 69: Grade D
        echo "Grade: D\n";
    } else {
        // Below 60: Grade F
        echo "Grade: F\n";
    }
}

// Array of students with their names and scores
// Some students may have missing or null scores
$students = [
    ["name" => "Alice", "score" => 92],
    ["name" => "Bob", "score" => 85],
    ["name" => "Charlie", "score" => 55],
    ["name" => "David", "score" => 103], // Out-of-range score
    ["name" => "Eve", "score" => null],   // Null score
    ["name" => "Frank"]                   // Missing score
];

// Iterate over each student in the array
foreach ($students as $student) {
    // Get the student's name, or use 'Unknown' if not set
    $name = isset($student["name"]) ? $student["name"] : "Unknown";
    // Get the student's score, or use null if not set
    $score = isset($student["score"]) ? $student["score"] : null;
    // Print the student's name
    echo "Student: $name\n";
    // Print the student's grade using the printGrade function
    printGrade($score);
    // Print a separator for readability
    echo "------------------\n";
}
