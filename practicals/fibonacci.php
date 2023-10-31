<?php
function generateFibonacci($n) {
    $fibonacci = [];
    
    if ($n <= 0) {
        return $fibonacci;
    }
    
    $fibonacci[] = 0;
    
    if ($n > 1) {
        $fibonacci[] = 1;
    }
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

$n = 10; // Change this to the number of Fibonacci numbers you want
$fibonacciSequence = generateFibonacci($n);

echo "Fibonacci sequence for the first $n numbers: ";
echo implode(", ", $fibonacciSequence);
?>