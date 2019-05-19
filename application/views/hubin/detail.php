<section>
<div class="container">

<div class="row">
<div class="col-md-9 col-sm-9">
	<h1 class="blog-post-title"><?=$lowongan->lowongan_judul?></h1>
		<ul class="blog-post-info list-inline">
			<li>
				<!-- <a href="#"> -->
					<i class="fa fa-clock-o"></i> 
					<span class="font-lato"><?=$lowongan->lowongan_date?></span>
				<!-- </a> -->
			</li>
			<li>
				<a href="#">
					<i class="fa fa-building"></i> 
					<span class="font-lato"><?=$lowongan->lowongan_instansi?></span>
				</a>
			</li>
			<li>
				<i class="fa fa-folder"></i> 
				<span class="font-lato"><?=$lowongan->jurusan?></span>
			</li>
		</ul>

		<p><?=$lowongan->lowongan_deskripsi?></p>
		<!-- IMAGE -->
		<?php if ($lowongan->lowongan_file){?>
		<figure class="margin-bottom-20">
			<img class="img-responsive" src="<?=base_url($lowongan->lowongan_file)?>" alt="img" />
		</figure>
		<?php } ?>

		<div class="divider divider-dotted"><!-- divider --></div>



		<!-- SHARE POST -->
		<div class="clearfix margin-top-30">

			<span class="pull-left margin-top-6 bold hidden-xs">
				Share: 
			</span>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-right" data-toggle="tooltip" data-placement="top" title="Facebook">
				<i class="icon-facebook"></i>
				<i class="icon-facebook"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-right" data-toggle="tooltip" data-placement="top" title="Twitter">
				<i class="icon-twitter"></i>
				<i class="icon-twitter"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-right" data-toggle="tooltip" data-placement="top" title="Google plus">
				<i class="icon-gplus"></i>
				<i class="icon-gplus"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-right" data-toggle="tooltip" data-placement="top" title="Linkedin">
				<i class="icon-linkedin"></i>
				<i class="icon-linkedin"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest pull-right" data-toggle="tooltip" data-placement="top" title="Pinterest">
				<i class="icon-pinterest"></i>
				<i class="icon-pinterest"></i>
			</a>

			<a href="#" class="social-icon social-icon-sm social-icon-transparent social-call pull-right" data-toggle="tooltip" data-placement="top" title="Email">
				<i class="icon-email3"></i>
				<i class="icon-email3"></i>
			</a>

		</div>
		<!-- /SHARE POST -->

		<div class="divider"><!-- divider --></div>
</div>