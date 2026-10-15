<div container>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">




<!-- This is the code for display update sucess message in the dashboard page after update employee details. -->
					<?php if($this->session->flashdata('status')): ?>
					<div class="alert alert-success" role="alert">
						updated successfully
					</div>
					<?php endif; ?>


					<h3>

					DASHBOARD
					<a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right m-1">Add Employee</a>
					<a href="<?php echo base_url('employee/login'); ?>" class="btn btn-danger float-right m-1">BACK</a>					</h3>
				</div>
				<div class="card-body" >
					<table class="table table-bordered table-striped" id="employeeTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($employees as $employee): ?> <!-- $employees is the variable passed from the controller to the view -->
							<tr>
								<td><?php echo $employee->id; ?></td>
								<td><?php echo $employee->name; ?></td>
								<td><?php echo $employee->email; ?></td>
								<td><?php echo $employee->phone; ?></td>
								<td><a href="<?php echo base_url('employee/edit/'.$employee->id); ?>" class="btn btn-primary">Edit</a></td>
								<td><a href="<?php echo base_url('employee/delete/'.$employee->id); ?>" class="btn btn-danger confirm-delete">Delete</a></td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

