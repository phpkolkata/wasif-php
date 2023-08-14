<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_REQUEST['msg'])) {
    print "<div style='color:red'>$_REQUEST[msg]</div>";
}
?>

    <form action="login-check.php" method="post">
        email:<input type="email" name="email"><br>
        pass: <input type="password" name="pass"><br>
        <button>Login</button>
    </form>
</body>
</html>
