
<?php
include('db_connect.php');

$id = $_GET['id'];

$data = mysqli_query($con, "SELECT * FROM notices WHERE id='$id'");
$data_info = mysqli_fetch_array($data);

$prephoto = $data_info['photo'];

unlink('../upload_photo/notices/' . $prephoto);

mysqli_query($con, "DELETE FROM notices WHERE id='$id' ");
header('location:../dashboard/allnote.php');


?>