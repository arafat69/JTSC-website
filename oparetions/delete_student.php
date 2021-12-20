
<?php
include('db_connect.php');

$id = $_GET['id'];

$data = mysqli_query($con, "SELECT * FROM students WHERE id='$id'");
$data_info = mysqli_fetch_array($data);

$prephoto = $data_info['student_photo'];

unlink('../upload_photo/students/' . $prephoto);

mysqli_query($con, "DELETE FROM students WHERE id='$id' ");

header('location:../dashboard/student.php');


?>