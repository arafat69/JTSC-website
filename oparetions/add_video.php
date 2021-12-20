<?php

include('db_connect.php');

$file = $_POST['photo'];

$date = date('F j, Y');

mysqli_query($con,"INSERT INTO video(`file`, `date`) VALUES ('$file','$date')");

header('location:../dashboard/video.php');

