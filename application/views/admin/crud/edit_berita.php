<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Berita</strong>
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
					<?php echo form_open_multipart('admin/update/berita') ?>
						<input type="hidden" name="id" value="<?=$berita->blog_id?>">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Judul</label>
									<input type="text" name="judul" value="<?=$berita->blog_judul?>" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Content</label>
									<textarea name="content" class="froala form-control"><?=$berita->blog_content	?></textarea>
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
							<div class="col-md-5 col-md-5">
								<select name="cat" class="form-control select2">
									<option value="">--- Select Category ---</option>
									<?php foreach ($category as $c) { ?>
									<option value="<?=$c->category_id?>"<?php echo ($c->category_id == $berita->category_id ? 'selected="selected"' : '') ?>><?=$c->category_name?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<img src="<?=base_url($berita->blog_img)?>" class="img-responsive">
							</div>
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