<?php

// If elseif statements

$num_1 = 4;
$num_2 = 51;

if ($num_1 > 10) {
    echo $num_1 . " is greater than 10"; // if anything is true here code won't go further;
} elseif ($num_2 == 5) {
    echo $num_2 . " equals 5";
} else {
    echo "I'm done with math for today!";
}