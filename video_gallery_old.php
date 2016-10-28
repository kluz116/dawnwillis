<?php   
        require 'administartor/connect.php'; 
       require 'administartor/config.inc.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Video Gallery | Dawn Wills Ministries International</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.html">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
	

	<link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
	<link rel='stylesheet' href='unitegallery/themes/video/skin-right-thumb.css' type='text/css' />

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		

		<!-- the project core CSS file -->
		<link href="css/style.css" rel="stylesheet" >


		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
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
		
			<!-- header-container start -->
			<div class="header-container">
				
				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top colored ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
										<li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com/"><i class="fa fa-skype"></i></a></li>
												<li class="youtube"><a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
												
												<li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
												
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>Kiira Road Kamwokya Opp Mahidira</li>
										<li><i class="fa fa-phone pr-5 pl-10"></i>+256 781 893 085</li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> info@dawnwillisministries.org</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed dark  clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<a href=""><img id="logo_img" src="images/logo_gold.png" alt="The Project"></a>
									</div>

									<!-- name-and-slogan -->
									<div class="site-slogan">
									  <strong>Dawn Willis Ministries International</strong>
									</div>
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">

												<!-- main-menu -->
												<ul class="nav navbar-nav">
												</ul>
												<ul class="nav navbar-nav navbar-right">

													
											
												
												     <li>
														<a href="index">Home</a>
													</li>
													<li>
														<a href="devotions">Devotions</a>
													</li>

												    <li>
														<a href="events">Events</a>	
													</li>
													<li>
														<a href="gallery">Gallery</a>	
													</li>
													<li>
														<a href="video_gallery">Videos</a>	
													</li>
													<li>
														<a href="aboutus">About</a>
													</li>
													<li>
														<a href="contactus">Contact</a>	
													</li>
												
												</ul>
												<!-- main-menu end -->
												
												
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->	
								</div>
								<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
		
			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="index">Home</a></li>
						<li class="active">Videos</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			
			<section class="main-container padding-bottom-clear">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<div id="gallery" style="display:none;">
	
			<div data-type="youtube"
				 data-title="Waimea cliff jump"
				 data-description="Waimea cliff jump description"
				 data-thumb="https://i.ytimg.com/vi/sogCtOe8FFY/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/sogCtOe8FFY/sddefault.jpg"
			     data-videoid="sogCtOe8FFY" ></div>

			
			<div data-type="youtube"
				 data-title="slip and slide -1000 feet"
				 data-description="slip and slide -1000 feet description"
				 data-thumb="https://i.ytimg.com/vi/fvvoVD_5PHE/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/fvvoVD_5PHE/sddefault.jpg"
			     data-videoid="fvvoVD_5PHE" ></div>

			
			<div data-type="youtube"
				 data-title="Cliff Slip and Slide!"
				 data-description="Cliff Slip and Slide description"
				 data-thumb="https://i.ytimg.com/vi/sXk2AbdTe68/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/sXk2AbdTe68/sddefault.jpg"
			     data-videoid="sXk2AbdTe68" ></div>

			
			<div data-type="youtube"
				 data-title="Epic Hot Air Balloon Rope Swing"
				 data-description="Epic Hot Air Balloon Rope description"
				 data-thumb="https://i.ytimg.com/vi/KEoXn34ilKY/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/KEoXn34ilKY/sddefault.jpg"
			     data-videoid="KEoXn34ilKY" ></div>

			
			<div data-type="youtube"
				 data-title="BMX Rodeo at 1000 FPS"
				 data-description="BMX Rodeo at 1000 FPS description"
				 data-thumb="https://i.ytimg.com/vi/rUi3X3G63dg/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/rUi3X3G63dg/sddefault.jpg"
			     data-videoid="rUi3X3G63dg" ></div>

			
			<div data-type="youtube"
				 data-title="Nepal - Adventures of Teamsupertramp"
				 data-description="Nepal - Adventures of description"
				 data-thumb="https://i.ytimg.com/vi/oc1HDF2AyNE/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/oc1HDF2AyNE/sddefault.jpg"
			     data-videoid="oc1HDF2AyNE" ></div>

			
			<div data-type="youtube"
				 data-title="Hoverboard in Real Life! In 4K!"
				 data-description="Hoverboard in Real Life! In 4K! description"
				 data-thumb="https://i.ytimg.com/vi/gMaDhkNJA2g/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/gMaDhkNJA2g/sddefault.jpg"
			     data-videoid="gMaDhkNJA2g" ></div>

			
			<div data-type="youtube"
				 data-title="Surfing Indoors! Flow Riding in 4K!"
				 data-description="Surfing Indoors! Flow Riding description"
				 data-thumb="https://i.ytimg.com/vi/FWN08M0kg4c/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/FWN08M0kg4c/sddefault.jpg"
			     data-videoid="FWN08M0kg4c" ></div>

			
			<div data-type="youtube"
				 data-title="Bike Parkour -Streets of San Francisco!"
				 data-description="Bike Parkour -Streets of description"
				 data-thumb="https://i.ytimg.com/vi/K9XCKP9KN7A/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/K9XCKP9KN7A/sddefault.jpg"
			     data-videoid="K9XCKP9KN7A" ></div>

			
			<div data-type="youtube"
				 data-title="Parkour, Cops, and Donuts in 4K"
				 data-description="Parkour, Cops, and description"
				 data-thumb="https://i.ytimg.com/vi/2dv4IP4Jd9w/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/2dv4IP4Jd9w/sddefault.jpg"
			     data-videoid="2dv4IP4Jd9w" ></div>

			
			<div data-type="youtube"
				 data-title="YoYo Kid - World's Best YoYo Champion"
				 data-description="YoYo Kid - World's Best YoYo description"
				 data-thumb="https://i.ytimg.com/vi/uHEs5JRFEUU/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/uHEs5JRFEUU/sddefault.jpg"
			     data-videoid="uHEs5JRFEUU" ></div>

			
			<div data-type="youtube"
				 data-title="Cliff Jumping Hawaii - Proof"
				 data-description="Cliff Jumping Hawaii - Proof description"
				 data-thumb="https://i.ytimg.com/vi/vSROSencBss/mqdefault.jpg"
				 data-image="https://i.ytimg.com/vi/vSROSencBss/sddefault.jpg"
			     data-videoid="vSROSencBss" ></div>			 
	         </div><br><br>
				


						</div>
						<!-- main end -->

						

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
										<div class="logo-footer"><img id="logo-footer" src="images/logo_gold.png" alt=""></div>
										<div class="row">
											<div class="col-md-6">
												<p>Bishop Dr. Dawn Willis is an internationally acclaimed motivation speaker,author,mentor and mother.Indeed she is a lady with many hats, humble and very resilent in her service for the Lord Jesus Christ. She is the founder and mother of Dawn Willis Ministries International and prevailing Truth World Outreach ministries international.</p>
												<ul class="social-links circle animated-effect-1">
													<li class="facebook"><a target="_blank" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
													<li class="twitter"><a target="_blank" href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
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
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="js/add_parish.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>
		<!-- Google Maps javascript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
		<script type="text/javascript" src="js/google.map.config.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
		
	<script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
	<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
	   <script type='text/javascript' src='unitegallery/themes/video/ug-theme-video.js'></script>
		<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery("#gallery").unitegallery();

		});
		
	</script>
		
	</body>


</html>
