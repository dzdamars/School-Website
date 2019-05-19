<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Lowongan Pekerjaan</strong>
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
					<?php echo form_open_multipart('admin/update/lowongan') ?>
						<input type="hidden" name="id" value="<?=$loker->lowongan_id?>">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Judul Loker</label>
									<input required type="text" name="judul" value="<?=$loker->lowongan_judul?>" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6 col-sm-6">
									<label>Nama Instansi</label>
									<input required type="text" name="instansi" value="<?=$loker->lowongan_instansi?>" class="form-control required">
								</div>
								<div class="col-md-6 col-sm-6">
									<label>Jurusan</label>
									<select name="jurusan[]" class="select2 col-md-12" multiple="multiple">
									<?php foreach($jurusan as $j){ ?>
										<option value="<?=$j->jurusan_nick_name?>" <?php echo (in_array($j->jurusan_nick_name, explode(',', $loker->jurusan)) ? 'selected="selected"' : '')?>><?=$j->jurusan_nick_name?></option>
									<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Deskripsi Loker</label>
									<textarea required name="deskripsi" class="froala form-control"><?=$loker->lowongan_deskripsi?></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<input class="custom-file-upload" type="file" name="pic" data-btn-text="Select a File" />
								<small class="text-muted block">Max file size: 10Mb (pdf)</small>
							</div>
						</div>
						<div class="row">
							<div class="pull-right col-md-2">
								<button type="submit" class="col-md-12 btn btn-green">Update</button>
							</div>
							<div class="pull-right col-md-2">
								<a href="<?=site_url('admin/hubin')?>" class="btn btn-default col-md-12">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>