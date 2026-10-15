<div container>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>

					How to insert data into the database
					<a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-right">BACK</a>
					</h3>
				</div>
				<div class="card-body">
					<form action="<?php echo base_url('employee/store'); ?>" method="POST">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control">
							<?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control">
							<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="">Phone</label>
							<input type="text" name="phone" class="form-control">
							<?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<button type="submit" name="save_employee" class="btn btn-primary">Save Employee</button>
						</div>

				</div>
			</div>
		</div>
	</div>
</div>

