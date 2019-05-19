<section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('<?=base_url($banner_page->content_img)?>')">
				<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1><?=strtoupper($visi->content_judul)?></h1>

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
							<div class="col-md-1">
								<div class="heading-title heading-border-bottom heading-color"></div>
							</div>
							<div class="col-md-12" style="line-height:1.8">
							<?=$visi->content?>
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