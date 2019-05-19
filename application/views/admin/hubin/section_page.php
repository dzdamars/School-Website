		
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
				<?=$this->ajax_pagination->create_links(); }else{echo "Data not found<br>";}?>
				</div>
				</div>
				<script type="text/javascript" src="<?=base_url()?>assets/js/configs.js"></script>
			