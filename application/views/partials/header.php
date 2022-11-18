<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>School</title>




	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/all.min.css">



	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datetimepicker.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/datatables.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">


</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">







			<!-- Header Menu -->
			<ul class="nav nav-tabs user-menu">


				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<span>User</span>
					</a>
					<div class="dropdown-menu">

						<a class="dropdown-item" href="<?= base_url('logout') ?>"><i data-feather="log-out" class="me-1"></i> Logout</a>
					</div>
				</li>
				<!-- /User Menu -->

			</ul>
			<!-- /Header Menu -->

		</div>
		<!-- /Header -->
