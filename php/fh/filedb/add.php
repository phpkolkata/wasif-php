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
    <div class="mb-2">
        <a href="read.php">
            <button type="button" class="btn btn-warning float-end ">View Records</button>
        </a>
    </div>

<form action="adding.php" method="post">
    <div class="mb-3">
    <label  class="form-label">Name:</label>
    <input type="text" class="form-control" name="nm" placeholder="Enter name">
    </div>
    <div class="mb-3">
    <label class="form-label">Age:</label>
    <input type="text" class="form-control" name="age" placeholder="Enter age"></input>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary float-end">Add Record</button>
    </div>
</form>
</div>
</body>
</html>