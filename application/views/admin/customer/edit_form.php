<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/customer/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/customer/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $customer->customer_id?>" />

							<div class="form-group">
								<label for="customer_id">CustomerID</label>
								<input class="form-control <?php echo form_error('customer_id') ? 'is-invalid':'' ?>"
								 type="number" name="ID" placeholder="Customer ID" value="<?php echo $customer->customer_id ?>" style="border-color:#9fff7a;"/>
								<div class="invalid-feedback">
									<?php echo form_error('customer_id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" min="0" placeholder="Customer Name" value="<?php echo $customer->name?>" style="border-color:#9fff7a;" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="address">Address</label>
								<input class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
								 type="text" name="address" min="0" placeholder="Customer Address" value="<?php echo $customer->address ?>" style="border-color:#9fff7a;"/>
								<div class="invalid-feedback">
									<?php echo form_error('address') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
