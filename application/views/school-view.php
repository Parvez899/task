<?php include 'partials/header.php' ?>
<?php include 'partials/sidebar.php' ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">School</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('schools') ?>">Schools</a>
						</li>
						<li class="breadcrumb-item active">Manage School</li>
					</ul>
				</div>
				<div class="col-auto">
					<a href="<?= base_url('schools/create') ?>" class="btn btn-primary me-1">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->


		<div class="row">
			<div class="col-sm-12">
				<div class="card card-table">
					<div class="card-body">
						<?php if ($this->session->flashdata('school_added')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success! </strong><?= $this->session->flashdata('school_added');
															unset($_SESSION['school_added']); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('school_not_added')) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Error! </strong><?= $this->session->flashdata('school_not_added');
														unset($_SESSION['school_not_added']); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('school_updated')) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success! </strong><?= $this->session->flashdata('school_updated');
															unset($_SESSION['school_updated']); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('school_not_updated')) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Error! </strong><?= $this->session->flashdata('school_not_updated');
														unset($_SESSION['school_not_updated']); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('school_deleted')) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Success! </strong><?= $this->session->flashdata('school_deleted');
														unset($_SESSION['school_deleted']); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<?php if ($this->session->flashdata('school_not_deleted')) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Error! </strong><?= $this->session->flashdata('school_not_deleted');
														unset($_SESSION['school_not_deleted']); ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php endif; ?>
						<div class="table-responsive">
							<table class="table table-center table-hover datatable">
								<thead class="thead-light">
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Location</th>
										
										<th class="text-end">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($schools as $school) : ?>
										<tr>
											<td><?= $i++ ?></td>
											<td><?= $school->name ?></td>
											
											<td><?= $school->location ?></td>
											<td class="text-end">
												<a href="<?= base_url('schools/edit/' . $school->school_id) ?>" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a>
												<button type="button" school-id="<?= $school->school_id ?>" id="delete_school" class="btn btn-sm btn-white text-danger me-2" data-bs-toggle="modal" data-bs-target="#delete"><i class="far fa-trash-alt me-1"></i>Delete</button>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Page Wrapper -->

<!-- Delete Modal -->
<?= form_open('schools/delete') ?>
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered del_modal">
		<div class="modal-content del_modal_content">
			<div class="modal-body text-center mt-3">
				<div class="del_icon"><i class="fas fa-trash"></i></div>
				<div class="del_msg">Are you sure want to Delete it?</div>
			</div>
			<div class="modal-footer text-center del_footer">
				<input type="hidden" name="school_id" id="school_id">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger me-2">Delete</button>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
<?php include 'partials/footer.php' ?>
<script>
	$(document).on('click','#delete_school', function() {
		var school_id = $(this).attr('school-id');
		console.log(school_id)
		$('#school_id').val(school_id)
	});
</script>
