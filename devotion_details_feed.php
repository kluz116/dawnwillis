<?php   
       require 'administartor/config.inc.php'; 
       require 'administartor/connect.php'; 

?>
<?php

	try{
		$id = $_GET['id'];

		 
		 $date =$dbh->prepare("select * from contents where category ='Devotions' and id='".$id."'");
		 $date->execute();
		 while ($row= $date->fetch(PDO::FETCH_ASSOC)) {

		 	$content = $row['content'];
		 	$datee = $row['date'];
		 	$addedBy = $row['addedBy'];
		 	$heading = $row['heading'];
		 	
		 
	


?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	
<!-- Mirrored from htmlcoder.me/preview/the_project/v.1.1/template/page-about-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2016 13:48:16 GMT -->
<head>
		<meta charset="utf-8">
		<title><?php echo $heading?></title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.html">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo BASE_URL;?>/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo BASE_URL;?>/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php echo BASE_URL;?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="<?php echo BASE_URL;?>/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php echo BASE_URL;?>/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?php echo BASE_URL;?>/css/animations.css" rel="stylesheet">
		<link href="<?php echo BASE_URL;?>/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo BASE_URL;?>/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="<?php echo BASE_URL;?>/plugins/hover/hover-min.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="<?php echo BASE_URL;?>/css/style.css" rel="stylesheet" >


		<!-- Custom css --> 
		<link href="<?php echo BASE_URL;?>/css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans   ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
				<!-- header-top end -->
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				
			
			<section class="main-container padding-bottom-clear">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

					
							<h1 class="page-title"><?php echo $heading?></h1>

							<!-- blogpost start -->
							<!-- ================ -->
							<article class="blogpost full">
								<header>
									<div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="month"><?php echo $datee?></span>
										</span>
										<span class="submitted"><i class="icon-user-1"></i><a href="#"><?php echo $addedBy?></a></span>
									</div>
								</header>
								<div class="blogpost-content">
									
									<?php

                                      echo $content;
                                   ?>
								</div>
								<footer class="clearfix">
									
									<div class="link pull-left">
										<ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</footer>
							</article>
							<!-- blogpost end -->


						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Dawn Willis Ministries</h3>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="index.html">Home</a></li>
											<li class="active"><a href="blog-large-image-right-sidebar.html">Devotions</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="aboutus.html">About</a></li>
											<li><a href="contactus.html">Contact</a></li>
										</ul>
									</nav>
								</div>
								
														
								
								
								<div class="block clearfix">
									<h3 class="title">Devotions</h3>
									
				
									
									<?php
										 
                                          $dbo = new Config();
                                           $dbo->getDevotionsList();
                      
                  
									?>
									
								</div>
															
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- main-container end -->
			
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
          <footer id="footer" class="clearfix dark ">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-8">
									<div class="footer-content">
										<div class="logo-footer"><img id="logo-footer" src="<?php echo BASE_URL;?>/images/logo_gold.png" alt=""></div>
										<div class="row">
											<div class="col-md-6">
												<p>Bishop Dr. Dawn Willis is an internationally acclaimed motivation speaker,author,mentor and mother.Indeed she is a lady with many hats, humble and very resilent in her service for the Lord Jesus Christ. She is the founder and mother of Dawn Willis Ministries International and prevailing Truth World Outreach ministries international.</p>
												<ul class="social-links circle animated-effect-1">
													<li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
													<li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
													<li class="skype"><a target="_blank" href="http://www.skype.com/"><i class="fa fa-skype"></i></a></li>
													<li class="youtube"><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
												</ul>
												<ul class="list-icons">
													<li><i class="fa fa-map-marker pr-10 text-default"></i> Kiira Road Kamwokya Opp Mahidira </li>
													<li><i class="fa fa-phone pr-10 text-default"></i> +256 781 893 085</li>
													<li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>info@dawnwillisministries.org</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<div id="map-canvas"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="footer-content">
										<h2 class="title">Contact Us</h2>
										<br>
										<div class="alert alert-success hidden" id="MessageSent2">
											We have received your message, we will contact you very soon.
										</div>
										<div class="alert alert-danger hidden" id="MessageNotSent2">
											Oops! Something went wrong please refresh the page and try again.
										</div>								
									
										<strong><div id="response"></div></strong>
											<div class="form-group has-feedback">
												<label class="sr-only" for="name2">Name</label>
												<input type="text" class="form-control" id="name" placeholder="Name">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label class="sr-only" for="email2">Email address</label>
												<input type="email" class="form-control" id="email" placeholder="Enter email" >
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label class="sr-only" for="message2">Message</label>
												<textarea class="form-control" rows="6" id="message" placeholder="Message"></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" id="addContact" value="Send" class="margin-clear submit-button btn btn-default">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center">Copyright © 2016 Dawn Wills Ministries International. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
		
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>/js/add_parish.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/modernizr.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="<?php echo BASE_URL;?>/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>
		<!-- Google Maps javascript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>/js/google.map.config.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL;?>/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="<?php echo BASE_URL;?>/js/custom.js"></script>
		
	</body>
	<?php

	 }
	}catch(PDOException $e){

		trigger_error('Errors :'.$e->getMessage());

	}


	?>

</html>
