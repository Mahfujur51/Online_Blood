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
    <?php include('includes/slider.php'); ?>
    <div class="container">
        <h2>Welcome to BloodBank & Donor Management System
        </h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">The need for blood</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">The need for blood</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            </div><div class="col-md-4">
                <div class="card">
                    <div class="card-header">The need for blood</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                </div>
            </div>


        </div>
        <h2 class="mt-5">

        Some of the Donar</h2>
        <div class="row">
            <?php 

            $sql="SELECT * FROM tbl_bdooners";
            $query=mysqli_query($con,$sql);
            $row=mysqli_num_rows($query);
            if ($row>0) {
                $cont=1;
                while ($result=mysqli_fetch_array($query)) {?>
                  <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                        <div class="card-block">
                            <h4 class="card-title"><a href="#"><?php echo $result['fname']; ?></a></h4>
                            <p class="card-text"><b>  Gender :</b><?php echo $result['gender']; ?></p>
                            <p class="card-text"><b>Blood Group :</b> <?php echo $result['bgorup']; ?></p>

                        </div>
                    </div>
                </div>
            <?php    }
        }else{
            echo "No Record Found";
        }


        ?>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h2>BLOOD GROUPS</h2>
            <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
            <ul>


                <li>A positive or A negative</li>
                <li>B positive or B negative</li>
                <li>O positive or O negative</li>
                <li>AB positive or AB negative.</li>
            </ul>
            <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
        </div>
    </div>
    <hr>
    <div class="row mb-4">
        <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
                The most common blood type is O, followed by type A.

            Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="become_doner.php">Become a Donar</a>
        </div>
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