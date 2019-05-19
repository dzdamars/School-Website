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
					<?php echo form_open_multipart('admin/update/agenda') ?>
						<input type="hidden" name="id" value="<?=$agenda->agenda_id?>">
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Nama Agenda</label>
									<input type="text" name="judul" value="<?=$agenda->agenda_judul?>" class="form-control required">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-5 col-sm-12">
									<label>Pelaksanaan Agenda</label>
									<input name="date" id="agendate" type="text" value="<?=$agenda->agenda_date?>" class="form-control" data-format="MM d, yyyy" data-lang="en" data-RTL="false">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-12 col-sm-12">
									<label>Deskripsi Agenda</label>
									<textarea name="deskripsi" class="froala form-control"><?=$agenda->agenda_content?></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="pull-right col-md-2">
								<button type="submit" class="col-md-12 btn btn-green">Update</button>
							</div>
							<div class="pull-right col-md-2">
								<a href="<?=site_url('admin/kurikulum')?>" class="btn btn-default col-md-12">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /panel content -->

		</div>
</div>