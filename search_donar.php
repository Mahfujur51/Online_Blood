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
			<li class="breadcrumb-item active">Search Donor</li>
		</ol>
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					    <label for="">Select Blood Gorup</label>
					    <select name="" id="" class="form-control">
					    	<option value="">A+</option>
					    	<option value="">A+</option>
					    	<option value="">A+</option>
					    	<option value="">A+</option>
					    	<option value="">A+</option>
					    </select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-gorup">
						<label for="">Location:</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<input type="submit" class="btn btn-success" value="Search Donor">
				</div>
				<div class="col-md-4"></div>
			</div>

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