<section id="slider" class="height-550">

	<!--
		SWIPPER SLIDER PARAMS
		
		data-effect="slide|fade|coverflow"
		data-autoplay="2500|false"
	-->
	<div class="swiper-container" data-effect="slide" data-autoplay="false">
		<div class="swiper-wrapper">
		<?php foreach ($banner as $b) { ?>			
			<!-- SLIDE 1 -->
			<div class="swiper-slide" style="background-image: url('<?=base_url($b->banner_pic)?>');">
				<div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>
				
				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="row">
								<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

									<h1 class="bold font-raleway wow fadeInUp" data-wow-delay="0.4s" style="text-transform:uppercase;"><?=$b->banner_judul?></h1>
									<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s"><?=$b->banner_content?></p>

								</div>
							</div>
				
						</div>
					</div>
				</div>
				
			</div>
			<!-- /SLIDE 1 -->
		<?php } ?>
		</div>

		<!-- Swiper Pagination -->
		<div class="swiper-pagination"></div>

		<!-- Swiper Arrows -->
		<div class="swiper-button-next"><i class="icon-angle-right"></i></div>
		<div class="swiper-button-prev"><i class="icon-angle-left"></i></div>
	</div>
		
</section>
<!-- /SLIDER -->



<!-- BUTTON CALLOUT -->
<!-- <a href="#" class="btn btn-xlg btn-default size-20 fullwidth nomargin noradius padding-40">
	<span class="font-lato size-30">
		Did Smarty convinced you? 
		<strong>Contact us &raquo;</strong>
	</span>
</a> -->
<!-- /BUTTON CALLOUT -->
