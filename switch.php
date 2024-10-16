<?php

//basic switch example
$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    default:
        echo "Unknown day.";
        break;
}
?>


<?php

//switch with multiple cases
$day = "Saturday";

switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "It's a weekday.";
        break;
    default:
        echo "Unknown day.";
        break;
}
?>

<?php
//switch with integer cases
$number = 3;

switch ($number) {
    case 1:
        echo "The number is one.";
        break;
    case 2:
        echo "The number is two.";
        break;
    case 3:
        echo "The number is three.";
        break;
    default:
        echo "The number is unknown.";
        break;
}
?>
