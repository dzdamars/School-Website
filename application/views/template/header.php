<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>SMK Negeri 1 Cibinong</title>

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="<?=base_url()?>assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?=base_url()?>assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- SWIE SLIDER -->
		<link href="<?=base_url()?>assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="smoothscroll enable-animation">


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar" class="text-center padding-20">

				<!-- Logo -->
				<a class="logo" style="font-size: 24px; margin: 10px 0px; color: #777;" href="<?=site_url()?>">
					SMK NEGERI 1 CIBINONG
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
									<form action="<?=site_url('search')?>" method="get">
										<div class="input-group">
											<input type="text" name="q" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->
						</ul>
						<!-- /BUTTONS -->

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-left nav-main-collapse collapse">
							<nav class="nav-main">
									
								<ul id="topMain" class="nav nav-pills nav-main">
								<?php 
									foreach ($menu as $m) {
										if ($m->menu_parent == 0) {
												echo '<li class="dropdown"><a href="'.site_url($m->menu_uri).'">'.$m->menu_name.'</a>';

												$mid = $m->menu_id;
												$muri = $m->menu_uri;
												submenu($menu, $mid, $muri);

												echo '</li>';
											}	
									} 
									function submenu($menu, $mid, $muri)
									{
										echo '<ul class="dropdown-menu">';
										foreach ($menu as $sm) {
											if ($sm->menu_parent == $mid) {
												if ($muri == 'kurikulum') {
													echo '<li class="dropdown"><a href="'.site_url($muri.'/info/'.$sm->menu_uri).'">'.$sm->menu_name.'</a>';			
												}else{
													echo '<li class="dropdown"><a href="'.site_url($muri.'/'.$sm->menu_uri).'">'.$sm->menu_name.'</a>';
													
												}

												submenu($menu, $sm->menu_id, $muri);

												echo '</li>';
											}
										}
										echo '</ul>';
									}
								?>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>