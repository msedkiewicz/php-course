<?php

echo rand();
echo "<br />";
echo rand(0,100);
echo "<br />";
echo "<br />";
// better algorithm
echo mt_rand(0,10);
echo "<br />";
echo "<br />";

$names = array("John", "Steve", "Mary", "Joshua", "Ben", "Xavier");

$random = mt_rand(0, count($names) - 1);
echo $names[$random];

// Random game
echo "<br />";
echo "<br />";

echo "Guess a number! <br />";
$num = 4;
$random_number = mt_rand(0,10);

if ($num == $random_number) {
    echo "You win! $num";
} else {
    echo "Try again. $random_number";
}
