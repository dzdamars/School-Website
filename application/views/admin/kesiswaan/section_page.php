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
				<?=$this->ajax_pagination->create_links(); }else{echo "Data not found<br>";}?>
				</div>
				
				<script type="text/javascript" src="<?=base_url()?>assets/js/configs.js"></script>
				