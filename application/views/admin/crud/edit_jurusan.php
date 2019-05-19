<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Kompetensi Keahlian</strong>
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
					<?php echo form_open_multipart('admin/update/jurusan') ?>
						<input type="hidden" name="id" value="<?=$jurusan->jurusan_id?>">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<input class="custom-file-upload" type="file" name="pic" data-btn-text="Select an Image" />
								<small class="text-muted block">Max image resolution (px) : 200 x 200 (jpg/png)</small>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-7 col-sm-7">
									<label>Nama Kompetensi Keahlian</label>
									<input type="text" name="nama_kompetensi" value="<?=$jurusan->jurusan_name?>" class="form-control required" placeholder="cth. Multimedia">
								</div>
								<div class="col-md-5 col-sm-5">
									<label>Akronim Kompetensi Keahlian</label>
									<input type="text" name="nick_name" value="<?=$jurusan->jurusan_nick_name?>" class="form-control required" placeholder="cth. MM">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Deskripsi Kompetensi Keahlian</label>
									<textarea name="content" class="froala form-control"><?=$jurusan->jurusan_desc?></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="pull-right col-md-2">
								<button type="submit" class="col-md-12 btn btn-green">Update</button>
							</div>
							<div class="pull-right col-md-2">
								<a href="<?=site_url('admin')?>" class="btn btn-default col-md-12">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>