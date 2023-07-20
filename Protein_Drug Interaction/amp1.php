<?php

$file=$_FILES['file'];

move_uploaded_file($file["tmp_name"],"amp-data/".$file['name']);

header('Location:amp.php');
?>

