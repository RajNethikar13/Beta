<?php

$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"avibac-data/".$file['name']);

header('Location:avibac.php');
?>
