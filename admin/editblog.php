 <?php include_once 'session.php'; ?>
 <?php include_once 'header.php'; ?>
 <?php include_once 'sidebar.php'; ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<?php
include_once 'dbcon.php';
if (isset($_GET['id'])) {
      $id=$_GET['id'];
  # code...
$a = "SELECT * from blog_list where id=$id";
$b = mysqli_query($con,$a);

$c = mysqli_fetch_assoc($b);
}
?>

       <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center;" >Add Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="updateblog.php" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $c['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $c['title']; ?>" >
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" > <?php echo $c['description']; ?> </textarea>
                  </div>
                  <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" value="<img src="<?php echo $c['image'] ?> class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <br>
                        
                      </div>

                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>

                    </div>

                  </div>
                  <img src="<?php echo $c['image'];  ?> " style='height: 100px; width: 100px;' >
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  name="update" class="btn btn-primary">UPDATE</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
</section>
            <!-- /.card -->
     <!---code end--->
</div>

</div>
<?php include_once 'footer.php'; ?>


  <!-- /.content-wrapper -->

