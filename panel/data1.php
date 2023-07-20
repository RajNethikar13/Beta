<?php

$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"Data-data/".$file['name']);

header('Location:Data.php');
?>