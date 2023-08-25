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
$tot = mysqli_num_rows($res);

$limit = 3;
$start = 0;
if (isset($_REQUEST['p'])) {
    $start = ($_REQUEST['p'] - 1) * $limit;
}

$pages = ceil($tot / $limit);

// echo $pages;

// search query
$where = '';
if (isset($_REQUEST['srch'])) {
    $where = " WHERE `name` like '%$_REQUEST[srch]%'";
}

// main query
$sql = "select * from category $where LIMIT $start,$limit";
echo $sql;
$res = mysqli_query($con, $sql);

if (isset($_REQUEST['msg'])) {
    print "<div class='alert alert-primary shadow w-50 mx-auto'>$_REQUEST[msg]</div>";
}

// search
print "<div class='w-50 mx-auto mb-0'>
<form action='cat-pagination.php' method='get'>
<input type='search' class='form-control w-50 d-inline' name='srch' placeholder='search here....'>
<button class='btn btn-primary d-inline'><i class='bi bi-search'></i> Search</button>
<div class='d-inline float-end'><a href='cat-pagination.php'>Show All</a></div>
</form>
</div>
";

print "<table class='table table-striped w-50 mx-auto ' border='1' width='400'>
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

<div class="w-50 mx-auto">
<nav aria-label="Page navigation example">
  <ul class="pagination">
<?php
for ($i = 1; $i <= $pages; $i++) {
    print "<li class='page-item'><a class='page-link' href='?p=$i'>$i</a></li>";
}

?>
  </ul>
</nav>
</div>

</body>
</html>