<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Banner</strong>
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
						<div class="row">	
							<div class="col-md-12 text-center">
								<img class="img-responsive" src="<?=base_url($banner->banner_pic)?>" width="400px;">
							</div>	
						</div><br>
					<?php echo form_open_multipart('admin/update/banner') ?>
						<input type="hidden" name="id" value="<?=$banner->banner_id?>">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<input class="custom-file-upload" type="file" name="pic" data-btn-text="Select a File" />
								<small class="text-muted block">Max file size: 2Mb (jpg/png)</small>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Banner Judul</label>
									<input type="text" name="judul" value="<?=$banner->banner_judul?>" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Banner Content</label>
									<textarea name="content" class="froala form-control"><?=$banner->banner_content?></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="pull-right col-md-2">
								<button type="submit" class="col-md-12 btn btn-green">Update</button>
							</div>
							<div class="pull-right col-md-2">
								<a href="<?=site_url('admin/beranda')?>" class="btn btn-default col-md-12">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>