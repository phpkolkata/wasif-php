<?php
require "connection.php";

$id = $_REQUEST['id'];

$sql = "DELETE FROM `category` WHERE `id`='$id'";
$res = mysqli_query($con, $sql);
header("location:category.php?msg=Record deleted!");
