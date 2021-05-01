<?php
session_start();
?>
<?php
include_once 'dbcon.php';
if (isset($_POST['login'])) {
   $user=$_POST['username'];
   $pass=$_POST['password'];
  # code...
   $a = "SELECT * from admin where username='$user' && password='$pass'";
  $query = mysqli_query($con,$a);

  $total = mysqli_num_rows($query);
  // echo  $total;

  if ($total==1) {
    $_SESSION['a']=$user;
    header('location:dashboard.php');

    # code...
  }else{
    $_SESSION['error']="Invalid Credentials";
    header('location:index.php');
     }

}

?>