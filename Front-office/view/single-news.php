<?php

	include ('../controller/crudBlog.php');
	include ('../model/blogs.php');
	$crud = new crudBlog();
	$responseS= $crud->recupererBlog($_GET['id'] ,$crud->conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single News</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/logo.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <?php 
	include_once('preloader.php');
	?>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php 
	include_once('header.php');
	?>
	<!-- end header -->

	<!-- search area -->
	<?php 
	include_once('search_area.php');
	?>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Read the Details</p>
						<h1>Single Article</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
					<?php 
			            while($row = $responseS->fetch())
			            {
			            ?>
					    <div class="single-article-text">
							<div class="single-artcile-bg"> <img src="<?php echo $row["image_blog"] ?>"> </div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> <?php echo $row['date_blog'] ?> </span>
							</p>
							<h2> <?php echo $row['nom_blog'] ?> </h2>
							<p> <?php echo $row['contenu_blog'] ?> </p>
						</div>
						<?php 
						}
						?>

						<div class="comments-list-wrap">
							<h3 class="comment-count-title">3 Comments</h3>
							<div class="comment-list">
								<div class="single-comment-body">
									<div class="comment-user-avater">
										<img src="../assets/img/avaters/avatar1.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>Jenny Joe <span class="comment-date">Aprl 26, 2020</span> <a href="#">reply</a></h4>
										<p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
									</div>
									<div class="single-comment-body child">
										<div class="comment-user-avater">
											<img src="../assets/img/avaters/avatar3.png" alt="">
										</div>
										<div class="comment-text-body">
											<h4>Simon Soe <span class="comment-date">Aprl 27, 2020</span> <a href="#">reply</a></h4>
											<p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
										</div>
									</div>
								</div>
								<div class="single-comment-body">
									<div class="comment-user-avater">
										<img src="../assets/img/avaters/avatar2.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>Addy Aoe <span class="comment-date">May 12, 2020</span> <a href="#">reply</a></h4>
										<p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="comment-template">
							<h4>Leave a comment</h4>
							<p>If you have a comment dont feel hesitate to send us your opinion.</p>
							<form action="../helpers/ajouterComment.php" method="post">
								<!--<p>
									<input type="text" placeholder="Your Name">
								</p> -->
								<p><textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Your Message"></textarea></p>
								<p><input type="submit" value="Submit"></p>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
								<li><a href="single-news.php">Nasa program for the upcoming year.</a></li>
								<li><a href="single-news.php">SpaceX latest achievement.</a></li>
								<li><a href="single-news.php">Mars latest discovery</a></li>
								<li><a href="single-news.php">International Space Station</a></li>
								<li><a href="single-news.php">Did Nasa really land on the moon</a></li>
							</ul>
						</div>
						<div class="archive-posts">
							<h4>Archive Posts</h4>
							<ul>
								<li><a href="single-news.php">JAN 2019 (5)</a></li>
								<li><a href="single-news.php">FEB 2019 (3)</a></li>
								<li><a href="single-news.php">MAY 2019 (4)</a></li>
								<li><a href="single-news.php">SEP 2019 (4)</a></li>
								<li><a href="single-news.php">DEC 2019 (3)</a></li>
							</ul>
						</div>
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="single-news.php">Nasa</a></li>
								<li><a href="single-news.php">SpaceX</a></li>
								<li><a href="single-news.php">ISS</a></li>
								<li><a href="single-news.php">Space Tourism</a></li>
								<li><a href="single-news.php">General Information</a></li>
								<li><a href="single-news.php">lates nwzs 
								<li><a href="single-news.php">Latest news</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->

	<!-- logo carousel -->
	<?php 
	include_once('logo_carousel.php');
	?>
	<!-- end logo carousel -->

	<!-- footer -->
	<?php 
	include_once('footer.php');
	?>
	<!-- end footer -->
	
	<!-- copyright -->
	<?php 
	include_once('copyright.php');
	?>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>

</body>
</html>