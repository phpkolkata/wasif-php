<?php
// w-write,r-read,a-append
$fp = fopen("db.txt", "a");
$str = "hello india";

fwrite($fp, $str);
fclose($fp);
