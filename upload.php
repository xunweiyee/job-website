<?php
include("session.php");

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$jobid = $_POST['jobid'];

if (isset($name)) {

$path= 'Uploads/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';


// mysql_query("INSERT INTO $table (description, filename)
// VALUES ('$description', '$name')");
$sql = "INSERT INTO application (seekerID,jobID,file) VALUES ( " . $_SESSION['login_user'] .", $jobid, '$name')";
$result = mysqli_query($db,$sql);
if ($result)
 {
 echo"<script>window.open('profile.php','_self')</script>";
 }
 else {
   echo $sql;
   echo "Upload error.";
 }
}

}
}

?>
