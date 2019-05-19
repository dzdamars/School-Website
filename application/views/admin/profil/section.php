	<?php foreach ($profil as $p) {	?>
	<div class="col-md-6">
		<div id="panel-misc-portlet-r1" class="panel panel-primary">

			<div class="panel-heading">
			<div class="row">
			<div class="col-md-6">
				<span class="elipsis"><!-- panel title -->
					<strong><?=$p->content_judul?></strong>
				</span>
			</div>
			<div class="col-md-6">
				<ul class="options pull-right list-inline">
					<li><a href="<?=site_url('admin/edit/'.$p->menu_uri)?>" class="btn btn-yellow btn-sm"><i class="fa fa-edit"></i> <span>Edit Post</span></a></li>
				</ul>
			</div>
			</div>
			</div>

			<!-- panel content -->
			<div class="panel-body">
				<?=strip_tags(substr($p->content, 0, 200)).'...'?>
			</div>
			<!-- /panel content -->

		</div>
	</div>
	<?php } ?>

	<div class="col-md-12 pull-left">
		<div id="panel-3" class="panel panel-primary">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>KOMPETENSI KEAHLIAN</strong> <!-- panel title -->
			</span>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<?php foreach ($jurusan as $j) { ?>
				<a data-toggle="modal" data-target=".modal-<?=$j->jurusan_id?>">
					<div class="col-md-3" style="overflow:hidden; height:200px;">
						<img class="img-responsive" width="200" src="<?=base_url($j->jurusan_logo)?>">					
							<p style="color:#aaa;"><?=$j->jurusan_name?></p>					
					</div>
				</a>
				<div class="modal fade modal-<?=$j->jurusan_id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<!-- header modal -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myLargeModalLabel"><?=$j->jurusan_name?></h4>
							</div>

							<!-- body modal -->
							<div class="modal-body">
								<div class="text-center">
									<img class="img-responsive" width="200" src="<?=base_url($j->jurusan_logo)?>">
								</div>
								<div>
									<strong>Nick Name</strong> : <?=$j->jurusan_nick_name?><br>
									<strong>Deskripsi</strong> : <br><?=strip_tags($j->jurusan_desc)?><br>
								</div>
								<hr>	
								<div>
									<div class="text-right">
										<a class="btn btn-warning" href="<?=site_url('admin/edit/jurusan/'.$j->jurusan_uri)?>">Edit</a>
										<a id="delete_jurusan" class="btn btn-danger" href="<?=site_url('admin/delete/jurusan/'.$j->jurusan_uri)?>">Delete</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			<?php } ?>		
		</div>
		<!-- /panel content -->
		<!-- Modal -->
		<!-- /Modal -->
		<!-- panel footer -->
		<div class="panel-footer">
			<div class="text-center">
				<a class="btn btn-blue btn-sm" href="<?=site_url('admin/create/jurusan')?>">New Kompetensi Keahlian</a>	
			</div>
		</div>
		<!-- /panel footer -->

		</div>
		<!-- /PANEL -->
	</div>