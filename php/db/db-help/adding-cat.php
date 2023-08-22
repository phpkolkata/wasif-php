<?php
require "connection.php";

extract($_POST);

$sql = "INSERT INTO `category` (`id`, `name`, `is_active`) VALUES (NULL, '$nm', '$is_active')";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));

header("location:category.php?msg=record added");
