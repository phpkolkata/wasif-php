<?php
require "functions.php";

// read file
$str = readData("db.txt");
$row = getArray($str);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
<div class="mx-auto w-50 shadow card p-4 mt-4">

<?php

print "
<table class='table'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Name</th>
      <th scope='col'>Age</th>
      <th scope='col'>Options</th>
    </tr>
  </thead>
  <tbody>
";
foreach ($row as $r) {
    print "
 <tr>
      <th scope='row'>$r[0]</th>
      <td>$r[1]</td>
      <td>$r[2]</td>
      <td><a href='del.php?id=$r[0]'>del</a></td>
</tr>
";
}

print " </tbody>
</table>";

?>
</div>
</body>
</html>