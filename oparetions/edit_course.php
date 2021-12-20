<?php

include('db_connect.php');

$id = $_GET['id'];

$name = $_POST['name'];
$category = $_POST['category'];
$duration = $_POST['duration'];

mysqli_query($con, "UPDATE `course` SET `name`='$name',category='$category',`duration`='$duration' WHERE id='$id' ");

header('location:../dashboard/short_course.php');
