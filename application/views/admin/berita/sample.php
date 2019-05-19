	<div class="col-md-12">
		<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">
			<div class="row">
			<div class="col-md-6">
				<span class="elipsis"><!-- panel title -->
					<strong>Berita</strong>
				</span>
			</div>
			<div class="col-md-6">
				<ul class="options pull-right list-inline">
					<li><a href="<?=site_url('admin/create/berita')?>" class="btn btn-blue btn-sm"><i class="fa fa-pencil"></i> <span>Create Post</span></a></li>
				</ul>
			</div>
			</div>
			</div>

			<!-- panel content -->
			<div class="panel-body">
				<table class="table table-hover table-bordered" id="tableberita">
					<thead>
						<tr>
							<th>No</th>
							<th>Image</th>
							<th>Judul</th>
							<th>Content</th>
							<th>Date</th>
							<th>Category</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								 
							</td>
							<td>
								
							</td>

							<td>
							</td>
							
							<td>
							
							</td>
							<td>
							
							</td>
							<td>
							
							</td>
							<td>
							
							</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
			<!-- /panel content -->

		</div>
	</div>
	<div class="col-md-5 pull-right">
		<div id="error"><?=$this->session->flashdata('error')?></div>		
		<div class="">
			<form method="POST" action="<?=site_url('admin/insert/category')?>">
				<div class="form-group">
					<div class="fancy-form">
						<i class="fa fa-tag"></i>
						<input type="tel" class="form-control" name="category_name" placeholder="New Category" required="required">
					</div>
						<input class="btn btn-primary" type="submit">
				</div>
			</form>
			<ul class="cat">
				<?php foreach ($category as $c) { ?>
				<li class="category">
					<span class="fa fa-tag" style="margin:0px 10px;"></span>
					<a class="editable" data-type="text" data-name="category_name" data-pk="<?php echo $c->category_id ?>" data-url="<?php echo site_url('admin/update/category/'.$c->category_id) ?>"><?=$c->category_name?></a>
					<a href="<?=site_url('admin/delete/category/'.$c->category_uri)?>"><span class="fa fa-trash pull-right" style="margin:0px 10px;"></span></a>
				</li>
				<?php } ?>
			</ul>
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
									<textarea name="content" id="content" class="froala form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
							<label><input type="radio" id="upl" name="up" value="upl"> Upload</label>
							<label><input type="radio" id="url" name="up" value="url"> URL</label>
							</div>
							<div class="col-md-7 col-sm-7">
								<input id="file" type="file" name="pic" data-btn-text="Select an Image" />
								<input class="form-control" type="text" id="pic" name="pic" placeholder="Image URL" />
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

