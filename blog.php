<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>
<div class="main-wrapper">
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
		    	<?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from blog_list ORDER by id DESC";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="admin/<?php echo $result['image']; ?>" >
					    <div class="media-body">
						    <h3 class="title mb-1"><?php echo $result['title']; ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php echo "Published on  ".date("d-m-y"); ?></span><span class="time"><!-- Time read --></span><span class="comment"><a href="#"><!-- comment --></a></span></div>
						    <div class="intro"><?php echo substr( $result['description'],0,300); ?></div>
						    <a class="more-link" href="detail.php?id=<?php echo $result['id']; ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
			    <!--//item-->
				<?php
				}
				?>			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	</div>
	<?php include_once 'footer.php'; ?>