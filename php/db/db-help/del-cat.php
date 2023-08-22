<?php

require "connection.php";

extract($_REQUEST);
// $id = $_REQUEST['id'];

$sql = "delete from category where `id`='$id'";
$res = mysqli_query($con, $sql);

header("location:category.php?msg=record deleted!");
