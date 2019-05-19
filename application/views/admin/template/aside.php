<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>SMKN 1 Cibinong - Admin</title>
		<meta name="description" content="" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="<?=base_url()?>assets/css/essentialsadmin.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/mine.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/layoutadmin.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/layout-datatables.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/imagehover.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/color_scheme/greenadmin.css" rel="stylesheet" type="text/css" id="color_scheme" />
		<link href="<?=base_url()?>assets/plugins/x-editable/bootstrap-editable.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/plugins/sweetalert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/plugins/froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/plugins/froala/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<!-- WRAPPER -->
		<div id="wrapper" class="clearfix">

		<!-- 
				ASIDE 
				Keep it outside of #wrapper (responsive purpose)
			-->
			<aside id="aside">
				<!--
					Always open:
					<li class="active alays-open">

					LABELS:
						<span class="label label-danger pull-right">1</span>
						<span class="label label-default pull-right">1</span>
						<span class="label label-warning pull-right">1</span>
						<span class="label label-success pull-right">1</span>
						<span class="label label-info pull-right">1</span>
				-->
				<nav id="sideNav"><!-- MAIN MENU -->
					<ul class="nav nav-list">
						<li <?php echo ($this->uri->segment(2) == '' ? 'class="active"' : '') ?>><!-- dashboard -->
							<a class="dashboard" href="<?=site_url('admin')?>"><!-- warning - url used by default by ajax (if eneabled) -->
								<i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>						
						<?php 
						foreach ($menu as $m) {
									echo '<li '.($this->uri->segment(2) == $m->menu_uri ? 'class="active"' : '').'><a href="'.site_url('admin/'.$m->menu_uri).'"><i class="main-icon fa '.$m->menu_icon.'"></i> <span>'.$m->menu_name.'</span></a>';

									echo '</li>';
						} ?>
					</ul>
				</nav>

				<span id="asidebg"><!-- aside fixed background --></span>
			</aside>
			<!-- /ASIDE -->