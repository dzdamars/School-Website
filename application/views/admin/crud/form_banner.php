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
					<?php echo form_open_multipart('admin/insert/banner') ?>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<input required class="custom-file-upload" type="file" name="pic" data-btn-text="Select a File" />
								<small class="text-muted block">Max file size: 2Mb (jpg/png)</small>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Banner Judul</label>
									<input type="text" name="judul" value="" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Banner Content</label>
									<textarea name="content" class="froala form-control"></textarea>
								</div>
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