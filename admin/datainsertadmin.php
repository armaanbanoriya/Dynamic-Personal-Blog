<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {

echo $a =	$_POST['username'];
echo $b = 	$_POST['password'];

$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];

echo  $c = "upload/".$filename;
move_uploaded_file($tempname, $c);
	# code...
echo $d =	mysqli_real_escape_string($con,$_POST['description']);


$e = "INSERT INTO admin(username,password,image,description)values('$a','$b','$c','$d')";
$query = mysqli_query($con,$e);

if ($query) {
	echo "<script> alert('INSERTED') </script>";
	# code...
}else{
	echo "<script> alert('ERROR') </script>";
}

}
?>