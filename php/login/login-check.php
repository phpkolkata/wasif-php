<?php
session_start();
// print_r($_POST);

// extract($_POST);

$email = $_POST['email'];
$pass = $_POST['pass'];

if ($email == "test@test.com" && $pass == "test") {
    $_SESSION['login'] = true;
    header("location:home.php?msg=Welcome... ");

} else {
    header("location:index.php?msg=Wrong username/password, please try again... ");
}
