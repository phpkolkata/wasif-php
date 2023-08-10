<?php
print_r($_POST);
print "<pre>";
print_r($_FILES);

extract($_FILES['im']);

if ($error == 0) {
    if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif") {

        $id = rand(1, 9999); // in real world, we use db id
        $name = $id . "-" . $name;
        copy($tmp_name, "upload/" . $name);
        header("location:17.php?msg=File uploaded successfull!");

    } else {
        header("location:17.php?msg=Wrong file format");
    }

} else {
    header("location:17.php?msg=error uploading ");
}
