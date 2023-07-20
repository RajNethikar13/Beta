<?php

$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"clav-data/".$file['name']);

header('Location:clav.php');
?>