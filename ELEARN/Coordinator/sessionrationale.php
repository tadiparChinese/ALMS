<?php
session_start();
require_once 'dbconfig.php';
if (isset($_POST['submit'])) {

$sessionrationale=$_POST['rationale'];
$courseid= $_SESSION['courseid'];
$tablename='master_course_'.$courseid;
$sid= $_SESSION['sid'];           //coordinator will be clicking on the session fetch sid then //sprintf("SELECT sid FROM $tablename");

$sql=sprintf("UPDATE $tablename SET session_rationale='$sessionrationale' WHERE sid='$sid' ");
echo 
$result=mysqli_query($conn,$sql);
echo "<script>alert('$sql');</script>";
if(!$result)
{
//$message = "Session Rationale not added. Please Try Again.";
//echo "<script>alert('$message'); location.href='Session-Form.php';</script>";
}
else{
$message = "Session Rationale Added Successfully";
echo "<script>alert('$message'); location.href='Session-Form.php';</script>";
}
}
?>