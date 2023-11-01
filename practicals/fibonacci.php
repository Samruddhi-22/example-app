<?php
// A readable and maintainable Fibonacci program in PHP

// Define a function to calculate the Fibonacci sequence
function fibonacci($n) {
    $fibonacci = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Set the number of Fibonacci numbers to generate
$num = 10;

// Generate and display the Fibonacci sequence
$result = fibonacci($num);
echo "Fibonacci sequence of the first $num numbers: " . implode(', ', $result);
?>
