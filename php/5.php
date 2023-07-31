<?php
$x = "10aaa";
$y = 20;
$z = $x + $y;

echo $z;

// errors
// 1. notice (1%) - any function is about to depricate
// 2. warning (1%) - light weight issue in programm, ex string + int

// 3. parse (95%)
// human errors, spellings mistakes, bracket missing, $ sign missing
// ex -
// $x = 10
// y=20;
// {{

// ((

// )
// }

// 4. fatal (2%) - (logica errors)
