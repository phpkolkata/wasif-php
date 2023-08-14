<?php

$fp = fopen("db.txt", "r");
$str = "";
while (!feof($fp)) {
    $str .= fgets($fp);
}

fclose($fp);

echo $str;
