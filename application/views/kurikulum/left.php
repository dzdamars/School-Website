<section>
	<div class="container">
		<div class="row">
		<?php foreach ($kurikulum as $k) { ?>
		
			<div class="col-lg-4 col-md-4 col-sm-4">							

				<h4 class="nomargin-bottom"><?=$k->content_judul?></h4>
				<small class="font-lato size-18 margin-bottom-30 block"></small>
				<p class="text-muted size-14"><?=substr($k->content, 0, 150)?>...</p>

				<a href="<?=site_url('kurikulum/info/'.$k->menu_uri)?>">
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

<section>
<div class="container">

<h1 class="text-center">AGENDA</h1>
<hr>
<div class="row">
<?php foreach ($agenda as $a) { ?>
<div class="col-md-4 col-sm-4">
	<!-- POST ITEM -->
	<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

		<div class="blog-item-small-content" style="height:200px !important; overflow:hidden;">

			<h2><a href="<?=site_url('/kurikulum/detail/'.$a->agenda_uri)?>"><?=$a->agenda_judul?></a></h2>

			<ul class="blog-post-info list-inline">
				<li>
					<!-- <a href=""> -->
						<i class="fa fa-calendar"></i> 
						<span class="font-lato"><?=$a->agenda_date?></span>
					<!-- </a> -->
				</li>
			</ul>

			<p><?=strip_tags(substr($a->agenda_content, 0, 120))?>...</p>

		
		</div>

			<a href="<?=site_url('/kurikulum/agenda/'.$a->agenda_uri)?>" class="btn btn-reveal btn-info pull-right">
				<i class="fa fa-angle-right"></i>
				<span>Detail</span>
			</a>
	</div>
	<!-- /POST ITEM -->
</div>
<?php } ?>
</div>


	
	<!-- PAGINATION -->
	<?php echo $this->pagination->create_links() ?>
	<!-- /PAGINATION -->
</div>

</section>