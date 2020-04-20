<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['username'])==0)
{	
	header('location:index.php');
}
else{
	if (isset($_GET['delid'])) {
		$id=$_GET['delid'];
		$delquery="DELETE FROM tbl_contact WHERE id='$id'";
		$delresult=mysqli_query($con,$delquery);
		if ($delresult) {
			$msg="Message Deleted Successfully!!";
		}
	}
	if (isset($_GET['redid'])) {
		$id=$_GET['redid'];
		$status=1;
		$delquery="UPDATE tbl_contact SET status='$status' WHERE id='$id'";
		$delresult=mysqli_query($con,$delquery);
		if ($delresult) {
			$msg="This Sms is Read complete!!";
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

		<title>Online Blood Bank |Admin Manage Queries   </title>

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

							<h2 class="page-title">Manage Contact Us Queries</h2>

							<!-- Zero Configuration Table -->
							<div class="panel panel-default">
								<div class="panel-heading">User queries</div>
								<div class="panel-body">
									<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
									else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
									<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email</th>
												<th>Contact No</th>
												<th>Message</th>
												<th>Posting date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email</th>
												<th>Contact No</th>
												<th>Message</th>
												<th>Posting date</th>
												<th>Action</th>
											</tr>
										</tr>
									</tfoot>
									<tbody>

										<?php 
										$cosql="SELECT * FROM tbl_contact";
										$query=mysqli_query($con,$cosql);
										$num=mysqli_num_rows($query);
										if ($num>0) {
											$cont=1;
											while ($result=mysqli_fetch_array($query)) {


												?>
												<tr>
													<td><?php echo $cont; ?></td>
													<td><?php echo $result['name']; ?></td>
													<td><?php echo $result['email']; ?></td>
													<td><?php echo $result['contact']; ?></td>
													<td><?php echo $result['message']; ?></td>
													<td><?php echo $result['date']; ?></td>
													<?php if($result['status']==1)
													{
														?><td>Read<br />
															<a href="?delid=<?php echo $result['id']; ?>" onclick="return confirm('Do you really want to read')" >Delete</a></td>
														<?php } else {?>

															<td><a href="?redid=<?php echo $result['id']; ?>" onclick="return confirm('Do you really want to read')" >Pending</a><br />
																<a  href="?delid=<?php echo $result['id']; ?>"  onclick="return confirm('Do you really want to read')" >Delete</a>
															</td>
														<?php } ?>
													</tr>
													<?php 	

													$cont++;
												}
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
