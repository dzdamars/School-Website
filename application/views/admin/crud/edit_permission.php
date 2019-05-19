<form id="permit" action="<?=site_url('admin/update/permission/'.$this->uri->segment(3))?>" method="POST">
	<div class="row">
	<div class="form-group">
		<div class="col-md-12 col-sm-12">
			<input type="text" name="role" class="form-control required" value="<?=$role->role_name?>">
		</div>
	</div>
	</div>
	<hr>
	<input type="hidden" name="id" value="<?=$this->uri->segment(3)?>">
	<?php $role = explode(',', $role->role_page) ?>
	<?php foreach ($menu as $m) { ?>
		<div class="col-md-4">
			<label class="switch switch-info switch-round">
				<input type="checkbox" name="page[]" value="<?=$m->menu_role_page?>" <?php echo in_array($m->menu_role_page, $role) ? 'checked="checked"' : NULL;?>> 
				<span class="switch-label" data-on="YES" data-off="NO"></span>
			</label>
			<?=$m->menu_name?>
			<hr>
		</div>
	<?php } ?>
		<div class="col-md-4">
			<label class="switch switch-info switch-round">
				<input type="checkbox" name="page[]" value="7" <?php echo in_array(7, $role) ? 'checked="checked"' : NULL;?>> 
				<span class="switch-label" data-on="YES" data-off="NO"></span>
			</label>
			Settings
			<hr>
		</div>
	<div class="col-md-12">
		<button id="submit" type="submit" class="btn btn-default">Change</button>
		<a id="delete_role" href="<?=site_url('admin/delete/role/'.$this->uri->segment(3))?>" class="btn btn-danger pull-right"><span class="fa fa-trash"></span></a>
	</div>
</form>

<script type="text/javascript">
	$(function(){
		$('a#delete_role').click(function(e){
			e.preventDefault();
			var uri = $(this).attr('href');
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then(function () {
			  swal(
			    'Deleted!',
			    'Your file has been deleted.',
			    'success'
			  ),
			  $.ajax({
					url: uri,
					type: 'POST',
					data: {role:uri},
					success: function(s){			
						location.reload()
					}
				});
			});
		});
	});
</script>