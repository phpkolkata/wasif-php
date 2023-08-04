<?php

$week = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"];

echo $week[0];
echo $week[1];
echo $week[2];
echo $week[3];
echo $week[4];
echo $week[5];
echo $week[6];

// DRY - Dont Repeat Yourself
// for ($i = 0; $i <= 6; $i++) {
//     echo $week[$i];
// }

for ($i = 0; $i < count($week); $i++) {
    echo $week[$i] . "<br>";
}

// hw: bring $week array items in a dropdown
