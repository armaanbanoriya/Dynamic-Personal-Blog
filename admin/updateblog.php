<?php

include_once 'dbcon.php';
if (isset($_POST['id'])) {
   $id=$_POST['id'];

$a =  $_POST['title'];
$b =  $_POST['description'];


  # code...


$d = "UPDATE blog_list set title='$a',description='$b' where id=$id";
$query = mysqli_query($con,$d);

if ($query) {
  header("location:viewblog.php");
  # code...
}

}
?>
