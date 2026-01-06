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




?>