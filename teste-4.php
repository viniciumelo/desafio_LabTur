<?php

function maior_valor_final_lista($n, $operacoes) {
    $lista = array_fill(1, $n, 0);
    foreach ($operacoes as $op) {
        for ($i = $op[0]; $i <= $op[1]; $i++) {
            $lista[$i] += $op[2];
        }
    }
    return max($lista);
}

// Caso de teste 01
$lista = 5;
$operacoes = array(
    array(1, 2, 100),
    array(2, 5, 100),
    array(3, 4, 100),
);
echo maior_valor_final_lista($lista, $operacoes); // Saída: 200
echo "\t";
// Caso de teste 02
$lista = 4;
$operacoes = array(
    array(2, 3, 603),
    array(1, 1, 286),
    array(4, 4, 882),
);
echo maior_valor_final_lista($lista, $operacoes); // Saída: 882
echo "\t";
// Teste 3
$lista = 40;
$operacoes = array(
    array(29, 40, 787),
    array(9, 26, 219),
    array(21, 31, 214),
    array(8, 22, 719),
    array(15, 23, 102),
    array(11, 24, 83),
    array(14, 22, 321),
    array(5, 22, 300),
    array(11, 30, 832),
    array(5, 25, 29),
    array(16, 24, 577),
    array(3, 10, 905),
    array(15, 22, 335),
    array(29, 35, 254),
    array(9, 20, 20),
    array(33, 34, 351),
    array(30, 38, 564),
    array(11, 31, 969),
    array(3, 32, 11),
    array(29, 35, 267),
    array(4, 24, 531),
    array(1, 38, 892),
    array(12, 18, 825),
    array(25, 32, 99),
    array(3, 39, 107),
    array(12, 37, 131),
    array(3, 26, 640),
    array(8, 39, 483),
    array(8, 11, 194),
    array(12, 37, 502)
);
echo maior_valor_final_lista($lista, $operacoes); // Saída: 8628;
echo "\t";
// Teste 4
$lista = 40;
$operacoes = array(
    array(19, 28, 419),
    array(4, 23, 680),
    array(5, 6, 907),
    array(19, 33, 582),
    array(5, 9, 880),
    array(10, 13, 438),
    array(21, 39, 294),
    array(13, 18, 678),
    array(12, 26, 528),
    array(15, 30, 261),
    array(8, 9, 48),
    array(21, 23, 131),
    array(20, 21, 7),
    array(13, 40, 65),
    array(13, 23, 901),
    array(15, 15, 914),
    array(14, 35, 704),
    array(20, 39, 522),
    array(10, 18, 379),
    array(16, 27, 8),
    array(25, 40, 536),
    array(5, 9, 190),
    array(17, 20, 809),
    array(8, 20, 453),
    array(22, 37, 298),
    array(19, 37, 112),
    array(2, 5, 186),
    array(21, 29, 184),
    array(23, 30, 625),
    array(2, 8, 960)
);
echo maior_valor_final_lista($lista, $operacoes); // Saída esperada: 6314
