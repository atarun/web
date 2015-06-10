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
		<link rel="stylesheet" href="/common/css/layout.css">
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
		
		<!-- About Section -->
		<section id="about">
			<div class="row">
				<div class="three columns">
					<img class="profile-pic"  src="/common/images/profilepic.jpg" alt="" />
				</div>
				<div class="nine columns main-col">

					<h2>About Me</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
					eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
					voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
					voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
					sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
					Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
					</p>

					<div class="row">
						<div class="columns contact-details">
							<h2>Contact Details</h2>
							<p class="address">
								<span>Jonathan Doe</span><br>
								<span>1600 Amphitheatre Parkway<br>
								Mountain View, CA 94043 US
								</span><br>
								<span>(123)456-7890</span><br>
								<span>anyone@website.com</span>
							</p>
						</div>
	
						<div class="columns download">
							<p>
								<a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<? echo $content; ?>
	</body>
</html>