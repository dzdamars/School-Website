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
<script type="text/javascript" src="<?=base_url()?>assets/js/appadmin.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/configs.js"></script>