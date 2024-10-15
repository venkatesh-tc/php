<!DOCTYPE html>
<html>
<body>

<?php
// Float variables
$float1 = 3.14;       // A typical float
$float2 = -10.75;     // A negative float
$float3 = 2.5e3;      // Float in exponential form (2.5 * 10^3 = 2500)

// Arithmetic operations with floats
$sum = $float1 + $float2;
$difference = $float1 - $float2;
$product = $float1 * $float2;
$quotient = $float1 / 2;  // Division by a non-zero number

// Rounding floats
$rounded = round($float1, 1);  // Rounds to 1 decimal place

// Type checking
$isFloat = is_float($float1);  // Returns true if $float1 is a float

// Output the float operations and information
echo "<p>Float 1: $float1</p>";
echo "<p>Float 2: $float2</p>";
echo "<p>Sum of Float 1 and Float 2: $sum</p>";
echo "<p>Difference: $difference</p>";
echo "<p>Product: $product</p>";
echo "<p>Quotient: $quotient</p>";
echo "<p>Rounded Float 1: $rounded</p>";
echo "<p>Is Float 1 a float? " . ($isFloat ? "Yes" : "No") . "</p>";
?>

</body>
</html>

