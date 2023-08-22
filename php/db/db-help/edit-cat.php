<?php
require "connection.php";
$id = $_REQUEST['id'];
$sql = "select * from category where `id`='$id'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>


<div class='mx-auto w-50 mt-5 mb-1 clearfix'>
<a href='category.php' class='btn btn-primary float-end'>Show Category</a>
</div>

<div class="card shadow w-50 mx-auto p-3">
<h1>Edit Cateogry</h1>
<form action="update-cat.php" method="post">
    <input type="hidden" name="cid" value="<?php echo $id ?>">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="nm" class="form-control" value="<?php echo $row['name'] ?>">
  </div>
  <div class="mb-3">
    <label  class="form-label">isActive</label>
    <select class="form-select" name="is_active">
        <option value="y"<?php echo ($row['is_active'] == 'y') ? "selected" : ""; ?>>Yes</option>
        <option value="n"<?php echo ($row['is_active'] == 'n') ? "selected" : ""; ?>> No </option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>
