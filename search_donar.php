<?php

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
						<select name="bgorup" id="" class="form-control">
							<?php 

							$sql="SELECT * FROM tbl_bgroup";
							$bgroups=mysqli_query($con,$sql);
							$row=mysqli_num_rows($bgroups);
							if ($row) {
								$cont=1;

								while ($result=mysqli_fetch_array($bgroups)) {
			# code...



									?>
									<option value="<?php echo $result['bgorup'];  ?>"><?php echo $result['bgorup']; ?></option>
								<?php }} ?>

							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-gorup">
							<label for="">Location:</label>
							<input type="text" name="address" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<input type="submit" name="submit" class="btn btn-success" value="Search Donor">
					</div>
					<div class="col-md-4"></div>
				</div>

			</form>
			<?php if (isset($_POST['submit'])) {

				$bgorup=$_POST['bgorup'];
				$address=$_POST['address'];
				$sqlquery="SELECT * FROM `tbl_bdooners` WHERE bgorup='$bgorup' AND status='1' OR address='$address'
				";
				$result=mysqli_query($con,$sqlquery);
				$row=mysqli_num_rows($result);
				if ($row>0) {
					while ($value=mysqli_fetch_array($result)) { ?>

						<div class="col-lg-4 col-sm-6 portfolio-item">
							<div class="card h-100">
								<a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
								<div class="card-block">
									<h4 class="card-title"><a href="#">Name: <?php echo $value['fname']; ?></a></h4>
									<p class="card-text"><b>  Gender : </b><?php echo $value['gender']; ?></p>
									<p class="card-text"><b>Blood Group :</b> <?php echo $value['bgorup']; ?></p>
									<p class="card-text"><b>Email  :</b> <?php echo $value['email']; ?></p>
									<p class="card-text"><b>Contact  :</b> <?php echo $value['mobile']; ?></p>
									<p class="card-text"><b>Message  :</b> <?php echo $value['message']; ?></p>
									<p class="card-text"><b>Age  :</b> <?php echo $value['age']; ?></p>

								</div>
							</div>
						</div> 
						


					<?php }
				}
				else{ ?>
					<script type="text/javascript">
						alert('Data Not Found');
					</script>

				<?php }
				

			}
			?>





		</div>
		<!-- Footer -->

		<?php include('includes/footer.php'); ?>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/tether/tether.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>

	</html>