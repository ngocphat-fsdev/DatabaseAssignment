<?php
  	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		echo "<script> location.replace('index.php');</script>";
	}
	include 'connectDB.php';
	include 'permission.php';
	if (isset($_GET['id'])) {
		$post_id = $_GET['id'];
		$tsql_callSP = "EXEC getPost '$post_id' ";
		$stmt = sqlsrv_query($conn, $tsql_callSP);
		$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
	}
	if ($row == NULL) {
		phpAlert("Không tồn tại tin tuyển dụng đó.");
		exit();
	}
	$account_id = $row['ACC_ID'];
	$tsql_callSP = "SELECT * FROM F_get_compId('$account_id')";
	$stmt = sqlsrv_query($conn, $tsql_callSP);
	$row1 = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
	$title = $row['TITLE'];
	$worktime = $row['WORK_TIME'];
	$salary = $row['SALARY'];
	$location = $row['WORK_PLACE'];
	$quantity = $row['QUANTITY'];
	$position = $row['POSTION'];
	$requirement = $row['REQUIREMENT'];
	$name = $row1['NAME'];
	$logo = $row1['LOGO'];
	// $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Job detail</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

		<!-- Navigation bar -->
		<?php include 'HeaderCompany-2.php'; ?>
		<!-- END Navigation bar -->


		<!-- Page header -->
		<header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
		<div class="container">
			<div class="header-detail">
			<img class="logo" src="<?php echo $logo ?>" alt="">
			<div class="hgroup">
				<h1><?php echo $title ?></h1>
				<h3><a href="#"><?php echo $name ?></a></h3>
			</div>
			<hr>
			<p class="lead"><?php echo $position ?></p>

			<ul class="details cols-3">
				<li>
				<i class="fa fa-map-marker"></i>
				<span><?php echo $location ?></span>
				</li>

				<li>
				<i class="fa fa-briefcase"></i>
				<span><?php echo $requirement ?></span>
				</li>

				<li>
				<i class="fa fa-money"></i>
				<span><?php echo $salary ?> $/Month</span>
				</li>

				<li>
				<i class="fa fa-clock-o"></i>
				<span><?php echo $worktime ?>h / week</span>
				</li>

				<li>
				<i class="fa fa-flask"></i>
				<span><?php echo $quantity ?> person</span>
				</li>

				<!-- <li>
				<i class="fa fa-certificate"></i>
				<a href="#">Master or Bachelor</a>
				</li> -->
			</ul>

			<div class="button-group">
				<div class="action-buttons">
				<a class="btn btn-success" href="job-apply.php">Apply now</a>
				</div>
			</div>

			</div>
		</div>
		</header>
		<!-- END Page header -->


		<!-- Main container -->
		<main>
		<!-- Job detail -->
		</main>
		<!-- END Main container -->


		<!-- Site footer -->
		<footer class="site-footer">

		<!-- Top section -->
		<div class="container">
			<div class="row">
			<div class="col-sm-12 col-md-6">
				<h6>About</h6>
				<p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
			</div>

			<div class="col-xs-6 col-md-3">
				<h6>Company</h6>
				<ul class="footer-links">
				<li><a href="page-about.php">About us</a></li>
				<li><a href="page-typography.php">How it works</a></li>
				<li><a href="page-faq.php">Help center</a></li>
				<li><a href="page-typography.php">Privacy policy</a></li>
				<li><a href="page-contact.php">Contact us</a></li>
				</ul>
			</div>

			<div class="col-xs-6 col-md-3">
				<h6>Trendeing jobs</h6>
				<ul class="footer-links">
				<li><a href="job-list.php">Front-end developer</a></li>
				<li><a href="job-list.php">Android developer</a></li>
				<li><a href="job-list.php">iOS developer</a></li>
				<li><a href="job-list.php">Full stack developer</a></li>
				<li><a href="job-list.php">Project administrator</a></li>
				</ul>
			</div>
			</div>

			<hr>
		</div>
		<!-- END Top section -->

		<!-- Bottom section -->
		<div class="container">
			<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<p class="copyright-text">Copyrights &copy; 2016 All Rights Reserved by <a href="http://themeforest.net/user/shamsoft">ShaMSofT</a>.</p>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<ul class="social-icons">
				<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
				<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<!-- END Bottom section -->

		</footer>
		<!-- END Site footer -->


		<!-- Back to top button -->
		<a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
		<!-- END Back to top button -->

		<!-- Scripts -->
		<script src="assets/js/app.min.js"></script>
		<script src="assets/js/custom.js"></script>

  </body>
</html>
