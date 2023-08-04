<?php
// Array
// 1. numeric array
// 2. associative array
// 3. multi-diamensional array

function dd($arr)
{
    print "<pre>";
    print_r($arr);

}

// numeric array method one - with array function
// $arr1 = array("a", "b", "c"); //0=>a,1=>b,2=>c
// $arr1 = ["a", "b", "c"]; //SHORT Code

// method two - direct with keys
// $arr1[0] = "a";
// $arr1[1] = "b";
// $arr1[2] = "c";

// method Three - direct without keys
$arr1[] = "a";
$arr1[] = "b";
$arr1[] = "c";

dd($arr1);
