<?php
// A readable and maintainable number swapping program in PHP

// Define a function to swap two numbers
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Define two numbers to be swapped
$num1 = 10;
$num2 = 20;

echo "Before swapping: num1 = $num1, num2 = $num2<br>";

// Call the swapNumbers function to swap the numbers
swapNumbers($num1, $num2);

echo "After swapping: num1 = $num1, num2 = $num2";
?>

