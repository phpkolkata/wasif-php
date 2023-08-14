<?php
session_start();
if (!$_SESSION['login']) {
    header("location:index.php?msg=wrong attempt, try login!");
    die;
}

print "<h1>Welcome Home</h1><hr>";

print "<a href='logout.php'>logout</a>";
