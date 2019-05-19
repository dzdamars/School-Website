		
	<div class="col-md-12">
		<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">
			<div class="row">
			<div class="col-md-6">
				<span class="elipsis"><!-- panel title -->
					<strong>Lowongan Pekerjaan</strong>
				</span>
			</div>
			<div class="col-md-6">
				<ul class="options pull-right list-inline">
					<li><a href="<?=site_url('admin/create/lowongan')?>" class="btn btn-blue btn-sm"><i class="fa fa-pencil"></i> <span>Create Loker</span></a></li>
				</ul>
			</div>
			</div>
			</div>

			<!-- panel content -->
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<input class="form-control input-small" type="text" id="keyword" placeholder="Search..." onkeyup="searchFilterLoker()"/>
					</div>
					<div class="col-md-3 pull-right">
						<select class="form-control input-small" id="sort" onchange="searchFilterLoker()">
			                <option value="">Sort by Date</option>
			                <option value="asc">Ascending</option>
			                <option value="desc">Descending</option>
			            </select>
		            </div>
				</div>
				<div id="lokerlist">
				<?php if(!empty($loker)){foreach ($loker as $l) { ?>					
				<div style="margin:5px 0px 20px; border-bottom:1px dashed #777; padding:5px 0px;" class="col-md-4">
						<strong><?=$l->lowongan_judul?></strong>
						<br>
						<span><?=$l->lowongan_instansi?></span>
						<br>
						<span><?=$l->jurusan?></span>
						<hr>
						<?=strip_tags(substr($l->lowongan_deskripsi, 0, 30))?>
						<hr>
						<a class="btn btn-sm btn-warning" href="<?=site_url('admin/edit/lowongan/'.$l->lowongan_id)?>">Edit</a>
						<a id="delete_lowongan" class="btn btn-sm btn-danger" href="<?=site_url('admin/delete/lowongan/'.$l->lowongan_id)?>">Delete</a>
				</div>
				<?php } ?>
				<div class="col-md-12">
					<?=$this->ajax_pagination->create_links(); }else{echo "Data not found";}?>
				</div>
				</div>
			</div>
			<!-- /panel content -->

		</div>
	</div>
