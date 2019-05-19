<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="<?php echo base_url() ?>assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php echo base_url() ?>assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url() ?>assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- SWIE SLIDER -->
		<link href="<?php echo base_url() ?>assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="smoothscroll enable-animation">


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar" class="text-center padding-20">

				<!-- Logo -->
				<a class="logo" href="index.html">
					<img src="assets/images/logo_dark.png" alt="" />
				</a>

			</div>
			<!-- /Top Bar -->

			<div id="header" class="sticky header-sm clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner">2</span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								<div class="quick-cart-box">
									<h4>Shop Cart</h4>

									<div class="quick-cart-wrapper">

										<a href="#"><!-- cart item -->
											<img src="assets/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
											<small>$37.21</small>
										</a><!-- /cart item -->

										<a href="#"><!-- cart item -->
											<img src="assets/images/demo/people/300x300/5-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
											<small>$17.18</small>
										</a><!-- /cart item -->

										<!-- cart no items example -->
										<!--
										<a class="text-center" href="#">
											<h6>0 ITEMS ON YOUR CART</h6>
										</a>
										-->

									</div>

									<!-- quick cart footer -->
									<div class="quick-cart-footer clearfix">
										<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
										<span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
									</div>
									<!-- /quick cart footer -->

								</div>
							</li>
							<!-- /QUICK SHOP CART -->

						</ul>
						<!-- /BUTTONS -->

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-left nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											HOME
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME CORPORATE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-corporate-1.html">CORPORATE LAYOUT 1</a></li>
													<li><a href="index-corporate-2.html">CORPORATE LAYOUT 2</a></li>
													<li><a href="index-corporate-3.html">CORPORATE LAYOUT 3</a></li>
													<li><a href="index-corporate-4.html">CORPORATE LAYOUT 4</a></li>
													<li><a href="index-corporate-5.html">CORPORATE LAYOUT 5</a></li>
													<li><a href="index-corporate-6.html">CORPORATE LAYOUT 6</a></li>
													<li><a href="index-corporate-7.html">CORPORATE LAYOUT 7</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME PORTFOLIO
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-portfolio-1.html">PORTFOLIO LAYOUT 1</a></li>
													<li><a href="index-portfolio-2.html">PORTFOLIO LAYOUT 2</a></li>
													<li><a href="index-portfolio-masonry.html">PORTFOLIO MASONRY</a></li>
												</ul>
											</li>
											<li class="dropdown active">
												<a class="dropdown-toggle" href="#">
													HOME BLOG
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-blog-1.html">BLOG LAYOUT 1</a></li>
													<li><a href="index-blog-2.html">BLOG LAYOUT 2</a></li>
													<li class="active"><a href="index-blog-3.html">BLOG LAYOUT 3</a></li>
													<li><a href="index-blog-4.html">BLOG LAYOUT 4</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME SHOP
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-shop-1.html">SHOP LAYOUT 1</a></li>
													<li><a href="index-shop-2.html">SHOP LAYOUT 2</a></li>
													<li><a href="index-shop-3.html">SHOP LAYOUT 3</a></li>
													<li><a href="index-shop-4.html">SHOP LAYOUT 4</a></li>
													<li><a href="index-shop-5.html">SHOP LAYOUT 5</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME MAGAZINE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-magazine-1.html">MAGAZINE LAYOUT 1</a></li>
													<li><a href="index-magazine-2.html">MAGAZINE LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME LANDING PAGE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-landing-1.html">LANDING PAGE LAYOUT 1</a></li>
													<li><a href="index-landing-2.html">LANDING PAGE LAYOUT 2</a></li>
													<li><a href="index-landing-3.html">LANDING PAGE LAYOUT 3</a></li>
													<li><a href="index-landing-4.html">LANDING PAGE LAYOUT 4</a></li>
													<li><a href="index-landing-5.html">LANDING PAGE LAYOUT 5</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME FULLSCREEN
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-fullscreen-revolution.html">FULLSCREEN - REVOLUTION</a></li>
													<li><a href="index-fullscreen-youtube.html">FULLSCREEN - YOUTUBE</a></li>
													<li><a href="index-fullscreen-local-video.html">FULLSCREEN - LOCAL VIDEO</a></li>
													<li><a href="index-fullscreen-image.html">FULLSCREEN - IMAGE</a></li>
													<li><a href="index-fullscreen-txt-rotator.html">FULLSCREEN - TEXT ROTATOR</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME ONE PAGE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-onepage-default.html">ONE PAGE - DEFAULT</a></li>
													<li><a href="index-onepage-revolution.html">ONE PAGE - REVOLUTION</a></li>
													<li><a href="index-onepage-image.html">ONE PAGE - IMAGE</a></li>
													<li><a href="index-onepage-parallax.html">ONE PAGE - PARALLAX</a></li>
													<li><a href="index-onepage-youtube.html">ONE PAGE - YOUTUBE</a></li>
													<li><a href="index-onepage-text-rotator.html">ONE PAGE - TEXT ROTATOR</a></li>
													<li><a href="start.html#onepage"><span class="label label-success pull-right">new</span> 10+ MORE LAYOUTS</a></li>
												</ul>
											</li>
											<li class="divider"></li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME - THEMATICS <i class="fa fa-heart margin-left-10"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-thematics-restaurant.html">HOME - RESTAURANT</a></li>
													<li><a href="index-thematics-music.html">HOME - MUSIC/BAND</a></li>
													<li><a href="index-thematics-education.html">HOME - EDUCATION</a></li>
													<li><a href="index-thematics-construction.html">HOME - CONSTRUCTION</a></li>
													<li><a href="index-thematics-medical.html">HOME - MEDICAL</a></li>
													<li><a href="index-thematics-church.html">HOME - CHURCH</a></li>
													<li><a href="index-thematics-fashion.html">HOME - FASHION</a></li>
													<li><a href="index-thematics-wedding.html">HOME - WEDDING</a></li>
													<li><a href="index-thematics-events.html">HOME - EVENTS</a></li>
													<li><a href="index-thematics-hosting.html">HOME - HOSTING</a></li>
													<li><a href="index-thematics-lawyer.html">HOME - LAWYER</a></li>
												<li><a href="http://www.stepofweb.com/propose-design.html" data-toggle="tooltip" data-placement="top" title="Do you need a specific home design? We can include it in the next update!" target="_blank"><span class="label label-danger pull-right">hot</span> PROPOSE THEMATIC</a></li>
												</ul>
											</li>
											<li class="divider"></li>
											<li><a href="start.html#newrevslider" data-toggle="tooltip" data-placement="top" title="39 More Revolution Slider V5"><span class="label label-danger pull-right">new</span> 39 MORE LAYOUTS</a></li>
											<li class="divider"></li>
											<li><a href="index-simple-revolution.html">HOME SIMPLE - REVOLUTION</a></li>
											<li><a href="index-simple-layerslider.html">HOME SIMPLE - LAYERSLIDER</a></li>
											<li><a href="index-simple-parallax.html">HOME SIMPLE - PARALLAX</a></li>
											<li><a href="index-simple-youtube.html">HOME SIMPLE - YOUTUBE</a></li>
										</ul>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											PAGES
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ABOUT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-about-us-1.html">ABOUT US - LAYOUT 1</a></li>
													<li><a href="page-about-us-2.html">ABOUT US - LAYOUT 2</a></li>
													<li><a href="page-about-us-3.html">ABOUT US - LAYOUT 3</a></li>
													<li><a href="page-about-us-4.html">ABOUT US - LAYOUT 4</a></li>
													<li><a href="page-about-us-5.html">ABOUT US - LAYOUT 5</a></li>
													<li><a href="page-about-me-1.html">ABOUT ME - LAYOUT 1</a></li>
													<li><a href="page-about-me-2.html">ABOUT ME - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													TEAM
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-team-1.html">TEAM - LAYOUT 1</a></li>
													<li><a href="page-team-2.html">TEAM - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SERVICES
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-services-1.html">SERVICES - LAYOUT 1</a></li>
													<li><a href="page-services-2.html">SERVICES - LAYOUT 2</a></li>
													<li><a href="page-services-3.html">SERVICES - LAYOUT 3</a></li>
													<li><a href="page-services-4.html">SERVICES - LAYOUT 4</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													FAQ
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-faq-1.html">FAQ - LAYOUT 1</a></li>
													<li><a href="page-faq-2.html">FAQ - LAYOUT 2</a></li>
													<li><a href="page-faq-3.html">FAQ - LAYOUT 3</a></li>
													<li><a href="page-faq-4.html">FAQ - LAYOUT 4</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CONTACT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-contact-1.html">CONTACT - LAYOUT 1</a></li>
													<li><a href="page-contact-2.html">CONTACT - LAYOUT 2</a></li>
													<li><a href="page-contact-3.html">CONTACT - LAYOUT 3</a></li>
													<li><a href="page-contact-4.html">CONTACT - LAYOUT 4</a></li>
													<li><a href="page-contact-5.html">CONTACT - LAYOUT 5</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ERROR
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-404-1.html">ERROR 404 - LAYOUT 1</a></li>
													<li><a href="page-404-2.html">ERROR 404 - LAYOUT 2</a></li>
													<li><a href="page-404-3.html">ERROR 404 - LAYOUT 3</a></li>
													<li><a href="page-404-4.html">ERROR 404 - LAYOUT 4</a></li>
													<li><a href="page-404-5.html">ERROR 404 - LAYOUT 5</a></li>
													<li><a href="page-404-6.html">ERROR 404 - LAYOUT 6</a></li>
													<li><a href="page-404-7.html">ERROR 404 - LAYOUT 7</a></li>
													<li><a href="page-404-8.html">ERROR 404 - LAYOUT 8</a></li>
													<li class="divider"></li>
													<li><a href="page-500-1.html">ERROR 500 - LAYOUT 1</a></li>
													<li><a href="page-500-2.html">ERROR 500 - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SIDEBAR
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-sidebar-left.html">SIDEBAR LEFT</a></li>
													<li><a href="page-sidebar-right.html">SIDEBAR RIGHT</a></li>
													<li><a href="page-sidebar-both.html">SIDEBAR BOTH</a></li>
													<li><a href="page-sidebar-no.html">NO SIDEBAR</a></li>
													<li class="divider"></li>
													<li><a href="page-sidebar-dark-left.html">SIDEBAR LEFT - DARK</a></li>
													<li><a href="page-sidebar-dark-right.html">SIDEBAR RIGHT - DARK</a></li>
													<li><a href="page-sidebar-dark-both.html">SIDEBAR BOTH - DARK</a></li>
													<li><a href="page-sidebar-dark-no.html">NO SIDEBAR - DARK</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													LOGIN/REGISTER
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-login-1.html">LOGIN - LAYOUT 1</a></li>
													<li><a href="page-login-2.html">LOGIN - LAYOUT 2</a></li>
													<li><a href="page-login-3.html">LOGIN - LAYOUT 3</a></li>
													<li><a href="page-login-4.html">LOGIN - LAYOUT 4</a></li>
													<li><a href="page-login-5.html">LOGIN - LAYOUT 5</a></li>
													<li><a href="page-login-register-1.html">LOGIN + REGISTER 1</a></li>
													<li><a href="page-login-register-2.html">LOGIN + REGISTER 2</a></li>
													<li><a href="page-login-register-3.html">LOGIN + REGISTER 3</a></li>
													<li><a href="page-register-1.html">REGISTER - LAYOUT 1</a></li>
													<li><a href="page-register-2.html">REGISTER - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													CLIENTS
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-clients-1.html">CLIENTS 1 - SIDEBAR RIGHT</a></li>
													<li><a href="page-clients-2.html">CLIENTS 1 - SIDEBAR LEFT</a></li>
													<li><a href="page-clients-3.html">CLIENTS 1 - FULLWIDTH</a></li>
													<li class="divider"></li>
													<li><a href="page-clients-4.html">CLIENTS 2 - SIDEBAR RIGHT</a></li>
													<li><a href="page-clients-5.html">CLIENTS 2 - SIDEBAR LEFT</a></li>
													<li><a href="page-clients-6.html">CLIENTS 2 - FULLWIDTH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													SEARCH RESULT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-search-result-1.html">LAYOUT 1 - LEFT SIDEBAR</a></li>
													<li><a href="page-search-result-2.html">LAYOUT 1 - RIGHT SIDEBAR</a></li>
													<li><a href="page-search-result-3.html">LAYOUT 1 - FULLWIDTH</a></li>
													<li class="divider"></li>
													<li><a href="page-search-result-4.html">LAYOUT 2 - LEFT SIDEBAR</a></li>
													<li><a href="page-search-result-5.html">LAYOUT 2 - RIGHT SIDEBAR</a></li>
													<li class="divider"></li>
													<li><a href="page-search-result-6.html">LAYOUT 3 - TABLE SEARCH</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													PROFILE
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-profile.html">USER PROFILE</a></li>
													<li><a href="page-profile-projects.html">USER PROJECTS</a></li>
													<li><a href="page-profile-comments.html">USER COMMENTS</a></li>
													<li><a href="page-profile-history.html">USER HISTORY</a></li>
													<li><a href="page-profile-settings.html">USER SETTINGS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													MAINTENANCE
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-maintenance-1.html">MAINTENANCE - LAYOUT 1</a></li>
													<li><a href="page-maintenance-2.html">MAINTENANCE - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													COMING SOON
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-coming-soon-1.html">COMING SOON - LAYOUT 1</a></li>
													<li><a href="page-coming-soon-2.html">COMING SOON - LAYOUT 2</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													FORUM
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-forum-home.html">FORUM - HOME</a></li>
													<li><a href="page-forum-topic.html">FORUM - TOPIC</a></li>
													<li><a href="page-forum-post.html">FORUM - POST</a></li>
												</ul>
											</li>
											<li><a href="page-careers.html">CAREERS</a></li>
											<li><a href="page-sitemap.html">SITEMAP</a></li>
											<li><a href="page-blank.html">BLANK PAGE</a></li>
										</ul>
									</li>
									<li class="dropdown"><!-- FEATURES -->
										<a class="dropdown-toggle" href="#">
											FEATURES
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-browser"></i> SLIDERS
												</a>
												<ul class="dropdown-menu">
													<li>
														<a class="dropdown-toggle" href="#">REVOLUTION SLIDER 4.x</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-revolution-fullscreen.html">FULLSCREEN</a></li>
															<li><a href="feature-slider-revolution-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-revolution-fixedwidth.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-revolution-kenburns.html">KENBURNS EFFECT</a></li>
															<li><a href="feature-slider-revolution-videobg.html">HTML5 VIDEO</a></li>
															<li><a href="feature-slider-revolution-captions.html">CAPTIONS</a></li>
															<li><a href="feature-slider-revolution-smthumb.html">THUMB SMALL</a></li>
															<li><a href="feature-slider-revolution-lgthumb.html">THUMB LARGE</a></li>
															<li class="divider"></li>
															<li><a href="feature-slider-revolution-prev1.html">NAV PREVIEW 1</a></li>
															<li><a href="feature-slider-revolution-prev2.html">NAV PREVIEW 2</a></li>
															<li><a href="feature-slider-revolution-prev3.html">NAV PREVIEW 3</a></li>
															<li><a href="feature-slider-revolution-prev4.html">NAV PREVIEW 4</a></li>
															<li><a href="feature-slider-revolution-prev0.html">NAV THEME DEFAULT</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">LAYER SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-layer-fullwidth.html">FULLWIDTH</a></li>
															<li><a href="feature-slider-layer-fixed.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-layer-captions.html">CAPTIONS</a></li>
															<li><a href="feature-slider-layer-carousel.html">CAROUSEL</a></li>
															<li><a href="feature-slider-layer-2d3d.html">2D &amp; 3D TRANSITIONS</a></li>
															<li><a href="feature-slider-layer-thumb.html">THUMB NAV</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">FLEX SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-flexslider-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-flexslider-content.html">CONTENT</a></li>
															<li><a href="feature-slider-flexslider-thumbs.html">WITH THUMBS</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">OWL SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-owl-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-owl-fixed.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-owl-fixed+progress.html">FIXED + PROGRESS</a></li>
															<li><a href="feature-slider-owl-carousel.html">BASIC CAROUSEL</a></li>
															<li><a href="feature-slider-owl-fade.html">EFFECT - FADE</a></li>
															<li><a href="feature-slider-owl-backslide.html">EFFECT - BACKSLIDE</a></li>
															<li><a href="feature-slider-owl-godown.html">EFFECT - GODOWN</a></li>
															<li><a href="feature-slider-owl-fadeup.html">EFFECT - FADE UP</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">SWIPE SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-swipe-full.html">FULLSCREEN</a></li>
															<li><a href="feature-slider-swipe-fixed-height.html">FIXED HEIGHT</a></li>
															<li><a href="feature-slider-swipe-autoplay.html">AUTOPLAY</a></li>
															<li><a href="feature-slider-swipe-fade.html">FADE TRANSITION</a></li>
															<li><a href="feature-slider-swipe-slide.html">SLIDE TRANSITION</a></li>
															<li><a href="feature-slider-swipe-coverflow.html">COVERFLOW TRANSITION</a></li>
															<li><a href="feature-slider-swipe-html5-video.html">HTML5 VIDEO</a></li>
															<li><a href="feature-slider-swipe-3columns.html">3 COLUMNS</a></li>
															<li><a href="feature-slider-swipe-4columns.html">4 COLUMNS</a></li>
														</ul>
													</li>
													<li><a href="feature-slider-nivo.html">NIVO SLIDER</a></li>
													<li><a href="feature-slider-camera.html">CAMERA SLIDER</a></li>
													<li><a href="feature-slider-elastic.html">ELASTIC SLIDER</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-hotairballoon"></i> HEADERS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-header-light.html">HEADER - LIGHT</a></li>
													<li><a href="feature-header-dark.html">HEADER - DARK</a></li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - HEIGHT</a>
														<ul class="dropdown-menu">
														<li><a href="feature-header-large.html">LARGE (96px)</a></li>
														<li><a href="feature-header-medium.html">MEDIUM (70px)</a></li>
														<li><a href="feature-header-small.html">SMALL (60px)</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - SHADOW</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-shadow-after-1.html">SHADOW 1 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-1.html">SHADOW 1 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-after-2.html">SHADOW 2 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-2.html">SHADOW 2 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-after-3.html">SHADOW 3 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-3.html">SHADOW 3 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-dark-1.html">SHADOW - DARK PAGE EXAMPLE</a></li>
														</ul>
													</li>
													<li><a href="feature-header-transparent.html">HEADER - TRANSPARENT</a></li>
													<li><a href="feature-header-transparent-line.html">HEADER - TRANSP+LINE</a></li>
													<li><a href="feature-header-translucent.html">HEADER - TRANSLUCENT</a></li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - BOTTOM</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-bottom-light.html">BOTTOM LIGHT</a></li>
															<li><a href="feature-header-bottom-dark.html">BOTTOM DARK</a></li>
															<li><a href="feature-header-bottom-transp.html">BOTTOM TRANSPARENT</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - LEFT SIDE</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-side-left-1.html">FIXED</a></li>
															<li><a href="feature-header-side-left-2.html">OPEN ON CLICK</a></li>
															<li><a href="feature-header-side-left-3.html">DARK</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - RIGHT SIDE</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-side-right-1.html">FIXED</a></li>
															<li><a href="feature-header-side-right-2.html">OPEN ON CLICK</a></li>
															<li><a href="feature-header-side-right-3.html">DARK</a></li>
														</ul>
													</li>													<li>
														<a class="dropdown-toggle" href="#">HEADER - STATIC</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-static-top-light.html">STATIC TOP - LIGHT</a></li>
															<li><a href="feature-header-static-top-dark.html">STATIC TOP - DARK</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-static-bottom-light.html">STATIC BOTTOM - LIGHT</a></li>
															<li><a href="feature-header-static-bottom-dark.html">STATIC BOTTOM - DARK</a></li>
														</ul>
													</li>
													<li><a href="feature-header-nosticky.html">HEADER - NO STICKY</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-anchor"></i> FOOTERS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-footer-1.html#footer">FOOTER - LAYOUT 1</a></li>
													<li><a href="feature-footer-2.html#footer">FOOTER - LAYOUT 2</a></li>
													<li><a href="feature-footer-3.html#footer">FOOTER - LAYOUT 3</a></li>
													<li><a href="feature-footer-4.html#footer">FOOTER - LAYOUT 4</a></li>
													<li><a href="feature-footer-5.html#footer">FOOTER - LAYOUT 5</a></li>
													<li><a href="feature-footer-6.html#footer">FOOTER - LAYOUT 6</a></li>
													<li><a href="feature-footer-7.html#footer">FOOTER - LAYOUT 7</a></li>
													<li><a href="feature-footer-8.html#footer">FOOTER - LAYOUT 8 (light)</a></li>
													<li><a href="feature-footer-0.html#footer">FOOTER - STICKY</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-circle-compass"></i> MENU STYLES
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-menu-0.html">MENU - OVERLAY</a></li>
													<li><a href="feature-menu-1.html">MENU - STYLE 1</a></li>
													<li><a href="feature-menu-2.html">MENU - STYLE 2</a></li>
													<li><a href="feature-menu-3.html">MENU - STYLE 3</a></li>
													<li><a href="feature-menu-4.html">MENU - STYLE 4</a></li>
													<li><a href="feature-menu-5.html">MENU - STYLE 5</a></li>
													<li><a href="feature-menu-6.html">MENU - STYLE 6</a></li>
													<li><a href="feature-menu-7.html">MENU - STYLE 7</a></li>
													<li><a href="feature-menu-8.html">MENU - STYLE 8</a></li>
													<li><a href="feature-menu-9.html">MENU - STYLE 9</a></li>
													<li><a href="feature-menu-10.html">MENU - STYLE 10</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-genius"></i> MENU DROPDOWN
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-menu-dd-light.html">DROPDOWN - LIGHT</a></li>
													<li><a href="feature-menu-dd-dark.html">DROPDOWN - DARK</a></li>
													<li><a href="feature-menu-dd-color.html">DROPDOWN - COLOR</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-beaker"></i> PAGE TITLES
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-title-left.html">ALIGN LEFT</a></li>
													<li><a href="feature-title-right.html">ALIGN RIGHT</a></li>
													<li><a href="feature-title-center.html">ALIGN CENTER</a></li>
													<li><a href="feature-title-light.html">LIGHT</a></li>
													<li><a href="feature-title-dark.html">DARK</a></li>
													<li><a href="feature-title-tabs.html">WITH TABS</a></li>
													<li><a href="feature-title-breadcrumbs.html">BREADCRUMBS ONLY</a></li>
													<li>
														<a class="dropdown-toggle" href="#">PARALLAX</a>
														<ul class="dropdown-menu">
															<li><a href="feature-title-parallax-small.html">PARALLAX SMALL</a></li>
															<li><a href="feature-title-parallax-medium.html">PARALLAX MEDIUM</a></li>
															<li><a href="feature-title-parallax-large.html">PARALLAX LARGE</a></li>
															<li><a href="feature-title-parallax-2xlarge.html">PARALLAX 2x LARGE</a></li>
															<li><a href="feature-title-parallax-transp.html">TRANSPARENT HEADER</a></li>
															<li><a href="feature-title-parallax-transp-large.html">TRANSPARENT HEADER - LARGE</a></li>
														</ul>
													</li>
													<li><a href="feature-title-short-height.html">SHORT HEIGHT</a></li>
													<li><a href="feature-title-rotative-text.html">ROTATIVE TEXT</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-layers"></i> PAGE SUBMENU
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-page-submenu-light.html">PAGE SUBMENU - LIGHT</a></li>
													<li><a href="feature-page-submenu-dark.html">PAGE SUBMENU - DARK</a></li>
													<li><a href="feature-page-submenu-color.html">PAGE SUBMENU - COLOR</a></li>
													<li><a href="feature-page-submenu-transparent.html">PAGE SUBMENU - TRANSPARENT</a></li>
													<li><a href="feature-page-submenu-below-title.html">PAGE SUBMENU - BELOW PAGE TITLE</a></li>
													<li><a href="feature-page-submenu-scrollto.html">PAGE SUBMENU - SCROLLTO</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-trophy"></i> ICONS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-icons-fontawesome.html">FONTAWESOME</a></li>
													<li><a href="feature-icons-glyphicons.html">GLYPHICONS</a></li>
													<li><a href="feature-icons-etline.html">ET LINE</a></li>
													<li><a href="feature-icons-flags.html">FLAGS</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-flag"></i> BACKGROUNDS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-content-bg-grey.html">CONTENT - SIMPLE GREY</a></li>
													<li><a href="feature-content-bg-ggrey.html">CONTENT - GRAIN GREY</a></li>
													<li><a href="feature-content-bg-gblue.html">CONTENT - GRAIN BLUE</a></li>
													<li><a href="feature-content-bg-ggreen.html">CONTENT - GRAIN GREEN</a></li>
													<li><a href="feature-content-bg-gorange.html">CONTENT - GRAIN ORANGE</a></li>
													<li><a href="feature-content-bg-gyellow.html">CONTENT - GRAIN YELLOW</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-magnifying-glass"></i> SEARCH LAYOUTS
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-search-default.html">SEARCH - DEFAULT</a></li>
													<li><a href="feature-search-fullscreen-light.html">SEARCH - FULLSCREEN LIGHT</a></li>
													<li><a href="feature-search-fullscreen-dark.html">SEARCH - FULLSCREEN DARK</a></li>
													<li><a href="feature-search-header-light.html">SEARCH - HEADER LIGHT</a></li>
													<li><a href="feature-search-header-dark.html">SEARCH - HEADER DARK</a></li>
												</ul>
											</li>
											<li><a href="shortcode-animations.html"><i class="et-expand"></i> ANIMATIONS</a></li>
											<li><a href="feature-grid.html"><i class="et-grid"></i> GRID</a></li>
											<li><a href="feature-essentials.html"><i class="et-heart"></i> ESSENTIALS</a></li>
											<li><a href="page-changelog.html"><i class="et-alarmclock"></i> CHANGELOG</a></li>
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-newspaper"></i> SIDE PANEL
												</a>
												<ul class="dropdown-menu">
													<li><a href="feature-sidepanel-dark-right.html">SIDE PANEL - DARK - RIGHT</a></li>
													<li><a href="feature-sidepanel-dark-left.html">SIDE PANEL - DARK - LEFT</a></li>
													<li class="divider"></li>
													<li><a href="feature-sidepanel-light-right.html">SIDE PANEL - LIGHT - RIGHT</a></li>
													<li><a href="feature-sidepanel-light-left.html">SIDE PANEL - LIGHT - LEFT</a></li>
													<li class="divider"></li>
													<li><a href="feature-sidepanel-color-right.html">SIDE PANEL - COLOR - RIGHT</a></li>
													<li><a href="feature-sidepanel-color-left.html">SIDE PANEL - COLOR - LEFT</a></li>
												</ul>
											</li>
											<li><a target="_blank" href="../Admin/HTML/"><span class="label label-success pull-right">BONUS</span><i class="et-gears"></i> ADMIN PANEL</a></li>
										</ul>
									</li>
									
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

			<section id="slider" class="height-550">

				<!--
					SWIPPER SLIDER PARAMS
					
					data-effect="slide|fade|coverflow"
					data-autoplay="2500|false"
				-->
				<div class="swiper-container" data-effect="slide" data-autoplay="false">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('assets/images/demo/1200x800/26-min.jpg');">
							<div class="overlay dark-7"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp" data-wow-delay="0.4s">WELCOME TO SMARTY</h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s">Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 1 -->


						<!-- SLIDE 2 -->
						<div class="swiper-slide" style="background-image: url('assets/images/demo/1200x800/9-min.jpg');">
							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp" data-wow-delay="0.4s">WELCOME TO SMARTY</h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s">Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 2 -->

					</div>

					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<div class="swiper-button-next"><i class="icon-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="icon-angle-left"></i></div>
				</div>
					
			</section>
			<!-- /SLIDER -->



			<!-- BUTTON CALLOUT -->
			<a href="#" class="btn btn-xlg btn-default size-20 fullwidth nomargin noradius padding-40">
				<span class="font-lato size-30">
					Did Smarty convinced you? 
					<strong>Contact us &raquo;</strong>
				</span>
			</a>
			<!-- /BUTTON CALLOUT -->




			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-9 col-sm-9">

							<!-- POST ITEM -->
							<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

								<div class="blog-item-small-image">
									<!-- OWL SLIDER -->
									<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
										<div>
											<img class="img-responsive" src="assets/images/demo/mockups/800x553/9-min.jpg" alt="">
										</div>
										<div>
											<img class="img-responsive" src="assets/images/demo/mockups/800x553/3-min.jpg" alt="">
										</div>
										<div>
											<img class="img-responsive" src="assets/images/demo/mockups/800x553/1-min.jpg" alt="">
										</div>
									</div>
									<!-- /OWL SLIDER -->
								</div>

								<div class="blog-item-small-content">

									<h2><a href="blog-single-default.html">BLOG CAROUSEL POST</a></h2>

									<ul class="blog-post-info list-inline">
										<li>
											<a href="#">
												<i class="fa fa-clock-o"></i> 
												<span class="font-lato">June 29, 2015</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-comment-o"></i> 
												<span class="font-lato">28 Comments</span>
											</a>
										</li>
									</ul>

									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority...</p>

									<a href="blog-single-default.html" class="btn btn-reveal btn-default">
										<i class="fa fa-plus"></i>
										<span>Read More</span>
									</a>
								
								</div>

							</div>
							<!-- /POST ITEM -->


							<!-- POST ITEM -->
							<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

								<!-- IMAGE -->
								<figure class="blog-item-small-image margin-bottom-20">
									<img class="img-responsive" src="assets/images/demo/mockups/800x553/10-min.jpg" alt="">
								</figure>

								<div class="blog-item-small-content">

									<h2><a href="blog-single-default.html">BLOG IMAGE POST</a></h2>

									<ul class="blog-post-info list-inline">
										<li>
											<a href="#">
												<i class="fa fa-clock-o"></i> 
												<span class="font-lato">June 29, 2015</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-comment-o"></i> 
												<span class="font-lato">28 Comments</span>
											</a>
										</li>
									</ul>

									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority...</p>

									<a href="blog-single-default.html" class="btn btn-reveal btn-default">
										<i class="fa fa-plus"></i>
										<span>Read More</span>
									</a>
								
								</div>

							</div>
							<!-- /POST ITEM -->


							<!-- PAGINATION -->
							<ul class="pager">
							  <li class="previous"><a class="radius-0" href="#">&larr; Older</a></li>
							  <li class="next"><a class="radius-0" href="#">Newer &rarr;</a></li>
							</ul>
							<!-- /PAGINATION -->

						</div>

						<!-- RIGHT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-30">
								<form action="" method="get" class="widget_search">
									<input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<hr />

							<!-- side navigation -->
							<div class="side-nav margin-bottom-60 margin-top-30">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIES</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(12)</span> MEDIA</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(8)</span> MOVIES</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span> NEW</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(16)</span> TUTORIALS</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span> DEVELOPMENT</a></li>
									<li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(1)</span> UNCATEGORIZED</a></li>

								</ul>
								<!-- /side navigation -->

							
							</div>


							<!-- JUSTIFIED TAB -->
							<div class="tabs nomargin-top hidden-xs margin-bottom-60">

								<!-- tabs -->
								<ul class="nav nav-tabs nav-bottom-border nav-justified">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
											Popular
										</a>
									</li>
									<li>
										<a href="#tab_2" data-toggle="tab">
											Recent
										</a>
									</li>
								</ul>

								<!-- tabs content -->
								<div class="tab-content margin-bottom-60 margin-top-30">

									<!-- POPULAR -->
									<div id="tab_1" class="tab-pane active">

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa, sodales</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

									</div>
									<!-- /POPULAR -->


									<!-- RECENT -->
									<div id="tab_2" class="tab-pane">

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/4-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/5-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->

										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="blog-sidebar-left.html">
													<img src="assets/images/demo/people/300x300/6-min.jpg" width="50" alt="" />
												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="blog-sidebar-left.html" class="tab-post-link">Quisque ut nulla at nunc</a>
												<small>June 29 2014</small>
											</div>
										</div><!-- /post -->
									</div>
									<!-- /RECENT -->

								</div>

							</div>
							<!-- JUSTIFIED TAB -->


							<!-- TAGS -->
							<h3 class="hidden-xs size-16 margin-bottom-20">TAGS</h3>
							<div class="hidden-xs margin-bottom-60">

								<a class="tag" href="#">
									<span class="txt">RESPONSIVE</span>
									<span class="num">12</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">CSS</span>
									<span class="num">3</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">HTML</span>
									<span class="num">1</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">JAVASCRIPT</span>
									<span class="num">28</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">DESIGN</span>
									<span class="num">6</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">DEVELOPMENT</span>
									<span class="num">3</span>
								</a>
							</div>

							<hr />


							<!-- SOCIAL ICONS -->
							<div class="hidden-xs margin-top-30 margin-bottom-60">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
							</div>

						</div>

					</div>


				</div>
			</section>
			<!-- / -->




			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo base_url() ?>assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/scripts.js"></script>

		<!-- SWIPE SLIDER -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/view/demo.swiper_slider.js"></script>
	</body>
</html>