
		<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Banner</strong>
				</span>

				<!-- right options -->
				<ul class="options pull-right list-inline">
					<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
				</ul>
				<!-- /right options -->

			</div>

			<!-- panel content -->
			<div class="panel-body">
				<div class="col-md-12">
					<div class="text-center">
						<a href="<?=site_url('admin/create/banner/')?>" class="btn btn-3d btn-reveal btn-blue">
							<i class="fa fa-pencil"></i>
							<span>New Banner</span>
						</a>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">			
				<?php foreach ($banner as $b) { ?>	
				<figure class="imghvr-fade">
					<!-- <div style="overflow:hidden; float:left; padding:10px;">
						<a href="<?=site_url('admin/edit/banner/'.$b->banner_id)?>"><img src="<?=base_url($b->banner_pic)?>" width="250px"></a>
					</div> -->
					<img src="<?=base_url($b->banner_pic)?>" width="250px">
					<figcaption>
						<div class="col-md-12 text-center">
							<h5><?php echo $b->banner_judul?></h5>
						</div>
						<div class="col-md-12">
							<div class="col-md-5 pull-left">
								<a href="<?=site_url('admin/edit/banner/'.$b->banner_id)?>" class="btn btn-yellow">Edit</a>
							</div>
							<div class="col-md-5 pull-right">
								<a id="delete_banner" href="<?=site_url('admin/delete/banner/'.$b->banner_id)?>" class="btn btn-red">Delete</a>
							</div>
						</div>
					</figcaption>
				</figure>
				<?php } ?>
				</div>
			</div>
			<!-- /panel content -->

		</div>
