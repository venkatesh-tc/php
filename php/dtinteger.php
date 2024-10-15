<!DOCTYPE html>
<html>
<body>

<?php
// Integer variables
$int1 = 42;         // Positive integer
$int2 = -10;        // Negative integer
$int3 = 0;          // Zero is also considered an integer

// Simple arithmetic operations with integers
$sum = $int1 + $int2;
$difference = $int1 - $int2;
$product = $int1 * $int2;
$quotient = $int1 / 2;  // Division by a non-zero number
$remainder = $int1 % 5; // Modulus (remainder of division)

// Incrementing and Decrementing
$int1++;   // Increments $int1 by 1
$int2--;   // Decrements $int2 by 1

// Type checking
$isInteger = is_int($int1);  // Returns true if $int1 is an integer

// Output the integer operations and information
echo "<p>Integer 1: $int1</p>";  // After increment
echo "<p>Integer 2: $int2</p>";  // After decrement
echo "<p>Sum of Integer 1 and Integer 2: $sum</p>";
echo "<p>Difference: $difference</p>";
echo "<p>Product: $product</p>";
echo "<p>Quotient: $quotient</p>";
echo "<p>Remainder when Integer 1 is divided by 5: $remainder</p>";
echo "<p>Is Integer 1 an integer? " . ($isInteger ? "Yes" : "No") . "</p>";
?>

</body>
</html>
