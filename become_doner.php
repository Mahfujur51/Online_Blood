<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>BloodBank & Donor Management System</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/modern-business.css" rel="stylesheet">
	<style>
		.navbar-toggler {
			z-index: 1;
		}

		@media (max-width: 576px) {
			nav>.container {
				width: 100%;
			}
		}

		.carousel-item.active,
		.carousel-item-next,
		.carousel-item-prev {
			display: block;
		}
	</style>

</head>

<body>

	<!-- Navigation -->
	<?php include('includes/header.php'); ?>
	>
	<div class="container">
		<h2>Become a  <small>Donar</small></h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Become a Donor</li>
		</ol>
		<form name="donar" method="post">
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Full Name<span style="color:red">*</span></div>
					<div><input type="text" name="fullname" class="form-control" required></div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
					<div><input type="text" name="mobileno" class="form-control" required></div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Email Id</div>
					<div><input type="email" name="emailid" class="form-control"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Age<span style="color:red">*</span></div>
					<div><input type="text" name="age" class="form-control" required></div>
				</div>


				<div class="col-lg-4 mb-4">
					<div class="font-italic">Gender<span style="color:red">*</span></div>
					<div><select name="gender" class="form-control" required>
						<option value="">Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>

			<div class="col-lg-4 mb-4">
				<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
				<div>

					  <select name="bloodgroup" class="form-control" required>
					  	<option value=" ">A+</option>
					  	<option value=" ">A+</option>
					  	<option value=" ">A+</option>
					  	<option value=" ">A+</option>
					  	<option value=" ">A+</option>
					  </select>

					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Address</div>
					<div><textarea class="form-control" name="address"></textarea></div>
				</div>

				<div class="col-lg-8 mb-4">
					<div class="font-italic">Message<span style="color:red">*</span></div>
					<div><textarea class="form-control" name="message" required> </textarea></div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
				</div>



			</div>



			<!-- /.row -->
		</form>   






	</div>
	<!-- Footer -->

	<?php include('includes/footer.php'); ?>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/tether/tether.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>