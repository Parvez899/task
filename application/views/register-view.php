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

							<?php if ($this->session->flashdata('register_not_success')) { ?>
								<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
									<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
										<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
									</symbol>
								</svg>
								<div class="alert alert-danger d-flex align-items-center alert-dismissible" role="alert">
									<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
										<use xlink:href="#exclamation-triangle-fill" />
									</svg>
									<div>
										Error! <?= $this->session->flashdata('register_not_success');
												unset($_SESSION['register_not_success']) ?>
									</div>
								</div>
							<?php } ?>
							<?php if ($this->session->flashdata('email_already_registered')) { ?>
								<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
									<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
										<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
									</symbol>
								</svg>
								<div class="alert alert-danger d-flex align-items-center alert-dismissible" role="alert">
									<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
										<use xlink:href="#exclamation-triangle-fill" />
									</svg>
									<div>
										Error! <?= $this->session->flashdata('email_already_registered');
												unset($_SESSION['email_already_registered']) ?>
									</div>
								</div>
							<?php } ?>
							<?= form_open('register') ?>
							<div class="form-group">
								<label class="form-control-label">Name</label>
								<input type="text" name="name" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="form-control-label">Email</label>
								<input type="email" name="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="form-control-label">Password</label>
								<div class="pass-group">
									<input type="password" name="password" class="form-control pass-input" required>
									<span class="fas fa-eye toggle-password"></span>
								</div>
							</div>

							<button class="btn btn-lg btn-block btn-primary w-100 mt-3" type="submit" name="register" value="register">Register</button>

							<?= form_close() ?>
							<a href="<?= base_url() ?>">Already have an account?Login Here</a>
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

	<!-- Select2 JS -->
	<script src="<?= base_url() ?>assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datepicker Core JS -->
	<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Datatables JS -->
	<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="<?= base_url() ?>assets/js/script.js"></script>

</body>

</html>
