<?php
print "<pre>";
print "GET<br>";
print_r($_GET);

print "POST<br>";
print_r($_POST);

print "REQUEST<br>";
print_r($_REQUEST);

// $nm = $_POST['nm'];
// $age = $_POST['age'];
// $x = $_REQUEST['x'];

extract($_REQUEST);

echo $nm . $age . $x;

// hw : create a form with following fields (js, bootstrap, css, php)
// name
// age
// class
// sec
// hindi,eng,math,sci,etc...

// GET RESULT
