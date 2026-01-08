<?php 
// Example on O(1) Direct Array access
$array = [1,2,3,4,5,6,7,8,9,10];
$target = 9;

$startTime = microtime(true);
$result = $array[$target];
echo $result;
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo 'Execution time: '.$executionTime.'micro seconds'. "\n";

// Example on o(n) Foreach or is_array()

$startTime = microtime(true);
foreach($array as $ar){
    echo $ar . "\n";
}
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo 'Execution time: '.$executionTime.'micro seconds'. "\n";

// Example on O(n^2) Nested Loop
$nestedArray = [[1,2,3],[4,5,6],[7,8,9]];
$startTime = microtime(true);
foreach($nestedArray as $ar){
    foreach($ar as $innerAr){
        echo $innerAr . "\n";
    }
}
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo 'Execution time: '.$executionTime.'micro seconds'. "\n";

// Example on O(log n) Binary Search
function binarySearch($array, $target) {
    $left = 0;
    $right = count($array) - 1;
    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);
        if ($array[$mid] == $target) {
            return $mid;
        } elseif ($array[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1;
}


?>