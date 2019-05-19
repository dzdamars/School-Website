function validasi_berita()
{
	var form = $('form#form_berita');

	form.submit(function(e){

		// var data = form.serializeArray();		
		$.ajax({
			url: site_url + 'admin/insert/berita/',
			type: 'POST',
			data: {
				'judul': $('input[name="judul"]').val(),
				'content': $('.note-editable').text(),
				'cat': $('select[name="cat"]').val(),
				'pic': $('input[name="pic"]').val(),
			},
			success: function(result){
				if (!result)return;
				if (result.status === 'fail'){
					$('#error').html('<div class="alert alert-danger">' + result.error + '</div>');
				}
			},
			// error: function(e){
			// 	window.location.href = site_url + 'admin/berita';				
			// }
		});
		e.preventDefault() //Prevent Submit
	});
}
$(function(){
	// validasi_berita();
});