<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Alamat & Kontak</strong>
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
					<?php echo form_open_multipart('admin/update/address') ?>
						<?php $add = explode('|', $content->content);
							  $pos = explode('PO Box ', $add[0]);
							  $provinsi = explode(',', $add[2]);							  
						?>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Alamat</label>
										<input type="text" name="alamat" value="<?=$add[1]?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-8 col-sm-12">
										<label>Provinsi</label>
										<input type="text" name="provinsi" value="<?=$provinsi[0]?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-4 col-sm-12">
										<label>Kode Pos</label>
										<input type="text" name="kodepos" class="form-control masked" data-format="99999" data-placeholder="X" value="<?=$pos[1]?>">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Telepon</label>
										<input type="text" name="telepon" class="form-control masked" data-format="(+999) 999-999-999" value="<?=$add[3]?>" data-placeholder="X">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 col-sm-12">
										<label>Email</label>
										<input type="email" name="email" value="<?=$add[4]?>" class="form-control">
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