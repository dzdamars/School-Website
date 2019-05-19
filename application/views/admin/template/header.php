<!-- HEADER -->
			<header id="header">

				<!-- Mobile Button -->
				<button id="mobileMenuBtn"></button>

				<!-- Logo -->
				<span class="logo pull-left">
					SMK Negeri 1 Cibinong
				</span>

				<nav>

					<!-- OPTIONS LIST -->
					<ul class="nav pull-right">

						<!-- USER OPTIONS -->
						<li class="dropdown pull-left">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img class="user-avatar" style="border:none !important;" alt="" src="<?=base_url($logged['ava'])?>" height="35" /> 
								<span class="user-name">
									<span class="hidden-xs">
										<?=ucwords($logged['name'])?> <i class="fa fa-angle-down"></i>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu hold-on-click">
								<li><!-- my inbox -->
									<a href="<?=site_url('admin/user')?>"><i class="fa fa-user"></i> Profile
									</a>
								</li>
								
								<li><!-- settings -->
									<a href="<?=site_url('admin/setting')?>"><i class="fa fa-cog"></i> Settings</a>
								</li>

								<?php if ($logged['role_id'] == 1){ ?>
								<li><!-- settings -->
									<a href="<?=site_url('admin/axdxin')?>"><i class="fa fa-cogs"></i> Administrator Settings</a>
								</li>
								<?php }?>

								<li class="divider"></li>
								<li><!-- logout -->
									<a href="<?=site_url('login/logout')?>"><i class="fa fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
						<!-- /USER OPTIONS -->

					</ul>
					<!-- /OPTIONS LIST -->

				</nav>

			</header>
			<!-- /HEADER -->
<section id="middle">
	<!-- page title -->
	<header id="page-header">
		<h1><?=ucwords($this->uri->segment(2))?></h1>
	</header>
	<!-- /page title -->


	<div id="content" class="padding-20">

		<div class="row">