<?php
session_start();
include_once 'dbcon.php';
if (isset($_POST['submit'])) {

$a =	$_POST['title'];
$b =	mysqli_real_escape_string($con,$_POST['description']);

$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];

$c = "upload/".$filename;
move_uploaded_file($tempname, $c);
	# code...


$d = "INSERT INTO blog_list(title,description,image)values('$a','$b','$c')";
$query = mysqli_query($con,$d);

if ($query) {
	$_SESSION['success']='Blog added successfully';
	header('location:dashboard.php');
}else{
	$_SESSION['error']='Insert Error';
	header('location:addblog.php');
}

}
?>