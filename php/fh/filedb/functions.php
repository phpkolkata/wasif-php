<?php

function readData($file){
    $fp = fopen($file, "r");
    $str = "";
    while(!feof($fp)){
        $str .= fgets($fp);
    }
    fclose($fp);
    return $str;
}

function writeData($str, $file){
    $fp = fopen($file, "w");
    fwrite($fp, $str);
    fclose($fp);
}

function addData($str, $file){
    $fp = fopen($file, "a");
    fwrite($fp, $str);
    fclose($fp);
}

function getArray($str){
    $arr = explode("#",$str,-1);
    foreach($arr as $v){
        $row[]=explode(",", $v);
    }
    return $row;
}