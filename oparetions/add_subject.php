
<?php 


include('db_connect.php');

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


$add= mysqli_query($con,"INSERT INTO `subject` (`name`, semester, code, cradit, fm, tc, tf, pc, pf,department,section) VALUES ('$name','$semester','$code','$cradit','$fm','$tc','$tf','$pc','$pf','$department','$section')");

if ($add) {
    header('location:../dashboard/subject.php');
}else{
    echo 'subject add faild';
}