<?php

// Create an array of student marks
$marks = array(60, 78, 74, 85, 96);

// Calculate the total marks obtained by the student
$total_marks = 0;
foreach ($marks as $mark) {
    $total_marks += $mark;
}

// Calculate the percentage of marks obtained by the student
$percentage = $total_marks / 500 * 100;

// Print the total marks obtained by the student and the percentage of marks obtained by the student
echo "Total marks obtained: $total_marks";
echo "<br>";
echo "Percentage of marks obtained: $percentage";

?>
