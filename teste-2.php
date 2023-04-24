<?php

function fibonacci(int $n): array {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } else {
        $fib = [0, 1]; // array com os dois primeiros números da sequência
        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i-1] + $fib[$i-2]; // soma os dois últimos números gerados para obter o próximo
        }
        return $fib;
    }
}


print_r(fibonacci(4)); // saída: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 )
print_r(fibonacci(5)); // saída: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 )
print_r(fibonacci(8)); // saída: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 )
print_r(fibonacci(1)); // saída: Array ( [0] => 0 )
print_r(fibonacci(3)); // saída: Array ( [0] => 0 [1] => 1 [2] => 1 )
print_r(fibonacci(10)); // saída: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 )
