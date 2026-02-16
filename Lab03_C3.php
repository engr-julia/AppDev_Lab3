<?php
// 1. Create an array of students
$students = [
    ['name' => 'John', 'grades' => [85, 90, 92, 88]],
    ['name' => 'Jane', 'grades' => [95, 88, 91, 87]],
    ['name' => 'Joe',  'grades' => [75, 82, 79, 88]]
];

echo "Average Grade<br>";

// 2. Iterate over the students array
foreach ($students as $student) {
    $name = $student['name'];
    $grades = $student['grades'];
    
    // 3. Calculate the average
    $total = array_sum($grades);
    $count = count($grades);
    $average = $total / $count;
    
    echo "$name: Average Grade = $average<br>";
}
?>