			<?php

                    include_once 'dbcon.php';
                   $a = "SELECT * from admin";
                   $b = mysqli_query($con,$a);
                   
                   $c = mysqli_fetch_array($b);
                  
            ?>

<header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Armaan's Blog</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="admin/<?php echo $c['image'] ?>" alt="image" >			
					
					<div class="bio mb-3"><?php echo $c['description']; ?></div><!--//bio-->
					
			        <hr> 
				</div><!--//profile-section-->
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog.php"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="https://www.linkedin.com/in/armaan-banoriya-b59307108/"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
				</ul>
			</div>
		</nav>
    </header>