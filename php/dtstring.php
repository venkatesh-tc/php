<!DOCTYPE html>
<html>
<body>

<?php
// String in single quotes
$string1 = 'Hello, World!';

// String in double quotes (with variable parsing)
$name = "John";
$string2 = "Hello, $name!";

// Concatenating strings using the dot operator
$greeting = "Good " . "morning, " . $name . "!";

// Getting string length
$length = strlen($string1);

// Finding a word or character in a string
$position = strpos($greeting, "morning");

// Output the strings and information
echo "<p>String 1: $string1</p>";
echo "<p>String 2: $string2</p>";
echo "<p>Concatenated Greeting: $greeting</p>";
echo "<p>Length of String 1: $length characters</p>";
echo "<p>Position of 'morning' in the greeting: $position</p>";
?>

</body>
</html>

