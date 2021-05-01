<?php include_once 'session.php'; ?>
<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="text-align: right;">Add Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


<?php
include_once 'dbcon.php';
if (isset($_GET['id'])) {
	# code...
$a = "SELECT * from blog_list";
$b = mysqli_query($con,$a);

$c = mysqli_fetch_assoc($b);
}
?>
<h2>Title:<?php echo $c['title']; ?></h2> <br><br>
<h2>Description:<?php echo $c['description']; ?></h2> <br><br>
<h2>Image:<img src="<?php echo $c['image'] ?>"> </h2>
</div>
<?php include_once 'footer.php'; ?>
