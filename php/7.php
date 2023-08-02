<?php
// predefined functions ( already available in php)
// user-defined functions (created by us)

// function modules/atanomy
// 1. function name
// 2. parameters/arguments
// 3. optional param/arg
// 4. return / process
// 5. return type

// function add(int $v1, int $v2): int
// {
//     return $v1 + $v2;
// }

function add($v1, $v2)
{
    return $v1 + $v2;
}

function sub($v1, $v2)
{
    return $v1 - $v2;
}

function div($v1, $v2)
{
    return $v1 / $v2;
}

function mul($v1, $v2)
{
    return $v1 * $v2;
}

$tot = add(20, 30);
$tot += 20;
echo $tot;

// hw - create a sinle function to perform any four operation as above (+,-,/,*)
