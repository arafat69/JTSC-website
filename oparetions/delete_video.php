<?php

include('db_connect.php');

$id = $_GET['del'];


mysqli_query($con, "DELETE FROM video WHERE id='$id' ");

header('location:../dashboard/video.php');
