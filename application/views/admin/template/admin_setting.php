<div class="row">
	<div class="col-md-12">
		<div class="panel panel-clean">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>User Role</strong> <!-- panel title -->
			</span>
			<ul class="options pull-right list-inline">
				<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
			</ul>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<div class="col-md-4">
				<ul class="cat" id="user_role">					
					<div style="border: groove .5px #eee; margin: 0px 0px;"></div>
					<a id="newrole" href="javascript:newrole()"><li class="category">
						<span class="fa fa-pencil" style="margin:0px 10px;"></span>
						Create New Role
					</li></a>
				</ul>
			</div>
			<div class="col-md-8">
				<div id="edit_permission">

				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="panel panel-clean">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>Registered User</strong> <!-- panel title -->
			</span>
			<ul class="options pull-right list-inline">
				<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
			</ul>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover nomargin">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Username</th>
							<th>Role</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 ?>
						<?php foreach ($user as $u) { ?>	
						<tr>
							<td><?=$i++?></td>
							<td><?=$u->user_full_name?></td>
							<td><?=$u->username?></td>
							<input type="hidden" name="id_change" value="<?=$u->user_id?>">
							<td><select id="role_change">
								<?php foreach ($role as $r) { ?>
									<option value="<?=$r->role_id?>" <?php echo ($r->role_id == $u->role_id) ? 'selected="selected"' : ''; ?>><?=$r->role_name?></option>
								<?php } ?>
							</select></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-clean">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>Register New User</strong> <!-- panel title -->
			</span>
			<ul class="options pull-right list-inline">
				<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
			</ul>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<form id="register" action="<?=site_url('admin/insert/register/')?>" method="POST">
				<div class="row">
				<div id="validation" class="col-md-11"></div>
				<div class="col-md-1"></div>
					<div class="form-group">
						<div class="col-md-11 col-sm-11">					
							<input type="text" name="name" placeholder="Name" value="" class="form-control required">
						</div>
							<input type="hidden" name="status_name" value="">
							<span id="status_name"></span>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-11 col-sm-11">					
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
							<input type="hidden" name="status_username" value="">
							<span id="status_username"></span>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-11 col-sm-11">					
							<input type="email" name="email" class="form-control" placeholder="E-mail">
						</div>
							<input type="hidden" name="status_email" value="">
							<span id="status_email"></span>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12 col-sm-12">					
							<select name="role">
								<?php foreach ($role as $r) { ?>
									<option value="<?=$r->role_id?>"><?=$r->role_name?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<button class="btn btn-warning pull-right">Register</button>
			</form>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div id="userdata">

	</div>
</div>
<span id="spin"></span>