<div class="col-md-12">
		<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">
			<div class="row">
			<div class="col-md-6">
				<span class="elipsis"><!-- panel title -->
					<strong>Kesiswaan Info</strong>
				</span>
			</div>
			<div class="col-md-6">
				<ul class="options pull-right list-inline">
					<li><a href="<?=site_url('admin/create/kesiswaan')?>" class="btn btn-blue btn-sm"><i class="fa fa-pencil"></i> <span>Create Kesiswaan Info</span></a></li>
				</ul>
			</div>
			</div>
			</div>

			<!-- panel content -->
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<input class="form-control input-small" type="text" id="keyword" placeholder="Search..." onkeyup="searchFilter()"/>
					</div>
					<div class="col-md-3 pull-right">
						<select class="form-control input-small" id="sort" onchange="searchFilter()">
			                <option value="">Sort by Date</option>
			                <option value="asc">Ascending</option>
			                <option value="desc">Descending</option>
			            </select>
		            </div>
				</div>
				<br>
				<div id="postList">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Content</th>
							<th>Date</th>
							<th colspan="2"></th>
						</tr>
					</thead>
					<tbody>
					<?php if(!empty($kesiswaan)){foreach($kesiswaan as $k){?>
						<tr>
							<td>
								<?=$k->kesiswaan_judul?>
							</td>
							<td>
								<?=substr(strip_tags($k->kesiswaan_content), 0, 150)?>
							</td>
							<td>
								<?=$k->kesiswaan_date?>
							</td>
							<td class="text-center">
								<a href="<?=site_url('admin/edit/kesiswaan/'.$k->kesiswaan_id)?>" class="btn btn-default btn-xs"><span class="fa fa-edit"></span> &nbspEdit</a>
							</td>
							<td class="text-center">
								<a id="delete_kesiswaan" lol="<?=$k->kesiswaan_id?>" href="<?=site_url('admin/delete/kesiswaan/'.$k->kesiswaan_id)?>" class="btn btn-default btn-xs"><span class="fa fa-times"></span> &nbspDelete</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				<?=$this->ajax_pagination->create_links(); }else{echo "Data not found";}?>
				</div>
				</div>
			</div>
			<!-- /panel content -->

		</div>
	</div>
	<div id="modalBerita" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="ModalLabel">Edit</h4>
				</div>

				<!-- Modal Body -->
				<div class="modal-body">
					<?php echo form_open_multipart('admin/update/berita') ?>
					<!-- <form id="edit_berita" name="edit_berita"> -->
					<input type="hidden" name="id" id="id" value="">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Judul</label>
									<input required type="text" name="judul" id="judul" value="" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Content</label>
									<textarea name="content" id="content" class="summernote form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7 col-sm-7">
								<input class="custom-file-upload" type="file" name="pic" id="pic" data-btn-text="Select an Image" />
								<small class="text-muted block">Max file size: 2Mb (jpg/png)</small>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<select required name="cat" id="cat" class="form-control select2 chzn-select" style="width:350px;">
									<option value="">--- Select Category ---</option>
									<?php foreach ($category as $c) { ?>
									<option value="<?=$c->category_id?>"><?=$c->category_name?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img id="existing" src="" class="img-responsive">
							</div>
						</div>
				</div>

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-success" value="Update">
				</div>
					</form>

			</div>
		</div>
	</div>