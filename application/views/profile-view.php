<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Profile</title>



	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">


				<div class="loginbox">

					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Profile</h1>
							
								<div class="form-group">
									<label class="form-control-label">Registration Id</label>
									<input type="text" name="registration_id" value="<?=$user->registration_id?>" class="form-control" required readonly>
								</div>
								<div class="form-group">
									<label class="form-control-label">Username</label>
									<input type="text" name="username" value="<?=$user->username?>" class="form-control" required readonly>
								</div>
								<div class="form-group">
									<label class="form-control-label">First Name</label>
									<input type="text" name="fname" value="<?=$user->first_name?>" class="form-control" required readonly>
								</div>
								<div class="form-group">
									<label class="form-control-label">Last Name</label>
									<input type="text" name="lname" value="<?=$user->last_name?>" class="form-control" required readonly>
								</div>
								<div class="form-group">
									<label class="form-control-label">Photo</label>
									
									<img class="mt-3" id="upload_img" src="<?=base_url($user->photo)?>" alt="No image Selected" style="width: 100px;" />
								</div>

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

</body>

</html>
