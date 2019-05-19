	<div class="col-md-6">
	<?php foreach ($kurikulum as $k) {	?>
	<div class="col-md-12">
		<div id="panel-misc-portlet-r1" class="panel panel-primary">

			<div class="panel-heading">
			<div class="row">
			<div class="col-md-6">
				<span class="elipsis"><!-- panel title -->
					<strong><?=$k->content_judul?></strong>
				</span>
			</div>
			<div class="col-md-6">
				<ul class="options pull-right list-inline">
					<li><a href="<?=site_url('admin/edit/'.$k->menu_uri)?>" class="btn btn-yellow btn-sm"><i class="fa fa-edit"></i> <span>Edit Post</span></a></li>
				</ul>
			</div>
			</div>
			</div>

			<!-- panel content -->
			<div class="panel-body">
				<?=substr($k->content, 0, 200)?>
			</div>
			<!-- /panel content -->

		</div>
	</div>
	<?php } ?>
	</div>

	<div class="col-md-6">
		<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">
			<div class="row">
			<div class="col-md-6">
				<span class="elipsis"><!-- panel title -->
					<strong>Agenda</strong>
				</span>
			</div>
			<div class="col-md-6">
				<ul class="options pull-right list-inline">
					<li><a href="<?=site_url('admin/create/agenda')?>" class="btn btn-blue btn-sm"><i class="fa fa-pencil"></i> <span>Create Agenda</span></a></li>
				</ul>
			</div>
			</div>
			</div>

			<!-- panel content -->
			<div class="panel-body">
				<div class="row">
				<div class="col-md-8">
					<input class="form-control input-small" type="text" id="keyword" placeholder="Search..." onkeyup="searchFilterAgenda()"/>
				</div>
				<div class="col-md-4 pull-right">
					<select class="form-control input-small" id="sort" onchange="searchFilterAgenda()">
		                <option value="">Sort by Date</option>
		                <option value="asc">Ascending</option>
		                <option value="desc">Descending</option>
		            </select>
	            </div>
	            </div>
				<div id="agendalist">
				<?php if(!empty($agenda)){foreach ($agenda as $a) { ?>
				<div class="toggle transparent">
					<div class="toggle">
						<label>
							<strong><?=$a->agenda_judul?></strong>
							<br>
							<span><?=$a->agenda_date?></span>
						</label>
						<div class="toggle-content" style="display: none;">
							<?=substr($a->agenda_content, 0, 100)?>
							<hr>
							<a class="btn btn-sm btn-warning" href="<?=site_url('admin/edit/agenda/'.$a->agenda_id)?>">Edit</a>
							<a id="delete_agenda" class="btn btn-sm btn-danger" lol="<?=$a->agenda_id?>" href="<?=site_url('admin/delete/agenda/'.$a->agenda_id)?>">Delete</a>
						</div>
					</div>
				</div>
				<?php } ?>
				<?=$this->ajax_pagination->create_links(); }else{echo "Data not found";};?>
				</div>
			</div>
			<!-- /panel content -->

		</div>
	</div>
	