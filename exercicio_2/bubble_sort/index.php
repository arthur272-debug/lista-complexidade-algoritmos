<?php

function bubbleSort($array) {

    $size = count($array);

    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < $size - 1 - $i; $j++) {

            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];

                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

$vector = [5, 2, 4, 10, 1, 3, 20];

$totalTime = 0;
$executions = 100000;

while ($executions > 0) {
    $initlTime = microtime(true) * 1000;
    $sortedArray = bubbleSort($vector);
    $finishTime = microtime(true) * 1000;

    $execTime = $finishTime - $initlTime;

    $totalTime = $execTime; 

    $executions--;
}


echo "Avarage execution time: " . $totalTime/100000 . " milliseconds \n\n";

echo "Sorted array: \n";

foreach($sortedArray as $element) {
    echo $element . " ";
}