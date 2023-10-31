<?php
function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5; // Change this to the number for which you want to calculate the factorial
$result = factorial($number);

echo "Factorial of $number is $result";
?>
