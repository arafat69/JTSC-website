<?php

$id = $_GET['del'];

include('db_connect.php');

mysqli_query($con, "DELETE FROM course WHERE id='$id' ");

header('location:../dashboard/short_course.php');


?>