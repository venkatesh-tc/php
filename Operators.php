<?php
// Arithmetic Operators
$a = 10;
$b = 5;

echo "Addition: " . ($a + $b) . "<br>";        

echo "Subtraction: " . ($a - $b) . "<br>";     

echo "Multiplication: " . ($a * $b) . "<br>";  

echo "Division: " . ($a / $b) . "<br>";       

?>


<?php
// Assignment Operators
$x = 10;

$x += 5;  // Equivalent to $x = $x + 5
echo "x after += : " . $x . "<br>";  
 // Output: 15

$x -= 3;  // Equivalent to $x = $x - 3
echo "x after -= : " . $x . "<br>";   
// Output: 12

$x *= 2;  // Equivalent to $x = $x * 2
echo "x after *= : " . $x . "<br>";   
// Output: 24

$x /= 6;  // Equivalent to $x = $x / 6
echo "x after /= : " . $x . "<br>";  
 // Output: 4

$x %= 3;  // Equivalent to $x = $x % 3
echo "x after %= : " . $x . "<br>";  
// Output: 1


?>


<?php
// Comparison Operators
$a = 10;
$b = 5;

var_dump($a == $b);  
// Equal to: Output: bool(false)

var_dump($a === $b); 
// Identical: Output: bool(false) (checks value and type)

var_dump($a != $b);  
// Not equal to: Output: bool(true)

var_dump($a !== $b); 
// Not identical: Output: bool(true)

var_dump($a > $b);   
// Greater than: Output: bool(true)

var_dump($a < $b);   
// Less than: Output: bool(false)

var_dump($a >= $b); 
 // Greater than or equal to: Output: bool(true)

var_dump($a <= $b);  
// Less than or equal to: Output: bool(false)


?>
