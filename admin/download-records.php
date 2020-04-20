<?php 
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['username'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
<table border="1">
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
											<th>posting date </th>
										</tr>
									</thead>

<?php 



$filename="Donor list";
$sql="SELECT * FROM tbl_bdooners";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
if ($num>0) {
	$cont=1;
	while ($result=mysqli_fetch_array($query)) {
		


			

echo '  
<tr>  
<td>'.$cont.'</td> 
<td>'.$result['fname'].'</td> 
<td>'.$result['mobile'].'</td> 
<td>'.$result['email'].'</td> 
<td>'.$result['age'].'</td> 
<td>'.$result['gender'].'</td> 
 <td>'.$result['bgorup'].'</td>	
  <td>'.$result['address'].'</td>	 
   <td>'.$result['message'].'</td>	
  <td>'.$result['date'].'</td>	 					
</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cont++;
			}
	}
?>
</table>
<?php } ?>