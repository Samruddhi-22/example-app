<<?php
// A readable and maintainable Inverted Triangle Pattern program in PHP

// Define the number of rows in the inverted triangle
$numRows = 5;

// Outer loop for each row
for ($i = $numRows; $i >= 1; $i--) {
    // Inner loop for spaces
    for ($j = $numRows - $i; $j > 0; $j--) {
        echo " ";
    }
    
    // Inner loop for stars
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    
    // Move to the next line after each row
    echo "\n";
}
?>
