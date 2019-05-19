<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Kesiswaan Info</strong>
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
					<?php echo form_open_multipart('admin/update/kesiswaan', 'id="form_berita"') ?>
						<input type="hidden" name="id" value="<?=$kesiswaan->kesiswaan_id?>">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Judul</label>
									<span class="text-danger" id="error_judul"></span>
									<input  type="text" name="judul" value="<?=$kesiswaan->kesiswaan_judul?>" class="form-control ">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Content</label>
									<span class="text-danger" id="error_content"></span>
									<textarea  name="content" class="froala form-control"><?=$kesiswaan->kesiswaan_content?></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
							<label><input type="radio" id="upl" name="up" value="upl"> Upload</label>
							<label><input type="radio" id="url" name="up" value="url"> URL</label>
							</div>
							<div class="col-md-7 col-sm-7">
								<input id="file" type="file" name="pic" data-btn-text="Select an Image" />
								<input class="form-control" type="text" id="pic" name="pic" placeholder="Image URL" />
							</div>

						</div>
						<div class="col-md-6">
								<img src="<?=base_url($kesiswaan->kesiswaan_img)?>" class="img-responsive">
							</div>
						<div class="row">
							<div class="pull-right col-md-2">
								<button type="submit" class="col-md-12 btn btn-green">Update</button>
							</div>
							<div class="pull-right col-md-2">
								<a href="<?=site_url('admin/kesiswaan')?>" class="btn btn-default col-md-12">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>