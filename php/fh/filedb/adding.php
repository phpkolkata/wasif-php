<?php
require "functions.php";

extract($_POST);
// read the file
$data = readData("db.txt");
if($data == ""){
    $id = 1;
}
else {
    $arr = explode("#", $data);
    $id = count($arr);
}
$str = "$id,$nm,$age#";
addData($str, "db.txt");

header("location:add.php?msg=record added!");