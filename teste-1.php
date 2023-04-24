<?php

function customSort($arr, $n) {
    // conta a frequência de cada valor no array
    $freq = array_count_values($arr);

    // ordena os valores com base na frequência e no valor
    usort($arr, function($a, $b) use ($freq) {
        // se a frequência dos valores for diferente, ordene pela frequência
        if ($freq[$a] != $freq[$b]) {
            return $freq[$a] - $freq[$b];
        }

        // se a frequência dos valores for a mesma, ordene pelo valor em si
        return $a - $b;
    });

    return $arr;
}


// Teste com os dados fornecidos
$arr1 = array(3, 1, 2, 2, 4);
$result1 = customSort($arr1, 5);
print_r($result1); // resultado esperado array(1, 3, 4, 2, 2)

$arr2 = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4);
$result2 = customSort($arr2, 10);
print_r($result2);// resultado esperado array(8, 4, 4, 1, 1, 1, 5, 5, 5, 5)

$arr3 = array(1, 2, 3, 7, 1, 8, 2);
$result3 = customSort($arr3, 7);
print_r($result3);// resultado esperado array(3, 7, 8, 1, 1, 2, 2)
