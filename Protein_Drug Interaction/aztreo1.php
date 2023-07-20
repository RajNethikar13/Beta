<?php

$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"aztreo-data/".$file['name']);

header('Location:aztreo.php');
?>