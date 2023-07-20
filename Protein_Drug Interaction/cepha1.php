<?php
$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"cepha-data/".$file['name']);

header('Location:cepha.php');
?>