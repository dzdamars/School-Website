<section class="page-header page-header-xlg parallax parallax-3" style="background-image:url('<?=base_url($banner_page->content_img)?>')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<?php if ($this->uri->segment(2) == 'agenda') { ?>
			<h1><?=strtoupper('AGENDA')?></h1>
		<?php }else{ ?>
			<h1><?=strtoupper($content->content_judul)?></h1>
		<?php } ?>

		<!-- breadcrumbs -->
		<?=$breadcrumbs?>
		<!-- /breadcrumbs -->

	</div>
</section>