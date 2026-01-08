<?php
$array = [1,2,3,4,5,6,7,8,9];
// Pass array by value to a function and modify array inside a function
function passByValue($array){
    $before = memory_get_usage();
    $array[] = 10;
    $after = memory_get_usage();
    echo 'passByValue inside before: '.$before.' bytes'."\n";
    echo 'passByValue inside after: '.$after.' bytes'."\n";
    echo 'passByValue inside delta: '.($after - $before).' bytes'."\n";
}

// Pass array by reference to a function 
function passByReference(&$array){
    // Appends the integer 10 to the array that was passed by reference
    $before = memory_get_usage();
    $array[] = 10;
    $after = memory_get_usage();
    echo 'passByReference inside before: '.$before.' bytes'."\n";
    echo 'passByReference inside after: '.$after.' bytes'."\n";
    echo 'passByReference inside delta: '.($after - $before).' bytes'."\n";
}

$test1 = [1,2,3,4,5,6,7,8,9];
$before1 = memory_get_usage();
passByValue($test1);
$after1 = memory_get_usage();
echo 'passByValue outside before: '.$before1.' bytes'."\n";
echo 'passByValue outside after: '.$after1.' bytes'."\n";
echo 'passByValue outside delta: '.($after1 - $before1).' bytes'."\n";

$test2 = [1,2,3,4,5,6,7,8,9];
$before2 = memory_get_usage();
passByReference($test2);
$after2 = memory_get_usage();
echo 'passByReference outside before: '.$before2.' bytes'."\n";
echo 'passByReference outside after: '.$after2.' bytes'."\n";
echo 'passByReference outside delta: '.($after2 - $before2).' bytes'."\n";