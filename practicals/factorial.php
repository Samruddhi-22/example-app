<?php
// A readable and maintainable factorial program in PHP

// Define a function to calculate the factorial of a number
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n === 0) {
        return 1;
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Set the number for which you want to calculate the factorial
$num = 5;

// Calculate and display the factorial
$result = factorial($num);
echo "Factorial of $num is $result";
?>
