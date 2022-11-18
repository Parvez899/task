<?php include 'partials/header.php' ?>
<?php include 'partials/sidebar.php' ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Edit School</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('schools') ?>">Schools</a></li>
						
						<li class="breadcrumb-item">Edit School</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<?= form_open('schools/edit/' . $school->school_id) ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">School Name</label>
									<input type="text" class="form-control" name="name" value="<?= set_value('name', $school->name) ?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Location</label>
									<input type="text" class="form-control" name="location" value="<?= set_value('location', $school->location) ?>" required>
								</div>
							</div>
						</div>
						<div class="text-end mt-4">
							<button type="submit" name="update" value="update" class="btn btn-primary">Update School</button>
						</div>
						<?= form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Page Wrapper -->
<?php include 'partials/footer.php' ?>
