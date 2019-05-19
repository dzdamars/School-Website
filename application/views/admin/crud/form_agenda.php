<div class="col-md-12">
	<div id="panel-misc-portlet-r1" class="panel panel-default">

			<div class="panel-heading">

				<span class="elipsis"><!-- panel title -->
					<strong>Agenda</strong>
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
					<?php echo form_open_multipart('admin/insert/agenda') ?>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Nama Agenda</label>
									<input type="text" name="judul" value="<?=set_value('judul')?>" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-5 col-sm-12">
									<label>Pelaksanaan Agenda</label>
									<input name="date" id="agendate" type="text" class="form-control" data-lang="en" data-RTL="false" value="<?=set_value('date')?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Deskripsi Agenda</label>
									<textarea name="deskripsi" class="froala form-control"><?=set_value('rincian')?></textarea>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-7 col-sm-7">
								<input class="custom-file-upload" type="file" name="file" data-btn-text="Select an Image" />
								<small class="text-muted block">Max file size: 10Mb (pdf/doc)</small>
							</div>
						</div> -->
						<div class="pull-right col-md-2">
							<button type="submit" class="col-md-12 btn btn-blue">Create</button>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>