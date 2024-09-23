<?php
// Function to calculate the factorial of a number
function factorial($number) {
    if ($number < 0) {
        return "Invalid input! Factorial is not defined for negative numbers.";
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false; // 1 and numbers less than 1 are not prime
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}



// Recursive function to calculate Fibonacci number
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Function to display Fibonacci series up to a certain number of terms
function displayFibonacciSeries($terms) {
    echo "Fibonacci series up to $terms terms: <br>";
    for ($i = 0; $i < $terms; $i++) {
        echo fibonacci($i) . " ";
    }
}
?>
