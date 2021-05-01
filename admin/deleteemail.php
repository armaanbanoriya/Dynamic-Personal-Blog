<?php
include_once 'dbcon.php';

$id=$_GET['id'];

$a = "DELETE from email where id=$id;";

mysqli_query($con,$a);

header("location:dashboard.php");
?>