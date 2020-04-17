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
		<h2>Contact</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Contact</li>
		</ol>
		<div class="row">
			<div class="col-md-8">
				<form name="sentMessage"  method="post">
					<div class="control-group form-group">
						<div class="controls">
							<label>Full Name:</label>
							<input type="text" class="form-control" id="name" name="fullname" required data-validation-required-message="Please enter your name.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Phone Number:</label>
							<input type="tel" class="form-control" id="phone" name="contactno"  required data-validation-required-message="Please enter your phone number.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Address:</label>
							<input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Message:</label>
							<textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" name="send"  class="btn btn-primary">Send Message</button>
				</form>
			</div>

			<?php 

			$sql="SELECT * FROM tbl_contact_info";
			$contact=mysqli_query($con,$sql);
			$num=mysqli_num_rows($contact);
			if ($num>0) {
				$cnt=1;
				while ($result=mysqli_fetch_array($contact)) {
						# code...
					

					?>

					<div class="col-md-4">
						<h3>Contact Details</h3>
						<p>
							<?php   echo $result['address']; ?>
							<br>
						</p>
						<p>
							<abbr title="Phone">P</abbr>: <?php   echo htmlentities($result['contact']); ?>
						</p>
						<p>
							<abbr title="Email">E</abbr>: <a href="mailto:name@example.com"><?php   echo htmlentities($result['email']); ?>
						</a>
					</p>
				</div>
			<?php }
		}else{
			echo "There are No contact Information available !!";
		} ?>



	</div>






</div>
<!-- Footer -->

<?php include('includes/footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/tether/tether.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>