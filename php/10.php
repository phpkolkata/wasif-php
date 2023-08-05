<?php

// numeric array
$arr = array("raj", 12);
// echo $arr[0];

// associative array
$std = array("name" => "raj", "age" => 12);
// echo $std['name'];
// echo "$std[name]";
// foreach to loop any array with value only
foreach ($std as $v) {
    echo $v;
}

// foreach to loop any array with key & value
foreach ($std as $k => $v) {
    echo $k . "=" . $v . "<br>";
}

// ---associative array method 1 - using array function
$std = array("name" => "raj", "age" => 12);

// ---associative array method 2 - direct with key
$std['name'] = "raj";
$std['age'] = 12;

// ---associative array method 3 - shortcode
$std = ["name" => "raj", "age" => 12];
