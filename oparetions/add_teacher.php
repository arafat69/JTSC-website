<?php

include('db_connect.php');

$name = $_POST['name'];
$position= $_POST['position'];
$department= $_POST['department'];
$category= $_POST['category'];
$contact= $_POST['contact'];
$qualification= $_POST['quali'];
$address= $_POST['address'];
$email= $_POST['email'];

$photo = $_FILES['photo']['name'];
   $phototmp=$_FILES['photo']['tmp_name'];

   move_uploaded_file($phototmp,'../upload_photo/teacher/'.$photo);


mysqli_query($con,"INSERT INTO teacher(`name`, `position`, `department`, `photo`, `category`,qualification, `contact`, `address`, `email`) VALUES ('$name','$position','$department','$photo','$category','$qualification','$contact','$address','$email')");


header('location:../dashboard/teacher.php');