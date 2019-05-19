
<!-- 3 Cols -->
<section>
	<div class="container">
			
		<div class="row">
			<div class="col-md-3 col-sm-3">
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
			</div>
			<div class="col-md-6">
				<div class="col-md-2">
					<div class="heading-title heading-border-bottom heading-color"></div>
				</div>
				<div class="col-md-12" style="line-height:1.8">
				<?=$content->content?>
				</div>
			</div>
			

<!-- /3 Cols -->