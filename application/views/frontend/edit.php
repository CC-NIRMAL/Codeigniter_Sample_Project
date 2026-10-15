<div container>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">

				</div>
				<div class="card-body">
					<form action="<?= base_url('employee/update/' . $employee->id) ?>" method="POST">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" value="<?= $employee->name ?>" class="form-control">
							<?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" value="<?= $employee->email ?>" class="form-control" >
							<?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<label for="">Phone</label>
							<input type="text" name="phone" value="<?= $employee->phone ?>" class="form-control" >
							<?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
						</div>
						<div class="form-group">
							<button type="submit" name="save_employee" class="btn btn-primary">Save </button>
						</div>

				</div>
			</div>
		</div>
	</div>
</div>


