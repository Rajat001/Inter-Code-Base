<!DOCTYPE html>
<html>
<head>
	<title>
				View User From Database ...
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
				<a href="#" class="navbar-brand">CRUD APPLICATION</a>
				<a href="<?php echo base_url() . 'index.php/user/create/' ;?>" class="btn btn-primary"> Create User </a>
		</div>
	</div>

	<div class="container" style="padding-top: 10px;">
		<h3>View Users </h3>

	</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
					<?php 
					$success = $this->session->userdata('success');
					$failure = $this->session->userdata('failure');
					if($success != "") {
					?>
					<div class="alert alert-success">
						<?php echo $success; }
					elseif ($failure != "") {
							echo $failure; 						
					?>
					</div>
					<?php } ?>
			</div>
		</div>
		<hr>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Created At</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php if(!empty($userss)) {foreach($userss as $user) {?>
				<tr>

					<td><?php echo $user['user_id']; ?></td>
					<td><?php echo $user['name']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['created_at']; ?></td>
					<td><a href="<?php echo base_url() . 'index.php/user/show/' . $user['user_id']; ?>" class="btn btn-primary"> Edit </a>
					</td>
					
					<td><a href="<?php echo base_url() . 'index.php/user/delete/' . $user['user_id']; ?>" class="btn btn-danger"> Delete </a>
					</td>

				</tr>
				<?php }} else {?>
					<tr>
						<td colspan="5">No Records</td>
					</tr>
				<?php } ?>
			</table>	
		</div>	
	</div>	
		

</body>
</html>