<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>SMK Negeri 1 Cibinong - Admin</title>

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="<?=base_url()?>assets/css/essentialsadmin.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/mine.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/layoutadmin.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/color_scheme/greenadmin.css" rel="stylesheet" type="text/css" id="color_scheme" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<div class="padding-15">

			<div class="login-box">

				<!-- login form -->
				<form class="sky-form boxed">
					<header><i class="fa fa-users"></i> Sign In</header>

					<!--
					<div class="alert alert-danger noborder text-center weight-400 nomargin noradius">
						Invalid Email or Password!
					</div>

					<div class="alert alert-warning noborder text-center weight-400 nomargin noradius">
						Account Inactive!
					</div>

					<div class="alert alert-default noborder text-center weight-400 nomargin noradius">
						<strong>Too many failures!</strong> <br />
						Please wait: <span class="inlineCountdown" data-seconds="180"></span>
					</div>
					-->

					<fieldset>	
					
						<section>
							<label class="label">Username</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="username">
								<span class="tooltip tooltip-top-right">Username / Email Address</span>
							</label>
						</section>
						
						<section>
							<label class="label">Password</label>
							<label class="input">
								<i class="icon-append fa fa-lock"></i>
								<input type="password" name="password">
								<b class="tooltip tooltip-top-right">Type your Password</b>
							</label>
							<!-- <label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Keep me logged in</label> -->
						</section>
						<div id="spin"></div>
					</fieldset>

					<footer>
						<span id="notice"></span>
						<button onclick="login()" type="button" class="btn btn-primary pull-right">Sign In</button>
					</footer>
				</form>
				<!-- /login form -->

				<hr />


			</div>

		</div>

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">
			var plugin_path = 'assets/plugins/';
			var site_url = '<?=site_url()?>';
		</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript" src="assets/js/spin.min.js"></script>
		<script type="text/javascript">			
			function login(){
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

				var user = $('input[name="username"]').val();
				var pass = $('input[name="password"]').val();
				if (user == '') {
					$('span#notice').html('<div class="alert alert-danger">Username/Email tidak boleh kosong</div>');
				}else if(pass == ''){
					$('span#notice').html('<div class="alert alert-danger">Password tidak boleh kosong</div>');
				}else{
					$.ajax({
						type: 'POST',
						url: site_url + 'login/validate/',
						data: {user, pass},								
						beforeSend: function(bs)
						{						
							spinner.spin(target);
						},
						complete: function()
						{
							spinner.stop(target);
						},
						success: function(s)
						{
							var data = JSON.parse(s)
							if (data == 'success') {
								location.reload();
							}else if(data == 'failed'){							
								$('span#notice').html('<div class="alert alert-danger">Username/Email dan Password tidak valid</div>');
							}
						},
						error: function(e)
						{

						}
					});
				}
			}
		</script>
	</body>
</html>