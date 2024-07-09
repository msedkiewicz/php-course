<?php

$fav_pizza = array(
    "John" => "Pepperoni",
    "Mary" => "Cheese",
    "Steve" => "Hawaiian",
    "Bob" => "Mushrooms"
);

echo count($fav_pizza); // array.length in JS
echo "<br />";

$names = array("John", "Steve", "Mary");

echo count($names);
echo "<br />";
echo "<br />";

// echo last item from an array
echo $names[count($names) - 1];