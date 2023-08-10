<?php
if (isset($_REQUEST['msg'])) {
    print "<div style='color:red'>$_REQUEST[msg]</div>";
}

?>

<!-- mandatory step to upload nay file - method="post" enctype="multipart/form-data" -->

<form action="upload.php" method="post" enctype="multipart/form-data">
    Name:<input type="text" value="" name="nm"><br>
    Image:<input type="file" name="im"><br>
    <button>submit</button>
</form>
