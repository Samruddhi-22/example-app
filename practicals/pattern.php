<?php
$rows = 5; // Change this value to adjust the height of the inverted triangle

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>