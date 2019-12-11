<?php
  	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		echo "<script> location.replace('index.php');</script>";
	}
	include 'connectDB.php';
	include 'permission.php';
	if (isset($_GET['id'])) {
		$company_id = $_GET['id'];
		$tsql_callSP = "EXEC findCompanyDetails '$company_id' ";
		$stmt = sqlsrv_query($conn, $tsql_callSP);
		$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
	}
	if (isset($_GET['id_account'])){
		$id_account = $_GET['id_account'];
    $tsql_callSP = "EXEC findCompaniesDetails '$id_account' ";
		$stmt = sqlsrv_query($conn, $tsql_callSP);
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    if ($row != NULL) $company_id = $row['ID']; 
	}
	if ($row == NULL) {
		phpAlert("Không tồn tại công ty đó.");
		exit();
	}
	$name = $row['NAME'];
	$address = $row['ADDRESS'];
	$website = $row['WEBSITE'];
	$business_field = $row['BUSINESS_FIELD'];
	$business_type = $row['BUSINESS_TYPE'];
	$logo = $row['LOGO'];
	$phone = $row['PHONENUMBER'];
	$tsql_callSP = "SELECT * FROM F_RPOST_INFO('$company_id')";
	$stmt = sqlsrv_query($conn, $tsql_callSP);
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

    <title>TheJobs - Company detail</title>

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
            <h1><?php echo $name ?></h1>
            <h3><?php echo $business_type ?></h3>
          </div>
          <hr>
          <p class="lead"><?php echo $business_field ?></p>

          <ul class="details cols-3">
            <li>
              <i class="fa fa-map-marker"></i>
              <span><?php echo $address ?></span>
            </li>

            <li>
              <i class="fa fa-globe"></i>
              <a href="#"><?php echo $website ?></a>
            </li>

            <li>
              <i class="fa fa-phone"></i>
              <span><?php echo $phone ?></span>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <!-- Open positions -->
      <section id="open-positions" class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>vacancies</span>
            <h2>Open positions</h2>
          </header>
          
          <div class="row">
			<?php while ($row = sqlsrv_fetch_array($stmt)) { ?>
				<!-- Job item -->
				<div class="col-xs-12">
				<a class="item-block" href="job-detail.php">
					<header>
					<img src="<?php echo $logo; ?>" alt="">
					<div class="hgroup">
						<h4><?php echo $row['TITLE']; ?></h4>
						<h5><?php echo $name; ?> <span class="label label-success"><?php echo $row['REQUIREMENT']; ?></span></h5>
					</div>
					</header>

					<div class="item-body">
					<p><?php echo $row['POSTION']; ?></p>
					</div>

					<footer>
					<ul class="details cols-3">
						<li>
						<i class="fa fa-map-marker"></i>
						<span><?php echo $row['WORK_PLACE']; ?></span>
						</li>

						<li>
						<i class="fa fa-money"></i>
						<span><?php echo $row['SALARY']; ?> VND/Month</span>
						</li>

						<li>
						<i class="fa fa-certificate"></i>
						<span><?php echo $row['QUANTITY']; ?> Person</span>
						</li>
					</ul>
					</footer>
				</a>
				</div>
				<!-- END Job item -->
				<?php } ?>
			</div>
        </div>
      </section>
      <!-- END Open positions -->


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
