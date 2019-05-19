<section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('<?=base_url($banner_page->content_img)?>')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1><?=strtoupper($this->uri->segment(1))?></h1>

		<!-- breadcrumbs -->
		<?=$breadcrumbs?>
		<!-- /breadcrumbs -->

	</div>
</section>

<section>
<div class="container">

	<div class="row">
<div class="col-md-9 col-sm-9">
<?php if(count($lowongan) == '' || count($lowongan) == 0){ ?>
	<h1>Oops!</h1>
	<h3><u><i><?=$_GET['s']?></i></u> did not match with any results.</h3>
<?php }?>
<div>
	<?=$this->session->flashdata('error')?>
</div>
<?php foreach ($lowongan as $l) { ?>
	<!-- POST ITEM -->
	<div class="blog-post-item"><!-- .blog-post-item-inverse = image right side [left on RTL] -->

		<div class="blog-item-small-content">

			<h2><a href="<?=site_url('/hubin/lowongan/'.$l->lowongan_uri)?>"><?=$l->lowongan_judul?></a></h2>

			<ul class="blog-post-info list-inline">
				<li>
					<!-- <a href=""> -->
						<i class="fa fa-clock-o"></i> 
						<span class="font-lato"><?=$l->lowongan_date?></span>
					<!-- </a> -->
				</li>
				<li>
					<!-- <a href=""> -->
						<i class="fa fa-building-o"></i> 
						<span class="font-lato"><?=$l->lowongan_instansi?></span>
					<!-- </a> -->
				</li>
				<li>
					<!-- <a href=""> -->
						<i class="fa fa-folder"></i> 
						<span class="font-lato"><?=$l->jurusan?></span>
					<!-- </a> -->
				</li>
			</ul>

			<p><?=strip_tags(substr($l->lowongan_deskripsi, 0, 120))?>...</p>

			<a href="<?=site_url('/hubin/lowongan/'.$l->lowongan_uri)?>" class="btn btn-reveal btn-success">
				<i class="fa fa-angle-right"></i>
				<span>Detail</span>
			</a>
		
		</div>

	</div>
	<!-- /POST ITEM -->
<?php } ?>


	
	<!-- PAGINATION -->
	<?php echo $this->pagination->create_links(); ?>
	<!-- /PAGINATION -->

</div>