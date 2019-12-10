<?php
  include 'permission.php';
  if (checkLogout() || !isCompany()) {
    Header( "HTTP/1.1 301 Moved Permanently" );
    header('Location: index.php');
}
	function phpAlertSuccess($msg) {
			echo '<script type="text/javascript">alert("' . $msg . '")</script>';
			echo "<script> location.replace('user-login.php');</script>";
    }
  function phpAlert($msg) {
			echo '<script type="text/javascript">alert("' . $msg . '")</script>';
			echo "<script> location.replace('index.php');</script>";
    }
    include('connectDB.php');		
    $id_account = $_SESSION['ID'];
    $tsql_callSP = "EXEC CheckCompany '$id_account' ";
		$stmt = sqlsrv_query($conn, $tsql_callSP);
    $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    if ($row != NULL) {
      phpAlert("Đã tạo công ty rồi. Không thể tạo thêm 1 công ty trên cùng 1 tài khoản.");
      exit();
    }
	if (isset($_POST['submitCompany'])){
		$name = $_POST['txtCompanyName'];
		$business_type = $_POST['txtHeadline'];
		$business_field = $_POST['txtField'];
		$address = $_POST['txtLocation'];
		$website = $_POST['txtWebsite'];
		$phone = $_POST['txtPhone'];
		$logo = $_FILES["CompanyLogo"]["name"];
	    $dir = "./assets/img/logo-company/".$id_account."_logo.jpg";
		if (move_uploaded_file($_FILES["CompanyLogo"]["tmp_name"], $dir)){
			$check = TRUE;
		}
   		$logo = $dir;
		// $logo = "assets/img/logo-default.png";
		$id_account = $_SESSION['ID'];

		$tsql_callSP = "EXEC InsertCompany ?, ?, ?, ?, ?, ?, ?, ?";
		$param = array(
			array($address, SQLSRV_PARAM_IN),
			array($website, SQLSRV_PARAM_IN),
			array($name, SQLSRV_PARAM_IN),
			array($business_field, SQLSRV_PARAM_IN),
			array($business_type, SQLSRV_PARAM_IN),
			array($logo, SQLSRV_PARAM_IN),
			array($phone, SQLSRV_PARAM_IN),
			array($id_account, SQLSRV_PARAM_IN),
		);
		$stmt = sqlsrv_query($conn, $tsql_callSP, $param);
		if ($stmt == False) die(print_r(sqlsrv_errors(), true));
		sqlsrv_free_stmt($stmt);
		sqlsrv_close($conn);
		header("Location: index.php");	
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Add company</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/vendors/summernote/summernote.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

	<?php
		
		if (isCompany()) {
			include 'HeaderCompany-1.php';
		}
		else {
            Header( "HTTP/1.1 301 Moved Permanently" );
            header('Location: index.php');
		}
	?>
    <!-- END Navigation bar -->

    <form action="company-add.php" method="POST" enctype="multipart/form-data">

    <!-- <form action="company-add.php" method="POST" > -->
      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add your company</h1>
          <p class="lead text-center">Create a profile for your company and put it online.</p>
        </div>

        <div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-lg-2">
							<div class="form-group">
								<input type="file" class="dropify" name="CompanyLogo" id="CompanyLogo" data-default-file="assets/img/logo-default.png">
								 <span class="help-block">A square logo</span> 
							</div>
						</div>

						<div class="col-xs-12 col-sm-8 col-lg-10">	
							<div class="form-group">
								<input type="text" class="form-control input-lg" name="txtCompanyName" placeholder="Company name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="txtHeadline" placeholder="Headline (e.g. Internet and computer software)">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="3" name="txtField" placeholder="PHP, Python,..."></textarea>
							</div>
							<div class="form-group">
								<!-- <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> -->
								<input type="text" class="form-control" name="txtLocation" placeholder="Location, e.g. Melon Park, CA">
							</div>
							<div class="input-group input-group-sm">
								<!-- <span class="input-group-addon"><i class="fa fa-globe"></i></span> -->
								<input type="text" class="form-control" name="txtWebsite" placeholder="Website address">
							</div>
							<div class="input-group input-group-sm">
								<!-- <span class="input-group-addon"><i class="fa fa-phone"></i></span> -->
								<input type="text" class="form-control" name="txtPhone" placeholder="Phone number">
							</div>
						</div>
						 <!-- <div class="form-group col-xs-12 col-sm-6 col-md-4"> 
						 <div class="input-group input-group-sm">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
							<input type="text" class="form-control" name="txtLocation" placeholder="Location, e.g. Melon Park, CA">
						</div>
						</div>

						<div class="form-group col-xs-12 col-sm-6 col-md-4">
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><i class="fa fa-globe"></i></span>
							<input type="text" class="form-control" name="txtWebsite" placeholder="Website address">
						</div>
						</div>

						<div class="form-group col-xs-12 col-sm-6 col-md-4">
						<div class="input-group input-group-sm">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
							<input type="text" class="form-control" name="txtPhone" placeholder="Phone number">
						</div> 
						</div> -->
					</div>
				</div>
			</div>
		</div>
      </header>
      <!-- END Page header -->


      <!-- Main container -->
      <main>
        <!-- Submit -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit it</h2>
              <p>Please review your information once more and press the below button to put your company online.</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round" name="submitCompany">Submit your company</button></p>

          </div>
        </section>
        <!-- END Submit -->
      </main>
      <!-- END Main container -->

    </form>

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
    <script src="assets/vendors/summernote/summernote.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
