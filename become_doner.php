<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit'])){
 

 $fname=   $_POST['fname'];
 $mobile=  $_POST['mobile'];
 $email=   $_POST['email'];
 $gender=  $_POST['gender'];
 $age=     $_POST['age'];
 $bgorup=  $_POST['bgorup'];
 $address= $_POST['address'];
 $message=$_POST['message'];
 $status=1;
 
 if (!empty($fname)&& !empty($mobile) && !empty($email) && !empty($gender) && !empty($age) && !empty($bgorup) && !empty($address) && !empty($message) ) {
 	# code...


 $sql="INSERT INTO tbl_bdooners(fname,mobile,email,gender,age,bgorup,address,message,status) VALUES
 ('$fname','$mobile','$email','$gender','$age','$bgorup','$address','$message','$status')";
$result=mysqli_query($con,$sql);
if ($result) {
	$msg="Registration successfully!!";
}
else{
	$error="SOmething Wrong Try again please!!";
}
 }
 else {
 	$msg="Please fill the all value!!";
 }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>BloodBank & Donor Management System | Become A Donar</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/modern-business.css" rel="stylesheet">
	<style>
		.navbar-toggler {
			z-index: 1;
		}

		@media (max-width: 576px) {
			nav > .container {
				width: 100%;
			}
		}
	</style>
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

	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Become a <small>Donor</small></h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Become a Donor</li>
		</ol>
		<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
		else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
		
		<!-- Content Row -->
		<form name="donar" method="post">
			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Full Name<span style="color:red">*</span></div>
					<div><input type="text" name="fname" class="form-control" value="<?php if(isset($fname)){ echo $fname; }  ?>" required></div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
					<div><input type="text" name="mobile" class="form-control" value="<?php if(isset($mobile)){ echo $mobile; }  ?>" required></div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Email Id</div>
					<div><input type="email" name="email" class="form-control" value="<?php if(isset($email)){ echo $email; }  ?>" ></div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="font-italic">Age<span style="color:red">*</span></div>
					<div><input type="text" name="age" class="form-control" value="<?php if(isset($age)){ echo $age; }  ?>"  required></div>
				</div>


				<div class="col-lg-4 mb-4">
					<div class="font-italic">Gender<span style="color:red">*</span></div>
					<div><select name="gender" class="form-control" required>
						<option value="">Select</option>
						<option value="Male" >Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>

			<div class="col-lg-4 mb-4">
				<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
				<div><select name="bgorup" class="form-control" required>
					<option> Select Blood Group </option>
					<?php 

					$sql="SELECT * FROM tbl_bgroup";
					$bgroups=mysqli_query($con,$sql);
					$row=mysqli_num_rows($bgroups);
					if ($row) {
						$con=1;

						while ($result=mysqli_fetch_array($bgroups)) {
			# code...



							?>

							<option value="<?php echo $result['bgroup']; ?>"><?php echo $result['bgroup']; ?></option>
							<?php 
						}
					} ?>
				</select>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-4 mb-4">
			<div class="font-italic">Address</div>
			<div><textarea class="form-control" name="address" > <?php if(isset($address)){ echo $address;} ?></textarea></div>
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
<!-- /.row -->
</div>
<?php include('includes/footer.php');?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/tether/tether.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
