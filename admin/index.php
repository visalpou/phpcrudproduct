<?php 	include 'db.php'; 
		include 'insert.php'; 

// session_start();
// echo  $_SESSION; 
// if($_SESSION['email'] == ''){
// 	echo '<script>alert("Please Login")</script>';
// 	header('location:login.php');
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Form Data -->
	<div class="container-xl">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Admin <b>Product</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
									class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Product Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Image</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							while($row = $result->fetch_assoc()) {
								?>
						<tr class="detail">
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['desc'] ?></td>
							<td><?php echo $row['price'] ?></td>
							<td> <img src="img/<?php echo $row['img'] ?>" alt="" width="45px" height="45px"></td>
							<td class="d-flex align-items-center">
								<a href="#editEmployeeModal" class="edit" data-toggle="modal">
									<i class="material-icons" data-toggle="tooltip">&#xE254;</i>
								</a>
								<button class="btn btn-sm" data-toggle="modal"
									data-target="#deleteEmployeeModal-<?php echo $row['id'] ?>">
									<i class="material-icons" data-toggle="tooltip">&#xE872;</i>
								</button>
								<!-- Delete Modal HTML -->
								<div id="deleteEmployeeModal-<?php echo $row['id'] ?>" class="modal fade">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Delete Employee</h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<p>Are you sure you want to delete these Records?</p>
												<p class="text-warning"><small>This action cannot be undone.</small>
												</p>
											</div>
											<div class="modal-footer">
												<input type="button" class="btn btn-default" data-dismiss="modal"
													value="Cancel">
												<a href="delete.php?id=<?php echo $row['id'] ?>" class="btn">Confirm Delete</a>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Add New -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="index.php" method="POST" enctype="multipart/form-data">
					<div class="modal-header">
						<h4 class="modal-title">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>ID</label>
							<input type="text" name="id" class="form-control"
								value="<?php echo $result->num_rows + 1 ?>" readonly>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="desc"></textarea>
						</div>
						<div class="form-group">
							<label>Price</label>
							<input type="number" name="price" class="form-control">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="img" class="form-control">
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" name="submit" id="Submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
<script>
	$(document).ready(function () {
		// Activate tooltip
		$('[data-toggle="tooltip"]').tooltip();

		// Select/Deselect checkboxes
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function () {
			if (this.checked) {
				checkbox.each(function () {
					this.checked = true;
				});
			} else {
				checkbox.each(function () {
					this.checked = false;
				});
			}
		});
		checkbox.click(function () {
			if (!this.checked) {
				$("#selectAll").prop("checked", false);
			}
		});
		// $(".delete").click(function () {
		// 	$(this).parents('tr:eq(0)').remove();			
		// })
	});
</script>

</html>