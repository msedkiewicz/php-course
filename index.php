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
echo $names[mt_rand(0, count($names) - 1)];