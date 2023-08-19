<?php
require "functions.php";

$id = $_REQUEST['id'];

$str = readData("db.txt");
$row = getArray($str);

$new_str="";
foreach($row as $v){
    if($v[0]!= $id){
        $new_str .= "$v[0],$v[1],$v[2]#";
    }
}

// echo $new_str;
// die;
writeData($new_str, "db.txt");

header("location:read.php?msg=record deleted"); 
