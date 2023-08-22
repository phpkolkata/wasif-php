<?php
require "connection.php";

extract($_POST);

$sql = "UPDATE `category` set `name`='$nm',`is_active`='$is_active' where `id`='$cid'";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));

header("location:category.php?msg=record updated");
