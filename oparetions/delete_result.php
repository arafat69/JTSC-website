
<?php
include('db_connect.php');

$id = $_GET['del'];

$data = mysqli_query($con, "SELECT * FROM results WHERE id='$id'");
$data_info = mysqli_fetch_array($data);

$prephoto = $data_info['photo'];

unlink('../upload_photo/results/' . $prephoto);

mysqli_query($con, "DELETE FROM results WHERE id='$id' ");
header('location:../dashboard/result.php');


?>