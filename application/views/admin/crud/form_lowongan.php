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
					<div id="error"><?=$this->session->flashdata('error')?></div>		
					<?php echo form_open_multipart('admin/insert/lowongan') ?>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Judul Loker</label>
									<input type="text" name="judul" value="<?=set_value('judul')?>" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-6 col-sm-6">
									<label>Nama Instansi</label>
									<input type="text" name="instansi" value="<?=set_value('instansi')?>" class="form-control required">
								</div>
								<div class="col-md-6 col-sm-6">
									<label>Jurusan</label>
									<select name="jurusan[]" class="select2 col-md-12" multiple="multiple">
									<?php foreach($jurusan as $j){ ?>
										<option value="<?=$j->jurusan_nick_name?>"><?=$j->jurusan_nick_name?></option>
									<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Deskripsi Loker</label>
									<textarea name="deskripsi" class="froala form-control"><?=set_value('deskripsi')?></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<input class="custom-file-upload" type="file" name="pic" data-btn-text="Select a File" />
								<small class="text-muted block">Max file size: 10Mb (pdf)</small>
							</div>
						</div>
						<div class="pull-right col-md-2">
							<button type="submit" class="col-md-12 btn btn-blue">Create</button>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>