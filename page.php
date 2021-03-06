<?php
session_start();
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

    <title>Online Blood Bank System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
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

</head>

<body>


    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
        <?php 
        $pagetype=$_GET['type'];
        $sql="SELECT * FROM tbl_pages WHERE type='$pagetype'";
        $pag=mysqli_query($con,$sql);
        $row=mysqli_num_rows($pag);
        if ($row>0) {
            $cont=1;
            while ($result=mysqli_fetch_array($pag)) {
               
            
        ?>

        <h1 class="mt-4 mb-3"> </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active"> <?php echo $result['pagename']; ?></li>
        </ol>
        <p> <?php echo $result['details']; ?></p>
 <?php 

}
        } else{
            echo "No Page Available!!";
        }
        

  ?>

</div>


<!-- Footer -->
<?php include('includes/footer.php');?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/tether/tether.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
