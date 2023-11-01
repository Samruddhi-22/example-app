<?php
class Practical {
    /**
     * Print "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!";
    }

    /**
     * Add two numbers and return the result
     *
     * @param int $num1 First number
     * @param int $num2 Second number
     * @return int The sum of $num1 and $num2
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * Generate a Fibonacci sequence containing 'n' integers
     *
     * @param int $n Number of Fibonacci integers to generate
     * @return array An array containing the first 'n' Fibonacci numbers
     */
    public static function generateFibonacciSequence($n) {
        $fibonacci = [];
        if ($n > 0) {
            $fibonacci = [0];
            if ($n > 1) {
                $fibonacci[] = 1;
                for ($i = 2; $i < $n; $i++) {
                    $next = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                    $fibonacci[] = $next;
                }
            }
        }
        return $fibonacci;
    }
}
?>
