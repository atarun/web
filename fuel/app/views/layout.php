<!DOCTYPE html>
	<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="ja"> <![endif]-->
	<!--[if IE 8 ]><html class="no-js ie ie8" lang="ja"> <![endif]-->
	<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="ja"> <!--<![endif]-->
	<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<title><? echo $title; ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- JavaScript -->
		<!--[if lte IE 8]><script src="/common/js/ie/html5shiv.js"></script><![endif]-->
		
		<!-- CSS -->
		<link rel="stylesheet" href="/common/css/main.css" />
		<link rel="stylesheet" href="/common/css/layout.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="/common/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/common/css/ie9.css" /><![endif]-->
		
		<!-- Favicons -->
<!-- 		<link rel="shortcut icon" href="/common/favicon.png" > -->
	</head>
	<body>
<!-- Header -->
		<div id="header">
			<div class="top">
			
				<!-- Logo -->
				<div id="logo">
					<span class="image avatar48"><img src="/common/images/ripman.png" alt="" /></span>
					<h1 id="title">ATARUN</h1>
					<p>System Engineer</p>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<!--
						Prologue's nav expects links in one of two formats:
						1. Hash link (scrolls to a different section within the page)
						   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>
						2. Standard link (sends the user to another page/site)
						   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
					-->
					<ul>
						<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
						<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
						<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
						<li><a href="#skill" id="skill-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Skill</span></a></li>
						<li><a href="#work" id="work-link" class="skel-layers-ignoreHref"><span class="icon fa-laptop">Work</span></a></li>
						<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
					</ul>
				</nav>
			</div>

			<div class="bottom">
				<!-- Social Icons -->
				<ul class="icons">
					<li><a href="https://twitter.com/atarun0896" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/ataru.sugita" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://github.com/atarun" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
			</div>
		</div>
		
		<div id="headerToggle">
			<a href="#header" class="toggle"></a>
		</div>
		
		<!-- Content -->
		<? echo $content; ?>

		<!-- Footer -->
		<div id="footer">
			<!-- Copyright -->
			<ul class="copyright">
				<li>&copy; Untitled. All rights reserved.</li><li>ATARUN</li>
			</ul>
		</div>
		
		<!-- Java Script -->
		<script src="/common/js/jquery.min.js"></script>
		<script src="/common/js/jquery.scrolly.min.js"></script>
		<script src="/common/js/jquery.scrollzer.min.js"></script>
		<script src="/common/js/skel.min.js"></script>
		<script src="/common/js/util.js"></script>
		<!--[if lte IE 8]><script src="/common/js/ie/respond.min.js"></script><![endif]-->
		<script src="/common/js/main.js"></script>
	</body>
</html>