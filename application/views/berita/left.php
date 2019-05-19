<section>
<div class="container">

	<div class="row">
<div class="col-md-9 col-sm-9">
<div>
	<?=$this->session->flashdata('error')?>
</div>
<?php foreach ($blog as $ber) { ?>
	<!-- POST ITEM -->
	<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

		<!-- IMAGE -->
		<figure class="blog-item-small-image margin-bottom-20">
			<img class="img-responsive" src="<?=((substr($ber->blog_img, 0, 6) != 'assets') ? $ber->blog_img : base_url($ber->blog_img))?>" alt="">
		</figure>

		<div class="blog-item-small-content">

			<h2><a href="<?=site_url('/berita/detail/'.$ber->blog_uri)?>"><?=$ber->blog_judul?></a></h2>

			<ul class="blog-post-info list-inline">
				<li>
					<!-- <a href=""> -->
						<i class="fa fa-clock-o"></i> 
						<span class="font-lato"><?=$ber->date?></span>
					<!-- </a> -->
				</li>
				<li>
					<a href="<?=site_url('/berita/detail/'.$ber->blog_uri)?>#comments">
						<i class="fa fa-comment-o"></i>
						<span class="font-lato"><?=(($ber->Count > 1) ? $ber->Count." Comments": $ber->Count." Comment")?></span>
					</a>
				</li>
				<li>
					<a href="<?=site_url('berita/category/'.$ber->category_uri)?>">
						<i class="fa fa-tag"></i> 
						<span class="font-lato"><?=$ber->category_name?></span>
					</a>
				</li>
			</ul>

			<p><?=strip_tags(substr($ber->blog_content, 0, 120))?>...</p>

			<a href="<?=site_url('/berita/detail/'.$ber->blog_uri)?>" class="btn btn-reveal btn-default">
				<i class="fa fa-angle-right"></i>
				<span>Read More</span>
			</a>
		
		</div>

	</div>
	<!-- /POST ITEM -->
<?php } ?>


	
	<!-- PAGINATION -->
	<?php echo $this->pagination->create_links(); ?>
	<!-- /PAGINATION -->

</div>