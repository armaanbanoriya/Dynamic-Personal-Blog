<?php include_once 'session.php'; ?>
<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>

<div class="main-wrapper">
	    <section class="cta-section theme-bg-dark py-5">
	    	<button style="align-items: right" onclick="document.getElementById('arm').innerHTML=Date()" >Time</button>
	    	<p style="text-align: right; color: white;" id="arm" ></p>
		    <div class="container text-center">
			    <h2 class="heading" style="color: lightgreen;" >Daily Blogs</h2>
			    <div class="intro" style="color: red;" >Welcome to my blog.</div>
			    <form class="signup-form form-inline justify-content-center pt-3" method="post" action="email.php" >
                    <div class="form-group">
                    	<input type="hidden" name="id" >
                        <label id="preemail" class="sr-only" >Your email</label>
                        <input type="email" name="semail" class="form-control mr-md-1 semail" placeholder="Enter email" required>
                    </div>
                    <button type="submit" style="; background-color: brown;"  name="sub" class="btn btn-primary">Subscribe</button>
                    
                </form>
                <br> <br>
                <div class="login-logo" style="color: red;font-size: 20px;"  >
                <?php
                if (isset($_SESSION['enteremail'])) {
                  echo $_SESSION['enteremail'];
                  unset($_SESSION['enteremail']);
                }
                
                ?>
        </div>
		    </div><!--//container-->
	    </section>
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
	<script type="text/javascript"> 
	   	function preemail()
		{
			document.getElementById("preemail").style.color = "red";
		}
	 </script>