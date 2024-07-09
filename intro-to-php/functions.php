<?php

// Functions

function helloWorld($first_name, $last_name) {
    echo "Hello World! And hello $first_name $last_name!";
}

helloWorld("John", "Doe");

function sumNumbers($num_1, $num_2) {
    return $num_1 + $num_2;
}

echo "<br />";
echo sumNumbers(4,6);

echo "<br />";
$answer = sumNumbers(4,6);
echo $answer * 3;