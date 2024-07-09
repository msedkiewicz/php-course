<?php

// Numeric arrays - indexed arrays
// Key - value pairs. In numeric - the key is the number

$first_names = array("Lena", "John", "Eve", "Steve", "Mary");
echo $first_names[0];

$shop = "Biedronka";
$messed_up_array = array("Lena", "John", "41", "Steve", $shop);
echo "<br />";
echo "<br />";
echo $messed_up_array [2];
echo "<br />";
echo $messed_up_array [4];
echo "<br />";
echo "<br />";

// multidimentional array
$names = array("Kovalsky", "Maliniak", "Doe", $first_names);
echo $names[3][1];
