<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}
else{
// Code for change password	
	if (isset($_POST['submit'])) {
		$address=$_POST['address'];
		$email  =$_POST['email'];
		$contact=$_POST['contact'];
		$upsql="UPDATE tbl_contact_info SET address='$address',email='$email',contact='$contact'";
		$update=mysqli_query($con,$upsql);
		if ($update) {
			$msg="Contact Updated Successfully!!";
		}
		else{
			$error="Something Wrong Please try again!!";
		}
		
	}
	?>

	<!doctype html>
	<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">

		<title>Online Blood Bank | Admin Update Contact info</title>

		<!-- Font awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="css/style.css">
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			}
			.succWrap{
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			}
		</style>


	</head>

	<body>
		<?php include('includes/header.php');?>
		<div class="ts-main-content">
			<?php include('includes/leftbar.php');?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Update Contact Info</h2>

							<div class="row">
								<div class="col-md-10">
									<div class="panel panel-default">
										<div class="panel-heading">Form fields</div>
										<div class="panel-body">
											<?php 
												$sql="SELECT * FROM tbl_contact_info";
												$query=mysqli_query($con,$sql);
												$result=mysqli_fetch_array($query);


											 ?>
											<form method="post"  class="form-horizontal" onSubmit="return valid();">


												<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
												else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


												<div class="form-group">
													<label class="col-sm-4 control-label"> Address</label>
													<div class="col-sm-8">
														<textarea class="form-control" name="address" id="address" required><?php echo $result['address']; ?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label"> Email id</label>
													<div class="col-sm-8">
														<input type="email" class="form-control" name="email" id="email" value="<?php echo $result['email']; ?>"  required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label"> Contact Number </label>
													<div class="col-sm-8">
														<input type="text" class="form-control"name="contact" id="contactno" value="<?php echo $result['contact']; ?>" required>
													</div>
												</div>

												<div class="hr-dashed"></div>




												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-4">

														<button class="btn btn-primary" name="submit" type="submit">Update</button>
													</div>
												</div>

											</form>

										</div>
									</div>
								</div>

							</div>



						</div>
					</div>


				</div>
			</div>
		</div>

		<!-- Loading Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/fileinput.js"></script>
		<script src="js/chartData.js"></script>
		<script src="js/main.js"></script>

	</body>

	</html>
	<?php } ?>