<?php
// Include the external file containing our function definitions
include 'functions.php';  // You can also use require here

// Use the factorial function to calculate factorial of 5
$factorialOf5 = factorial(5);  

// Use the isPrime function to check if 7 is a prime number
$is7Prime = isPrime(7);

// Display the results
echo "Factorial of 5 is: " . $factorialOf5 . "<br>";

if ($is7Prime) {
    echo "7 is a prime number.<br>";
} else {
    echo "7 is not a prime number.<br>";
}


// fibonacci series
// Number of terms to display in the Fibonacci series
$terms = 10; // You can change this number to get more terms in the series

echo "<br>";
// Display the Fibonacci series
displayFibonacciSeries($terms);
?>
