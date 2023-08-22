<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>



<?php
require "connection.php";
$sql = "select * from category";
$res = mysqli_query($con, $sql);

if (isset($_REQUEST['msg'])) {
    print "<div class='alert alert-primary shadow w-50 mx-auto'>$_REQUEST[msg]</div>";
}

print "<table class='table table-striped w-50 mx-auto mt-5' border='1' width='400'>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>isActive</th>
    <th>Option</th>
</tr>

";

while ($row = mysqli_fetch_assoc($res)) {
    print "
<tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[is_active]</td>
    <td>
    <a href='del-cat.php?id=$row[id]'> <i class='bi bi-trash-fill text-danger'></i> </a>
    </td>
</tr>
";
}

print "</table>";

?>

</body>
</html>