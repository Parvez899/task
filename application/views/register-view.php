<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Register</title>



	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">


				<div class="loginbox">

					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Register</h1>
							<form method="POST" enctype="multipart/form-data" id="form">
								<div class="form-group">
									<label class="form-control-label">Registration Id</label>
									<input type="text" name="registration_id" value="<?=$registration_id?>" class="form-control" required readonly>
								</div>
								<div class="form-group">
									<label class="form-control-label">Username</label>
									<input type="text" name="username" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="form-control-label">First Name</label>
									<input type="text" name="fname" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="form-control-label">Last Name</label>
									<input type="text" name="lname" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="form-control-label">Photo</label>
									<input type="file" name="photo" class="form-control" onchange="readURL(this);" required>
									<img class="mt-3" id="upload_img" src="" alt="No image Selected" style="width: 100px;" />
								</div>

								<button class="btn btn-lg btn-block btn-primary w-100 mt-3" type="submit" name="register" value="register">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="<?= base_url() ?>assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="<?= base_url() ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>


	<!-- Datatables JS -->
	<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="<?= base_url() ?>assets/js/script.js"></script>

	<script>
		// $(document).on('submit','#')
		$('#form').submit(function(e){
			e.preventDefault();
			formdata = new FormData(this);
			$.ajax({
				type: "POST",
				url: "<?=base_url('register')?>",
				data: formdata,
				processData:false,
				async:false,
				contentType:false,
				cache:false,
				dataType:'json',
				success: function (response) {
					if(response.status == true){
						alert(response.message);
						location.href='<?=base_url('get-profile/')?>'+response.user_id;
					}
					else{
						alert(response.message);
						location.reload();
					}
				}
			});
		})
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#upload_img').attr('src', e.target.result).width(100).height(100);
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
</body>

</html>
