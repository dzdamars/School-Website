	<div class="col-md-3 pull-right">
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
				<!-- <a>
					<li class="category"><?=$c->category_name?></li>
				</a> -->
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="col-md-9">
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
				<div class="table-responsive">
					<table class="table table-hover nomargin" id="beritable">
						<thead>
							<tr>
								<th>Image</th>
								<th>Judul</th>
								<th>Content</th>
								<th>Date</th>
								<th colspan="2"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($berita as $b) { ?>							
							<tr>
								<td><img src="<?=base_url($b->blog_img)?>" width="150px"/></td>
								<td><?=$b->blog_judul?></td>
								<td><?=substr($b->blog_content, 0, 60)?>...</td>
								<td><?=$b->date?></td>
								<td><a href="<?=site_url('admin/edit/berita/'.$b->blog_id)?>" class="btn btn-default btn-xs"><span class="fa fa-edit"></span> &nbspEdit</a> </td>
								<td><a href="<?=site_url('admin/delete/berita/'.$b->blog_id)?>" class="btn btn-default btn-xs"><span class="fa fa-times"></span> &nbspDelete</a></td>
							</tr>							
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /panel content -->

		</div>
	</div>
