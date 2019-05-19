<!-- RIGHT -->
			<div class="col-md-3 col-sm-3">

				<!-- INLINE SEARCH -->
				<div class="inline-search clearfix margin-bottom-30">
					<form action="<?=site_url('berita/search')?>" method="get" class="widget_search">
						<input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
						<button type="submit">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
				<!-- /INLINE SEARCH -->

				<hr />
				
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

				<div class="side-nav margin-bottom-60 margin-top-30">

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

				

				<h3 class="hidden-xs size-16 margin-bottom-20">CATEGORIES</h3>
				<div class="hidden-xs margin-bottom-60">

					<?php foreach ($category as $cat) { ?>
					<a class="tag" href="<?=site_url('berita/category/'.$cat->category_uri)?>">
						<span class="txt"><?=$cat->category_name?></span>
						<!-- <span class="num">12</span> -->
					</a>
					<?php } ?>
					
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