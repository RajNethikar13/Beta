<?php

$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"mer-data/".$file['name']);

header('Location:mer.php');
?>