<?php

// Foreach loop - for numeric arrays

$names = array("John", "Steve", "Mary", "Joshua");

foreach ($names as $value) {
    echo "$value <br />";
}

echo "<br />";
// while loop example

$count = 0;
while ($count < count($names)) {
    echo "Name: $names[$count] <br/>";
    $count++;
}