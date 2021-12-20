<?php

include('db_connect.php');

$photo = $_FILES['photo']['name'];

$phototmp= $_FILES['photo']['tmp_name'];

move_uploaded_file($phototmp,'../upload_photo/gallery/'.$photo);

$date = date('F j, Y');

mysqli_query($con,"INSERT INTO `gallery`(`photo`, `date`) VALUES ('$photo','$date')");

header('location:../dashboard/gallery.php');


?>