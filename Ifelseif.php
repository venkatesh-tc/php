<?php
//if elseif else example
$age = 20;

if ($age < 18) {
    echo "You are a minor.";
} elseif ($age >= 18 && $age < 60) {
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}
?>

<?php
$age = 20;

// Ternary Operator
//Shorthand if statement
echo ($age >= 18) ? "You are an adult." : "You are a minor.";

?>

<?php
//Nested if
$age = 30;
$gender = "male";

if ($age >= 18) {
    if ($gender == "male") {
        echo "You are an adult male.";
    } else {
        echo "You are an adult female.";
    }
} else {
    echo "You are a minor.";
}

?>

<?php

$age = 30;
$gender = "male";
//Shorthand Nested if
// Nested Ternary Operator
echo ($age >= 18) ? (($gender == "male") ? "You are an adult male." : "You are an adult female.") : "You are a minor.";

?>
