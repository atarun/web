<!DOCTYPE html>
	<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<title><? echo $title; ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- CSS -->
		<link rel="stylesheet" href="/common/css/default.css">
		<link rel="stylesheet" href="/common/css/layout2.css">
		<link rel="stylesheet" href="/common/css/media-queries.css">
		<link rel="stylesheet" href="/common/css/magnific-popup.css">
		
		<!-- Script -->
		<script src="/common/js/modernizr.js"></script>
		
		<!-- Favicons -->
		<link rel="shortcut icon" href="/common/favicon.png" >
	</head>
	<body>
		<!-- Header -->
		<header id="home">
			<nav id="nav-wrap">
				<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
				<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
				<ul id="nav" class="nav">
					<li class="current"><a class="smoothscroll" href="#home">Home</a></li>
					<li><a class="smoothscroll" href="#about">About</a></li>
					<li><a class="smoothscroll" href="#resume">Resume</a></li>
					<li><a class="smoothscroll" href="#portfolio">Works</a></li>
					<li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
					<li><a class="smoothscroll" href="#contact">Contact</a></li>
				</ul>
			</nav>

			<div class="row banner">
				<div class="banner-text">
					<h1 class="responsive-headline">I'm Jonathan Doe.</h1>
					<h3>I'm a Manila based <span>graphic designer</span>, <span>illustrator</span> and <span>webdesigner</span> creating awesome and
					effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
					and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
					<hr />
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-skype"></i></a></li>
					</ul>
				</div>
			</div>

			<p class="scrolldown">
				<a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
			</p>
		</header>
		
		<!-- Content -->
		<? echo $content; ?>
		
		<!-- footer -->
		<footer>
			<div class="row">
				<div class="twelve columns">
					<ul class="social-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-skype"></i></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Copyright 2014 CeeVee</li>
						<li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li> 
					</ul>
				</div>
				<div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>
			</div>
		</footer>
	
		<!-- Java Script -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/common/js/jquery-1.10.2.min.js"><\/script>')</script>
		<script type="text/javascript" src="/common/js/jquery-migrate-1.2.1.min.js"></script>
	
		<script src="/common/js/jquery.flexslider.js"></script>
		<script src="/common/js/waypoints.js"></script>
		<script src="/common/js/jquery.fittext.js"></script>
		<script src="/common/js/magnific-popup.js"></script>
		<script src="/common/js/init.js"></script>
	</body>
</html>