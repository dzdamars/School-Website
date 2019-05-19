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
			},
			success: function(result){
				if (result.status !== 'fail'){
					window.location.href = site_url + 'admin/berita';
				}
				else{
					console.log(result.status);
					$('#error').html('<div class="alert alert-danger">' + result.error + '</div>');
				}
			},
		});
		e.preventDefault() //Prevent Submit
	});
}
$(function(){
	validasi_berita();
});