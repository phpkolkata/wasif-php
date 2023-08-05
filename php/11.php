<?php

// Multi-diamentional Array

// ex1
$x = ["x", "y"];
$y = ["a", "b"];

$z = [$x, $y]; // main array

print "<pre>";
print_r($z);

echo $z[1][1]; //b
echo $z[0][1]; //y
print "<hr>";
foreach ($z as $v) {
    echo $v[0] . $v[1];
}
print "<hr>";

foreach ($z as $v) {
    foreach ($v as $v2) {
        echo $v2 . "<br>";
    }
}
// -----------------------

// ex2
$arr = array(55 => "raj", "class" => 12, "marks" => array("hindi" => 22, "eng" => 44, "math" => 54));

print "<pre>";
print_r($arr);

echo $arr['marks']['math']; //54
print "<hr>";

foreach ($arr as $k => $v) {
    if (is_array($v)) {
        echo "$k:<br>";
        foreach ($v as $k2 => $v2) {
            echo "$k2=$v2<br>";
        }
    } else {
        echo $k . "=" . $v . "<br>";
    }
}
