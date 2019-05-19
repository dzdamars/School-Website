<div class="row">
	<div class="col-md-12 pull-left">
		<div id="panel-3" class="panel panel-clean">
		<div class="panel-heading">
			<span class="title elipsis">
				<strong>User Profile</strong> <!-- panel title -->
			</span>
		</div>

		
		<!-- panel content -->
		<div class="panel-body">
			<div class="col-md-4 text-center">
				<img class="img-responsive" style="box-shadow: #777 2px 2px 8px;" src="<?=base_url($user->user_avatar)?>" width="200px">
			</div>
			<div class="col-md-8">
				<h4><span>Name</span> &nbsp&nbsp <?=$user->user_full_name?><hr>
				<span>Username</span> &nbsp&nbsp <?=$user->username?><hr>
				<span>Email</span> &nbsp&nbsp <?=$user->email?><hr>
				<span>Role</span> &nbsp<span><?=$user->role_name?></span><hr></h4>
			</div>
		</div>
		<!-- /panel content -->
		
		<!-- panel footer -->
		<div class="panel-footer text-right">
			<a href="<?=site_url('admin/edit/user/'.$user->user_id)?>" class="btn btn-default"><i class="fa fa-edit"></i> &nbsp Edit</a>
		</div>
		<!-- /panel footer -->

		</div>
		<!-- /PANEL -->
	</div>
</div>