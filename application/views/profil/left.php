<section>
				<div class="container">

					<div class="row">
					<?php foreach ($profil as $p) { ?>
					
						<div class="col-lg-4 col-md-4 col-sm-4">							

							<div style="height: 170px; overflow: hidden;">
								<h4 class="nomargin-bottom"><?=$p->content_judul?></h4>
								<small class="font-lato size-18 margin-bottom-30 block"></small>
								<p class="text-muted size-14"><?=strip_tags(substr($p->content, 0, 150))?>...</p>
							</div>
							<a href="<?=site_url('profil/'.$p->menu_uri)?>">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>
						</div>

					<?php } ?>
					</div>

				</div>
			</section>