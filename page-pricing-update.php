<?php
	include 'connectDB.php';
	include 'permission.php';
	$tsql_callSP = "SELECT * FROM PACK ORDER BY PRICE";
	$stmt = sqlsrv_query($conn, $tsql_callSP);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Post a job position or create your online resume by TheJobs!">
		<meta name="keywords" content="">

		<title>TheJobs - Pricing tables</title>

		<!-- Styles -->
		<link href="assets/css/app.min.css" rel="stylesheet">
		<link href="assets/css/custom.css" rel="stylesheet">

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

		<!-- Favicons -->
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="icon" href="assets/img/favicon.ico">
	</head>

	<body class="nav-on-header smart-nav">

		<!-- Navigation bar -->
		<?php include 'HeaderCompany-1.php'; ?>
		<!-- END Navigation bar -->


		<!-- Site header -->
		<header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
		<div class="container no-shadow">
			<h1 class="text-center">Pricing tables</h1>
			<p class="lead text-center">We've got an awesome pricing table and package selection. You can have many package type.</p>
		</div>
		</header>
		<!-- END Site header -->


		<!-- Main container -->
		<main>

		<!-- Three types -->
		<section>
			<div class="container">
			<header class="section-header">
				<span>Plans</span>
			</header>
			<ul class="pricing">
			<?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) { ?>

				<li>
				<h6>Package</h6>
				<div class="price">
					<sup>$</sup><?php echo $row['PRICE'];?>
					<span>&nbsp;</span>
				</div>
				<hr>
				<p><strong><?php echo $row['MAX_POST']?></strong> job posting</p>
				<p><strong><?php echo $row['EXPIRATION']?></strong> months</p>
				<br>
				<a class="btn btn-primary btn-block" href="pack-update.php?id=<?php echo $row['ID'];?>" type="submit" name="btnSubmit">Select plan</a>
				</li>

			<?php } ?>
			</ul>

			</div>
		</section>

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
