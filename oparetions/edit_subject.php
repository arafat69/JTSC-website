<?php

include('db_connect.php');

$id = $_GET['update'];

$name = $_POST['name'];
$semester = $_POST['semester'];
$code = $_POST['code'];
$cradit = $_POST['cradit'];
$fm = $_POST['fm'];
$tc = $_POST['tc'];
$tf = $_POST['tf'];
$pc = $_POST['pc'];
$pf = $_POST['pf'];
$department = $_POST['department'];
$section = $_POST['section'];


    mysqli_query($con, "UPDATE `subject` SET `name`='$name',`semester`='$semester',`code`='$code',`cradit`='$cradit',fm='$fm',`tc`='$tc',`tf`='$tf',`pc`='$pc',`pf`='$pf',`department`='$department',`section`='$section' WHERE id='$id'");

    header('location:../dashboard/subject.php');

