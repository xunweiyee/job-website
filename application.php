<?php
// include("config.php");
include("session.php");

$pitching = $_POST['pitching'];
$jobid = $_POST['jobid'];
// echo $pitching;
// echo $jobid;
// echo $login_session;

//create and execute query
$sql = "INSERT INTO application (seekerID,jobID,application) VALUES ( " . $_SESSION['login_user'] .", $jobid, '$pitching')";
// echo $sql;
$result = mysqli_query($db,$sql);
if ($result)
 {
 echo"<script>window.open('profile.php','_self')</script>";
 }


?>
