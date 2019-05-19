<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>User</strong>
				</span>

				<!-- right options -->
				<ul class="options pull-right list-inline">
					<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
				</ul>
				<!-- /right options -->

			</div>

			<!-- panel content -->			
			<div class="panel-body">				
				<div class="col-md-12 col-sm-12 col-xs-12">	
						<div class="col-md-4">	
							<div class="col-md-12 text-center">
								<img class="img-responsive" src="<?=base_url($content->user_avatar)?>" width="400px;">
							</div>
							<br><br><br><br><br><br><br><br><br><br><br><br><br>
					<?php echo form_open_multipart('admin/update/user') ?>
						<input type="hidden" name="id" value="<?=$content->user_id?>">
							<div class="col-md-12 col-sm-12">
								<input class="custom-file-upload" type="file" name="pic" data-btn-text="Select a File" />
								<small class="text-muted block">Max file size: 2Mb (jpg/png)</small>
							</div>
						</div>
							<div class="col-md-8">
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Full Name</label>
										<input type="text" name="name" value="<?=$content->user_full_name?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Username</label>
										<input type="text" name="username" value="<?=$content->username?>" disabled class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Email</label>
										<input type="text" name="email" value="<?=$content->email?>" class="form-control">
									</div>
								</div>
							</div>
							<div style="margin-top: 20px; border-top: 1px dashed #888; padding: 10px;" class="col-md-8">
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Password</label>
										<input type="password" name="password" placeholder="New Password (optional)" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="pull-right col-md-2">
								<button type="submit" class="col-md-12 btn btn-green">Update</button>
							</div>
							<div class="pull-right col-md-2">
								<a href="<?=site_url('admin/user')?>" class="btn btn-default col-md-12">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>