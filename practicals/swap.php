<?php
// Define two variables with initial values
$number1 = 5;
$number2 = 10;

// Display the original values
echo "Original values: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";

// Swap the values of $number1 and $number2
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

// Display the swapped values
echo "Swapped values: ";
echo "Number 1: " . $number1 . ", Number 2: " . $number2 . "<br>";
?>
