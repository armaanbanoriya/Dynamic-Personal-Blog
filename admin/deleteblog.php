<?php
session_start();
include_once 'dbcon.php';

$id=$_GET['id'];

$a = "DELETE from blog_list where id=$id;";

$b = mysqli_query($con,$a);
if ($b) {
	# code...
$_SESSION['delete']="Blog deleted successfully.";
header("location:viewblog.php");
}

?>