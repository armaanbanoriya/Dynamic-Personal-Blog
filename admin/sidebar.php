  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Arm ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" >
        </div>
        <div class="info">
          <a href="dashboard.php" class="d-block">Armaan Banoriya</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addblog.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewblog.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="insertadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert admin</p>
                  <span class="right" style="color: #7ef313;" ><i class="fa fa-lock" aria-hidden="true"></i></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View admin</p>
                  <span class="right" style="color: #7ef313;"  ><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewemail.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Email's</p>
                  <span class="right" style="color: white;"  ><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout</p>
                <span class="right"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
              
            </a>
            </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>