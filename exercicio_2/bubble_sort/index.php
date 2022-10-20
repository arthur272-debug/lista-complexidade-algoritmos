<?php

/*
    Complexidade: O(n^2)

    Percebe-se que as duas estruras de repetiçao aninhadas seguem o mesmo comportamento
    de uma progressao aritmética. Desse modo, para calcular o número de operaçoes realiadas no total,
    baste utilizar a formula de Soma do Termos de uma PA: ((n + 1)*n)/2 = (n^2 + n)/2, que ao final
    nos dará uma complexidade de O(n^2).
    
    Tempo médio de execuçao para 100000 testes realizados: 6.103515625E-8 milisegundos 
*/
function bubbleSort($array) {

    $size = count($array);

    for ($i = 0; $i < $size; $i++) {
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

$vector = [5, 2, 4, 10, 1, 3, 20, -1, -20, -5];

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