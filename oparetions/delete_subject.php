
<?php
include('db_connect.php');

$id = $_GET['sub_del'];


mysqli_query($con, "DELETE FROM `subject` WHERE id='$id' ");

header('location:../dashboard/subject.php');


?>