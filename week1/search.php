<?php 
// Linear search implementation
function linearSearch($array, $target){
    $steps = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        $steps++;
        if($array[$i] == $target){
            return 'Target found at step'. $steps.' at index '.$i;
        }
    }
    return 'Target not found';
}

$array = [1,2,3,4,5,6,7,8,9,10];
$target = 5;
$startTime = microtime(true);
echo linearSearch($array, $target);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo 'Execution time: '.$executionTime.'micro seconds';
?>