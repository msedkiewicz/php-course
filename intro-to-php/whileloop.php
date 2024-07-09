<?php

// until condition is true it keeps doing it

/* while (condition is true) {
    do something;
}
*/

$counter = 0;

while ($counter < 10) {
    echo "The count is: " . $counter . "<br />";
    $counter++;
}

//do - while loop

$counter_do = 0;
do {
    echo "Days with too much heat: " . $counter_do . "<br />";
    $counter_do++;
} while ($counter_do <= 7);