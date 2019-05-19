<section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('<?=base_url($banner_page->content_img)?>')">
				<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1><?=strtoupper($kompetensi->jurusan_name)?></h1>

					<!-- breadcrumbs -->
					<?=$breadcrumbs?>
					<!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- 3 Cols -->
			<section>
				<div class="container">
						
					<div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
									<img class="img-responsive" src="<?=base_url($kompetensi->jurusan_logo)?>">
								</div>
								<div class="col-md-8">
									<h4><?=$kompetensi->jurusan_name?></h4>
									<h5 style="color: #bbb;"><?=$kompetensi->jurusan_nick_name?></h5 style="color: #bbb;">
								</div>
							</div>
							<div class="col-md-12">
								<div class="divider divider-dotted"><!-- divider --></div>
							</div>
							<div class="col-md-12" style="line-height:1.8">
							<?=$kompetensi->jurusan_desc?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="side-nav">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>KOMPETENSI KEAHLIAN</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
								<?php foreach ($jurusan as $j) { ?>
									<li class="list-group-item"><a href="<?=site_url('profil/kompetensi/'.$j->jurusan_uri)?>"><span class="size-11 text-muted pull-right"></span><?=$j->jurusan_name?></a></li>
								<?php } ?>

								</ul>
								<!-- /side navigation -->

							
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="<?=base_url('assets/images/sertifikat.png')?>">
						</div>
					</div>
				</div>
			</section>
			<!-- /3 Cols -->