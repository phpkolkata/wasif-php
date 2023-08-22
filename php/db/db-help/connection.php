<?php
// host,user(root),pass(""),db
$con = mysqli_connect("localhost", "asif", "asif", "mobile_store");

if (!$con) {
    die("db connection error");
}
