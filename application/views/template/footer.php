<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">						

							<!-- Contact Address -->
							<address>
								<?php $add = explode('|', $address->content)?>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										<?=$add[0]?><br>
										<?=$add[1]?><br>
										<?=$add[2]?><br>
									</li>
									<li class="footer-sprite phone">
										<?=$add[3]?>
									</li>
									<li class="footer-sprite email">
										<a href="mailto:<?=$add[4]?>"><?=$add[4]?></a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">BERITA TERBARU</h4>
							<ul class="footer-posts list-unstyled">
								<?php foreach ($recent as $b) { ?>
									<li>
										<a href="<?=site_url('berita/detail/'.$b->blog_uri)?>"><?=$b->blog_judul?></a>
										<small><?=$b->date?></small>
									</li>
								<?php }?>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">JELAJAHI</h4>
							<ul class="footer-links list-unstyled">
								<?php foreach ($menu as $m) { 
									if ($m->menu_parent == 0) { ?>
										<li><a href="<?=site_url($m->menu_uri)?>"><?=$m->menu_name?></a></li>								
								<?php } } ?>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Ketahui kegiatan - kegiatan kami melalui sosial media.</p>

							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-instagram pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

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
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '<?php echo base_url() ?>assets/plugins/';</script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/scripts.js"></script>

		<!-- SWIPE SLIDER -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/slider.swiper/dist/js/swiper.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/view/demo.swiper_slider.js"></script>
	</body>
</html>