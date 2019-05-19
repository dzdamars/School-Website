function newrole()
{
	var opts = {
	  lines: 13 // The number of lines to draw
	, length: 28 // The length of each line
	, width: 14 // The line thickness
	, radius: 42 // The radius of the inner circle
	, scale: 1 // Scales overall size of the spinner
	, corners: 1 // Corner roundness (0..1)
	, color: '#000' // #rgb or #rrggbb or array of colors
	, opacity: 0.25 // Opacity of the lines
	, rotate: 0 // The rotation offset
	, direction: 1 // 1: clockwise, -1: counterclockwise
	, speed: 1 // Rounds per second
	, trail: 60 // Afterglow percentage
	, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
	, zIndex: 2e9 // The z-index (defaults to 2000000000)
	, className: 'spinner' // The CSS class to assign to the spinner
	, top: '50%' // Top position relative to parent
	, left: '50%' // Left position relative to parent
	, shadow: false // Whether to render a shadow
	, hwaccel: false // Whether to use hardware acceleration
	, position: 'absolute' // Element positioning
	}
	var target = document.getElementById('spin');				
	var spinner = new Spinner(opts);

	spinner.spin(target);
	$("#edit_permission").load(site_url + "ajax_process/new_role/", function(){
		spinner.stop(target);
	})
}
function searchFilter(page_num)
{
	page_num = page_num?page_num:0;
	var keyword = $('#keyword').val();
	var sort = $('#sort').val();
	$.ajax({
		type: 'POST',
		url: site_url + "ajax_process/list_kesiswaan/" + page_num,
		data: 'page=' + page_num + '&keyword=' + keyword + '&sort=' + sort,
		success: function(html){
			$('#postList').html(html);
		}
	});
}
function searchFilterLoker(page_num)
{
	page_num = page_num?page_num:0;
	var keyword = $('#keyword').val();
	var sort = $('#sort').val();
	$.ajax({
		type: 'POST',
		url: site_url + "ajax_process/list_lowongan/" + page_num,
		data: 'page=' + page_num + '&keyword=' + keyword + '&sort=' + sort,
		success: function(html){
			$('#lokerlist').html(html);
		}
	});
}
function searchFilterAgenda(page_num)
{
	page_num = page_num?page_num:0;
	var keyword = $('#keyword').val();
	var sort = $('#sort').val();
	$.ajax({
		type: 'POST',
		url: site_url + "ajax_process/list_agenda/" + page_num,
		data: 'page=' + page_num + '&keyword=' + keyword + '&sort=' + sort,
		success: function(html){
			$('#agendalist').html(html);
		}
	});
}
function modal_edit(id)
{
	$.ajax({
		url: site_url + "admin/edit/berita/" + id,
		dataType: 'JSON',
		success: function(result){
			if (!result)return;
			$.each(result, function(key, value){
				
				var anu = result.blog_img.substr(0, 6) != 'assets' ? result.blog_img : base_url + result.blog_img;
				// Modal content
				$("#id").val(result.blog_id);
				$("#judul").val(result.blog_judul);
				$("div.fr-view").html(result.blog_content);
				$("#cat").val(result.category_id).trigger('change');
				$('#existing').attr('src', anu);
				
				// Modal setting
				$('#modalBerita').modal({
					"show": true,
					"backdrop": "static"
				});		
			});
		},
	});
}

// DELETE---------------------------------------

function delete_jurusan()
{
	$('a#delete_jurusan').click(function(e){
		e.preventDefault();
		var uri = $(this).attr('href');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function () {
		  swal(
		    'Deleted!',
		    'Your file has been deleted.',
		    'success'
		  ),
		  $.ajax({
				url: uri,
				type: 'POST',
				data: {jurusan_uri:uri},
				success: function(s){			
					location.reload()
				}
			});
		});
	});
}
// JURUSAN

function delete_banner()
{
	$('a#delete_banner').click(function(e){
		e.preventDefault();
		var uri = $(this).attr('href');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function () {
		  swal(
		    'Deleted!',
		    'Your file has been deleted.',
		    'success'
		  ),
		  $.ajax({
				url: uri,
				type: 'POST',
				data: {banner_id:uri},
				success: function(s){			
					location.reload()
				}
			});
		});
	});
}
// BANNER

function delete_berita()
{
	$('a#delete_berita').click(function(e){
		e.preventDefault();
		var uri = $(this).attr('href');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function () {
		  swal(
		    'Deleted!',
		    'Your file has been deleted.',
		    'success'
		  ),
		  $.ajax({
				url: uri,
				type: 'POST',
				data: {blog_id:uri},
				success: function(s){			
					location.reload()
				}
			});
		});
	});
}
// BERITA

function delete_kesiswaan()
{
	$('a#delete_kesiswaan').click(function(e){
		e.preventDefault();
		var uri = $(this).attr('href');
		var id = $(this).attr('lol');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function () {
		  swal(
		    'Deleted!',
		    'Your file has been deleted.',
		    'success'
		  ),
		  $.ajax({
				url: uri,
				type: 'POST',
				data: {kesiswaan_id:uri},
				success: function(s){			
					location.reload()
				}
			});
		});
	});
}
// KESISWAAN

function delete_lowongan()
{
	$('a#delete_lowongan').click(function(e){
		e.preventDefault();
		var uri = $(this).attr('href');
		var id = $(this).attr('lol');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function () {
		  swal(
		    'Deleted!',
		    'Your file has been deleted.',
		    'success'
		  ),
		  $.ajax({
				url: uri,
				type: 'POST',
				data: {lowongan_id:uri},
				success: function(s){			
					location.reload()
				}
			});
		});
	});
}
// LOWONGAN

function delete_agenda()
{
	$('a#delete_agenda').click(function(e){
		e.preventDefault();
		var uri = $(this).attr('href');
		var id = $(this).attr('lol');
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function () {
		  swal(
		    'Deleted!',
		    'Your file has been deleted.',
		    'success'
		  ),
		  $.ajax({
				url: uri,
				type: 'POST',
				data: {agenda_id:id},
				success: function(s){			
					location.reload()
				}
			});
		});
	});
}
// LOWONGAN

function get_role(id)
{
	var opts = {
	  lines: 13 // The number of lines to draw
	, length: 28 // The length of each line
	, width: 14 // The line thickness
	, radius: 42 // The radius of the inner circle
	, scale: 1 // Scales overall size of the spinner
	, corners: 1 // Corner roundness (0..1)
	, color: '#000' // #rgb or #rrggbb or array of colors
	, opacity: 0.25 // Opacity of the lines
	, rotate: 0 // The rotation offset
	, direction: 1 // 1: clockwise, -1: counterclockwise
	, speed: 1 // Rounds per second
	, trail: 60 // Afterglow percentage
	, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
	, zIndex: 2e9 // The z-index (defaults to 2000000000)
	, className: 'spinner' // The CSS class to assign to the spinner
	, top: '50%' // Top position relative to parent
	, left: '50%' // Left position relative to parent
	, shadow: false // Whether to render a shadow
	, hwaccel: false // Whether to use hardware acceleration
	, position: 'absolute' // Element positioning
	}
	var target = document.getElementById('spin');				
	var spinner = new Spinner(opts);
	spinner.spin(target);
	$("#edit_permission").load(site_url + "ajax_process/get_role/" + id, function(){
		spinner.stop(target);
		$('form#permit').submit(function(e){
			e.preventDefault();
			var data = $('form#permit').serializeArray();
			$.ajax({
				url: site_url + 'admin/update/permission/' + id,
				type: 'POST',
				data: data,
				beforeSend: function(bs)
				{
					spinner.spin(target);
				},
				complete: function(c)
				{
					spinner.stop(target);
				},
				success: function(s){
					$('a#role').remove();
					get_role_all();
				},
			});
		});
	});
}
// register
function valid_name()
{
	if ($('input[name="name"]').val().length < 2) {
		$('input[name="status_name"]').val(500);
		$('#status_name').html('<i class="fa fa-times-circle" style="font-size: 20px; color: red; margin: 10px 0px 0px;"></i>');
	}else{
		$('input[name="status_name"]').val(200);
		$('#status_name').html('<i class="fa fa-check-circle" style="font-size: 20px; color: green; margin: 10px 0px 0px;"></i>');
	}
}
function valid_email()
{
	var email = $('input[name="email"]').val();
		$.ajax({
		url: site_url + 'ajax_process/insert_user/cek_email/',
		type: 'POST',
		data: {email:email},
		success: function(s)
		{
			var	data = JSON.parse(s);
			if (data.status == 200) {
				$('input[name="status_email"]').val(data.status);
				$('#status_email').html('<i class="fa fa-check-circle" style="font-size: 20px; color: green; margin: 10px 0px 0px;"></i>');
			}else if (data.status == 500) {
				$('input[name="status_email"]').val(data.status);
				$('#status_email').html('<i class="fa fa-times-circle" style="font-size: 20px; color: red; margin: 10px 0px 0px;"></i>');
			}
		}
	});
}
function valid_username()
{
	var username = $('input[name="username"]').val();
		$.ajax({
		url: site_url + 'ajax_process/insert_user/cek_username/',
		type: 'POST',
		data: {username:username},
		success: function(s)
		{			
			var	data = JSON.parse(s);
			if (data.status == 200) {
				$('input[name="status_username"]').val(data.status);
				$('#status_username').html('<i class="fa fa-check-circle" style="font-size: 20px; color: green; margin: 10px 0px 0px;"></i>');								
			}else if (data.status == 500) {
				$('input[name="status_username"]').val(data.status);
				$('#status_username').html('<i class="fa fa-times-circle" style="font-size: 20px; color: red; margin: 10px 0px 0px;"></i>');				
			}			
		},
		error: function(){}
	});
}
function register()
{
	var opts = {
	  lines: 13 // The number of lines to draw
	, length: 28 // The length of each line
	, width: 14 // The line thickness
	, radius: 42 // The radius of the inner circle
	, scale: 1 // Scales overall size of the spinner
	, corners: 1 // Corner roundness (0..1)
	, color: '#000' // #rgb or #rrggbb or array of colors
	, opacity: 0.25 // Opacity of the lines
	, rotate: 0 // The rotation offset
	, direction: 1 // 1: clockwise, -1: counterclockwise
	, speed: 1 // Rounds per second
	, trail: 60 // Afterglow percentage
	, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
	, zIndex: 2e9 // The z-index (defaults to 2000000000)
	, className: 'spinner' // The CSS class to assign to the spinner
	, top: '50%' // Top position relative to parent
	, left: '50%' // Left position relative to parent
	, shadow: false // Whether to render a shadow
	, hwaccel: false // Whether to use hardware acceleration
	, position: 'absolute' // Element positioning
	}
	var target = document.getElementById('spin');				
	var spinner = new Spinner(opts);

	$('form#register').submit(function(e){
		e.preventDefault();
		var data = $('form#register').serializeArray();
		var name = $('input[name="status_name"]').val();
		var username = $('input[name="status_username"]').val()
		var email = $('input[name="status_email"]').val()
		
		spinner.spin(target);
		if (name == 200 && username == 200 && email == 200) {
			$('input[name="name"], input[name="email"], input[name="username"]').val('');
			$('input[name="status_name"], input[name="status_username"], input[name="status_email"]').val('');
			$('#status_name, #status_username, #status_email').empty();

			$.ajax({
				url: site_url + 'ajax_process/insert_user/',
				type: 'POST',
				data: data,			
				success: function(s)
				{			
					spinner.stop(target);		
					$('#userdata').load(site_url + 'ajax_process/view_user/', function(){});					
				},
			});
		}else{
			spinner.stop(target);
			$('#validation').html('<div class="alert alert-danger">Failed! Cannot register new user.</div>');
		}
	});
}
function validate()
{
	$('input[name="name"]').focusout(function(){
		valid_name();
	});
	$('input[name="username"]').focusout(function(){
		valid_username();
	});
	$('input[name="email"]').focusout(function(){
		valid_email();
	});
}

// 
function get_role_all()
{
	$.ajax({
		url: site_url + 'ajax_process/get_role_all/',		
		dataType: 'JSON',
		success: function(result)
		{
			$.each(result.role, function(key, value){
				var html = 
				'<a id="role" href="javascript:get_role('+ value.role_id +')">' + 
					'<li class="category">'+
						'<span class="fa fa-users" style="margin:0px 10px;"></span>' + 
						value.role_name +
					'</li>' + 
				'</a>';

				$('ul#user_role').prepend(html);
			});
		}
	});
}
// 
function change_role()
{
	$('select#role_change').change(function(){
		var role = $(this).val();
		var id = ''
		$('input[name="id_change"]').each(function(){
			id = $(this).val();
		});
		$.ajax({
			url: site_url + 'ajax_process/change_role/' + id,
			type: 'POST',
			data: {role: role},
			success: function(s)
			{
				
			}
		});		
	});

}
$(function(){
	validate();
	register();
	// register !
	get_role_all();
	change_role();

	delete_jurusan();
	delete_banner();
	delete_berita();
	delete_kesiswaan();
	delete_lowongan();
	delete_agenda();
	// Delete !


});