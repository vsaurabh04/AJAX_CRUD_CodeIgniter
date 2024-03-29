<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title>Employee Management</title>
</head>

<body>
	<!-- Add Employee Modal -->
	<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="employeeModalLabel">Employee Details</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" style="overflow-y:inherit">
				<div class = "text-center"><span id = "error_msg_add" class = "text-danger "></span></div>
					<div class="form-group">
						<label>First Name</label>
						<input type="text" class="form-control fname" placeholder="First Name">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" class="form-control lname" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label >Email</label>
						<input type="text" class="form-control email" placeholder="Email Id">
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" class="form-control mobile" placeholder="Mobile Num." required minlength="10" maxlength="10"/>
					</div>
					<div class="form-group">
						<div class="dropdown my-1">
							<label>Dept Name</label>
							<button class=" btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span id="" class="selected"> Select Department </span>
							</button>
							<div class="dept_drop dropdown-menu" aria-labelledby="dropdownMenuButton">
									<!-- Here the anchor tags will be appended -->
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary emp-save">Save</button>
				</div>
			</div>
		</div>
	</div>

	<!-- View Modal -->
	<div class="modal fade" id="employeeViewModal" tabindex="-1" aria-labelledby="employeeViewModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="employeeViewModalLabel">Employee View</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h4>ID: <span class="id_view"></span></h4>
					<h4>First Name: <span class="fname_view"></span></h4>
					<h4>Last Name: <span class="lname_view"></span></h4>
					<h4>Email: <span class="email_view"></span></h4>
					<h4>Contact: <span class="mobile_view"></span></h4>
					<h4>Department: <span class="dept_view"></span></h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Modal -->
	<div class="modal fade" id="employeeEditModal" tabindex="-1" aria-labelledby="employeeEditModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="employeeEditModalLabel">Edit Employee Detail</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class = "text-center"><span id = "error_msg_edit" class = "text-danger "></span></div>
					<input type="hidden" id="id_edit">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" id = "fname_edit" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" id="lname_edit" class="form-control" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for>Email</label>
						<input type="text" id = "email_edit" class="form-control" placeholder="Email Id">
					</div>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" id="mobile_edit" class="form-control" placeholder="Mobile Num.">
					</div>
					<div class="form-group">
						<div class="dropdown my-1">
							<label>Dept Name</label>
							<button class=" btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span id="" class="selected_edit"> Select Department </span>
							</button>
							<div class="dept_drop_edit dropdown-menu" aria-labelledby="dropdownMenuButton">
									<!-- Here the anchor tags will be appended -->
							</div>
						</div>
					</div>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary emp-edit">Update</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Add Department Modal -->
	<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="departmentModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="departmentModalLabel">Add Department</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<div class = "text-center"><span id = "error_msg_dept" class = "text-danger"></span></div>
					<div class="form-group">
						<label>Department ID </label>
						<input type="text" class="form-control deptid" placeholder="Department ID">
					</div>
					<div class="form-group">
						<label>Department Name</label>
						<input type="text" class="form-control dname" placeholder="Department Name">
					</div>
					<div class="form-group">
						<label>Department Head</label>
						<input type="text" class="form-control dhead" placeholder="Department Head">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary dept-save">Save</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Delete Confirm Modal -->
	<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deleteConfirmModalLabel">Are you sure you want to delete ?</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h4>ID: <span class="id_delete"></span></h4>
					<h4>First Name: <span class="fname_delete"></span></h4>
					<h4>Last Name: <span class="lname_delete"></span></h4>
					<h4>Email: <span class="email_delete"></span></h4>
					<h4>Mobile: <span class="mobile_delete"></span></h4>
					<h4>Department: <span class="dept_delete"></span></h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary confirm-delete">Yes</button>
				</div>
			</div>
		</div>
	</div>

	<div class = "container">
		<div class="row">
			<div class="col-md-12 my-4">
				<h1 class="text-center"> Employee Management </h1>
			</div>

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>AJAX Employee Data Management CodeIgniter
							<div class="float-end">
								<a href="#" data-bs-toggle="modal" data-bs-target="#employeeModal" class = "btn btn-primary add_emp"> Add Employee </a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#departmentModal" class = "btn btn-primary"> Add Department </a>
							</div>
						</h4>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Dept ID</th>
									<th>Department Name</th>
									<th>Reporting Manager</th>
								</tr>
							</thead>
							<tbody class="employeedata"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/loadEmployee.js"></script>
	<script src="assets/js/createEmployee.js"></script>
	<script src="assets/js/viewEmployee.js"></script>
	<script src="assets/js/updateEmployee.js"></script>
	<script src="assets/js/deleteEmployee.js"></script>
	<script src="assets/js/createDepartment.js"></script>

	<script src="assets/js/ajax.js"></script>
</body>
</html>