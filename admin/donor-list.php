<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0)
{	
	header('location:index.php');
}
else{
	if (isset($_GET['hidden'])) {
		$id=$_GET['hidden'];
		$status=0;
		$hquery="UPDATE tbl_bdooners SET status='$status' WHERE id='$id'";
		$hresult=mysqli_query($con,$hquery);
		if ($hresult) {
			$msg="Hidden succesfully Done !!";
		}
		# code...
	}

	if (isset($_GET['public'])) {
		$id=$_GET['public'];
		$status=1;
		$hquery="UPDATE tbl_bdooners SET status='$status' WHERE id='$id'";
		$hresult=mysqli_query($con,$hquery);
		if ($hresult) {
			$msg="Booking  succesfully Done !!";
		}
		# code...
	}
	if (isset($_GET['delid'])) {
		$id=$_GET['delid'];
		$sqldel="DELETE FROM tbl_bdooners WHERE id='$id'";
		$deletequry=mysqli_query($con,$sqldel);
		if ($deletequry) {
			$msg="Delete succesfully!!";
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

		<title>Online Blood Bank | Donor List  </title>

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

							<h2 class="page-title">Donors List</h2>

							<!-- Zero Configuration Table -->
							<div class="panel panel-default">
								<div class="panel-heading">Donors Info</div>
								<div class="panel-body">
									<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
									else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
									<a href="download-records.php" style="color:red; font-size:16px;">Download Donor List</a>
									<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Mobile No</th>
												<th>Email</th>
												<th>Age</th>
												<th>Gender</th>
												<th>Blood Group</th>
												<th>address</th>
												<th>Message </th>
												<th>action </th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Mobile No</th>
												<th>Email</th>
												<th>Age</th>
												<th>Gender</th>
												<th>Blood Group</th>
												<th>address</th>
												<th>Message </th>
												<th>action </th>
											</tr>
										</tfoot>
										<tbody>
											<?php 

											$sqlall="SELECT * FROM tbl_bdooners";
											$queryall=mysqli_query($con,$sqlall);
											$numall=mysqli_num_rows($queryall);
											if ($numall>0) {
												$cont=1;
												while ($value=mysqli_fetch_array($queryall)) {
													?>
													<tr>
														<td><?php echo $cont; ?></td>
														<td><?php echo $value['fname']; ?></td>
														<td><?php echo $value['mobile']; ?></td>
														<td><?php echo $value['email']; ?></td>
														<td><?php echo $value['age']; ?></td>
														<td><?php echo $value['gender']; ?></td>
														<td><?php echo $value['bgorup']; ?></td>
														<td><?php echo $value['address']; ?></td>
														<td><?php echo $value['message']; ?></td>



														<td>
															<?php if($value['status']==1)
															{?>
																<a href="?hidden=<?php echo $value['id'] ?>" onclick="return confirm('Do you really want to hiidden this detail')"> Make Hidden</a> 
															<?php } else {?>

																<a href="?public=<?php echo $value['id']; ?>"  onclick="return confirm('Do you really want to Public this detail')"> Make Public</a>

															<?php } ?>
															<a href="?delid=<?php echo $value['id']; ?>" onclick="return confirm('Do you really want to delete this record')">|| Delete</a>
														</td>

													</tr>
													<?php 	
													$cont++;

												}
											} else{
												echo "No Result Found!!";
											}


											?>


										</tbody>
									</table>



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
