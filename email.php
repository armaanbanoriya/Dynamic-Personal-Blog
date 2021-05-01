<?php
session_start();
include_once 'dbcon.php';
if (isset($_POST['sub'])) {

$a = $_POST['semail'];
	# code...
$b = "INSERT INTO email(semail)values('$a')";
$query = mysqli_query($con,$b);

if ($query) {
	$_SESSION['enteremail']="Thank You for Subscribing to Blog!!";
	header("location:index.php");
	# code...
}else{
	echo "<script>alert('error');</script>";
}
}
?>