<?php 
// Linear search implementation
function linearSearch($array, $target){
    $steps = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        $steps++;
        if($array[$i] == $target){
            return 'Target found at step'. $steps.' at index '.$i. "\n";
        }
    }
    return 'Target not found'. "\n";
}


// Binary search implementation
function binarySearch($array, $target)
{
    $steps = 0;
    $low = 0;
    $high = count($array) - 1;
    while($low <= $high)
    {
        $steps++;
        $mid = (int)(($low + $high) / 2);
        if($array[$mid] == $target)
        {
            return 'Target found at step'. $steps.' at index '.$mid. "\n";
        }
        else if($array[$mid] < $target)
        {
            $low = $mid + 1;
        }
        else
        {
            $high = $mid - 1;
        }
    }
    return 'Target not found'. "\n";
}


$array = [1,2,3,4,5,6,7,8,9,10];
$target = 8;
$startTime = microtime(true);
// echo linearSearch($array, $target);
echo binarySearch($array, $target);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
//Add newline to execution time message for consistent output formatting
echo 'Execution time: '.$executionTime.'micro seconds'. "\n";

?>