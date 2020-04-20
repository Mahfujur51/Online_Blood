<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0)
{	
	header('location:index.php');
}
else{ 

	if(isset($_POST['submit']))
	{   
		$fname   =  $_POST['fname'];
		$mobile  =  $_POST['mobile'];
		$email   =  $_POST['email'];
		$age     =  $_POST['age'];
		$gender  =  $_POST['gender'];
		$bgorup  =  $_POST['bgorup'];
		$address =  $_POST['address'];
		$message =  $_POST['message'];
		$status = 1;
		$sql1="INSERT INTO tbl_bdooners(fname,mobile,email,gender,age,bgorup,address,message,status) VALUES
		('$fname','$mobile','$email','$gender','$age','$bgorup','$address','$message','$status')";
		$addquery=mysqli_query($con,$sql1);



		if($addquery)
		{
			$msg="Your info submitted successfully";
		}
		else 
		{
			$error="Something went wrong. Please try again";
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

		<title>Online Blood Bank| Admin Add Donor</title>

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
		<script language="javascript">
			function isNumberKey(evt)
			{

				var charCode = (evt.which) ? evt.which : event.keyCode

				if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46)
					return false;

				return true;
			}
		</script>
	</head>

	<body>
		<?php include('includes/header.php');?>
		<div class="ts-main-content">
			<?php include('includes/leftbar.php');?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Add Donor</h2>

							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">Basic Info</div>
										<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
										else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

										<div class="panel-body">
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
												<div class="form-group">
													<label class="col-sm-2 control-label">Full Name<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="fname" class="form-control" required>
													</div>
													<label class="col-sm-2 control-label">Mobile No<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="mobile" onKeyPress="return isNumberKey(event)"  maxlength="11" class="form-control" required>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Email id </label>
													<div class="col-sm-4">
														<input type="email" name="email" class="form-control">
													</div>
													<label class="col-sm-2 control-label">Age<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<input type="text" name="age" class="form-control" required>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Gender <span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select name="gender" class="form-control" required>
															<option value="">Select</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
													<label class="col-sm-2 control-label">Blood Group<span style="color:red">*</span></label>
													<div class="col-sm-4">


														<select name="bgorup" class="form-control" required>
															<option value="">Select</option>
															<?php

															$sql="SELECT * FROM tbl_bgroup";
															$query=mysqli_query($con,$sql);
															while ($result=mysqli_fetch_array($query)) {    ?>
																<option value="<?php echo $result['bgorup']; ?>"><?php echo $result['bgorup']; ?></option>


																<?php	
															}


															?>
														</select>

													</div>
												</div>



												<div class="hr-dashed"></div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Address</label>
													<div class="col-sm-10">
														<textarea class="form-control" name="address" ></textarea>
													</div>
												</div>

												<div class="hr-dashed"></div>
												<div class="form-group">
													<label class="col-sm-2 control-label">Message<span style="color:red">*</span></label>
													<div class="col-sm-10">
														<textarea class="form-control" name="message" required> </textarea>
													</div>
												</div>



												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-2">
														<button class="btn btn-default" type="reset">Cancel</button>
														<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
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