<?php
$con = mysqli_connect('localhost', 'asif', 'asif', 'mobile_store');

session_start();
// print_r($_POST);

// extract($_POST);

$email = $_POST['email'];
$pass = $_POST['pass'];

// if ($email == "test@test.com" && $pass == "test") {
//     $_SESSION['login'] = true;
//     header("location:home.php?msg=Welcome... ");

// } else {
//     header("location:index.php?msg=Wrong username/password, please try again... ");
// }

$sql = "select * from `admin` where `email`='$email' AND `pass`='$pass'";
$res = mysqli_query($con, $sql);
$tot = mysqli_num_rows($res);

if ($tot == 1) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['active_id'] = $row['id'];
    header("location:home.php?msg=Welcome... ");

} else {
    header("location:index.php?msg=Wrong username/password, please try again... ");
}
