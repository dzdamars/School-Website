
		</div>
	</div>
</section>
</div>
<div id="preloader">
	<div class="inner">
		<span class="loader"></span>
	</div>
</div>


	
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">
			var plugin_path = '<?=base_url()?>assets/plugins/';
			var site_url = '<?=site_url()?>';
			var base_url = '<?=base_url()?>';
		</script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/js/appadmin.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/js/spin.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/js/validation.js"></script>
		<script type="text/javascript" src="<?=base_url()?>assets/js/configs.js"></script>
		<script type="text/javascript">		
			loadScript(plugin_path + "x-editable/bootstrap-editable.min.js", function(){
				$.fn.editable.defaults.mode = 'inline'; 
				$('.editable').editable();				
			});	
			loadScript(plugin_path + "sweetalert/sweetalert2.min.js", function(){
			});	
			loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
				loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
					$('#tableberita').dataTable({
						"processing":true,
						"serverSide":true,
						"order": [], 
						"ajax":{
							"url":'<?=site_url('Ajax_process/list_berita')?>',
							"type":'POST'
						},
						"lengthMenu": [
							[10, 15, 20],
							[10, 15, 20]
						],
						"columnDefs": [{
							"targets": [0],
							"orderable": false
						},{
							"targets": [1],
							"orderable": false
						},{
							"targets": [3],
							"orderable": false
						},{
							"targets": [6],
							"orderable": false
						},{
							"targets": [7],
							"orderable": false
						}],
					});
				});
			});
			function upload_show()
			{
				var byurl = $('#pic');
				var byfile = $('#file');
				byfile.hide();
				byurl.hide();

				$('input#upl').click(function(){
					byfile.show();
					byurl.hide();
				});
				$('input#url').click(function(){
					byfile.hide();
					byurl.show();
				});

			}
			$(function(){
				upload_show();

				loadScript(plugin_path + "froala/froala_editor.pkgd.min.js", function(){
					$('textarea.froala').froalaEditor({
						placeholderText: '',
						height: 'autp',
						pastePlain: true
					});
				});	
				loadScript(plugin_path + 'bootstrap.datepicker/js/bootstrap-datepicker.min.js', function() {
					$('#agendate').datepicker({
						format: 'MM d, yyyy',
						startDate: new Date(),	
					});
					
				});
			});
		</script>	
	</body>
</html>