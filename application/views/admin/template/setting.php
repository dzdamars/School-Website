<div class="row">
	<div class="col-md-12 pull-left">
		<div id="panel-3" class="panel panel-clean">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>Alamat & Kontak</strong> <!-- panel title -->
			</span>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<?php $add = explode('|', $address->content)?>
			<h4><i class="fa fa-map-marker"></i> &nbsp <?=$add[1]?> <?=$add[0]?> <?=$add[2]?></h4>
			<h4><i class="fa fa-phone"></i> &nbsp <?=$add[3]?></h4>
			<h4><i class="fa fa-envelope"></i> &nbsp <?=$add[4]?></h4>
		</div>
		<!-- /panel content -->
		<!-- Modal -->
		<!-- /Modal -->
		<!-- panel footer -->
		<div class="panel-footer">	
			<a href="<?=site_url('admin/edit/address')?>" class="btn btn-default">Edit</a>
		</div>
		<!-- /panel footer -->

		</div>
		<!-- /PANEL -->
	</div>
	<div class="col-md-12 pull-left">
		<div id="panel-3" class="panel panel-primary">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>Banner Page</strong> <!-- panel title -->
			</span>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<?php foreach ($banner_page as $bp) { ?>
			<div class="col-md-3 text-center">
				<div  style="box-shadow: #ddd 0px 2px 2px; margin-bottom: 10px; padding: 0px 0px 10px">
					<div style="height:150px; overflow: hidden;">
					<img class="img-responsive" src="<?=base_url($bp->content_img)?>">
					</div>
					<hr>
					<?=$bp->content_judul?>
					<hr>
					<a class="btn btn-warning btn-sm" href="<?=site_url('admin/edit/banner_page/'.$bp->content_id)?>">Edit</a>
				</div>
			</div>
			<?php } ?>	
		</div>
		<!-- /panel content -->
		<!-- Modal -->
		<!-- /Modal -->
		<!-- panel footer -->
		<div class="panel-footer">			
		</div>
		<!-- /panel footer -->

		</div>
		<!-- /PANEL -->
	</div>
</div>