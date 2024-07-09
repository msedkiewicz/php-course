<?php

// String manipulation

$description = "John Elder is a PHP coding monster.";

echo $description;
echo "<br />";

echo str_replace("coding monster", "enthusiast", $description);
echo "<br />";
$javascript = "JavaScript";
echo str_replace("PHP", $javascript, $description);
echo "<br />";

$babbling = "We ArE HeRe To LeArN PHP!";
echo strtoupper($babbling);
echo "<br />";
echo ucwords($description);
echo "<br />";

$lowercase ="nice lowercase sentence.";
echo ucfirst($lowercase);
echo "<br />";
echo strtolower($babbling);
echo "<br />";
echo lcfirst($description);
echo "<br />";
echo strlen($description);
echo "<br />";
echo str_shuffle($babbling);
echo "<br />";
echo str_repeat($description, 4);
echo "<br />";