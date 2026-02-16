<?php
$numbers = [1, 2, 3, 4, 5]; 
$numbers2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 19];

// Sum using foreach loop
echo "Sum array using foreach loop<br>";
$sumForeach = 0;
foreach ($numbers as $num) {
    $sumForeach += $num;
}
echo $sumForeach . "<br>";

// Sum using for loop
echo "Sum array using for loop<br>";
$sumFor = 0;
for ($i = 0; $i < count($numbers2); $i++) {
    $sumFor += $numbers2[$i];
}
echo $sumFor;
?>