<div class="col-md-3 col-sm-3">

				
				<!-- JUSTIFIED TAB -->
				<div class="tabs nomargin-top hidden-xs margin-bottom-60">

					<!-- tabs -->
					<ul class="nav nav-tabs nav-bottom-border nav-justified">
						<li class="active">
							<a href="#tab_2" data-toggle="tab">
								Lowongan
							</a>
						</li>
						<li>
							<a href="#tab_3" data-toggle="tab">
								Agenda
							</a>
						</li>
						<li>
							<a href="#tab_1" data-toggle="tab">
								Popular
							</a>
						</li>									
					</ul>

					<!-- tabs content -->
					<div class="tab-content margin-bottom-60">
						<!-- LOWONGAN -->
						<div id="tab_2" class="tab-pane active">
						<?php foreach ($lowongan as $r) { ?>
							
							<div class="row tab-post"><!-- post -->
								<div class="col-md-12 col-sm-12 col-xs-12">
									<a href="<?=site_url('hubin/lowongan/'.$r->lowongan_uri)?>" class="tab-post-link"><?=$r->lowongan_judul?></a>
									<small><span class="fa fa-clock-o">&nbsp&nbsp</span> <?=$r->lowongan_date?></small>
								</div>
							</div><!-- /post -->
						<?php } ?>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<a href="<?=site_url('hubin/lowongan/')?>" class="tab-post-link">Tampilkan semua</a>
								</div>
						</div>
						<!-- /LOWONGAN -->

						<!-- POPULAR -->
						<div id="tab_1" class="tab-pane">
						<?php foreach ($popular as $pop) { ?>									
							<div class="row tab-post"><!-- post -->
								<div class="col-md-3 col-sm-3 col-xs-3">
									<a href="blog-sidebar-left.html">
										<img src="<?=base_url($pop->blog_img)?>" width="50" alt="" />
									</a>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<a href="<?=site_url('berita/detail/'.$pop->blog_uri)?>" class="tab-post-link"><?=$pop->blog_judul?></a>
									<small><?=$pop->date?></small>
								</div>
							</div><!-- /post -->
						<?php } ?>

						</div>
						<!-- /POPULAR -->

						<!-- AGENDA -->
						<div id="tab_3" class="tab-pane">
						<?php foreach ($agenda as $a) { ?>									
							<div class="row tab-post"><!-- post -->											
								<div class="col-md-12 col-sm-12 col-xs-12">
									<a href="<?=site_url('kurikulum/agenda/'.$a->agenda_uri)?>" class="tab-post-link"><?=$a->agenda_judul?></a>
									<small><span class="fa fa-clock-o">&nbsp&nbsp</span> <?=$a->agenda_date?></small>
								</div>
							</div><!-- /post -->
						<?php } ?>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<a href="<?=site_url('kurikulum/agenda/')?>" class="tab-post-link">Tampilkan semua</a>
							</div>

						</div>
						<!-- /AGENDA -->



					</div>

				</div>
				<!-- JUSTIFIED TAB -->	

				<hr>


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