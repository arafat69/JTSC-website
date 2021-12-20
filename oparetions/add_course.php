<?php

include('db_connect.php');

$name = $_POST['name'];
$category = $_POST['category'];
$duration = $_POST['duration'];

mysqli_query($con,"INSERT INTO `course`(`name`, `category`,`duration`) VALUES ('$name','$category','$duration')");

header('location:../dashboard/short_course.php');


?>