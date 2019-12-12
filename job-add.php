<?php
    include 'permission.php';
    function phpAlert($msg) {
      echo '<script type="text/javascript">alert("' . $msg . '")</script>';
      echo "<script> location.replace('index.php');</script>";
    }
    include('connectDB.php');
    $id_account = $_SESSION['ID'];
    // $tsql_callSP = "EXEC CheckCompany '$id_account' ";
    // $stmt = sqlsrv_query($conn, $tsql_callSP);
    // $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
    // $company_name = row['NAME'];
    $company_name = "HCMUT";
	if (isset($_POST['btnSubmit'])){
		$title = $_POST['title'];
		$recruitUploaderName = $_SESSION['USERNAME'];
		$worktime = $_POST['worktime'];
		$salary = $_POST['salary'];
		$CVDeadline = $_POST['DeadlineCV'];
		$location = $_POST['location'];
		$quantity = $_POST['quantity'];
		$position = $_POST['position'];
		$requirement = $_POST['Requirement'];
		$tsql_callSP = "EXEC RecruitPostInsert ?, ?, ?, ?, ?, ?, ?, ?, ?";
		$param = array(
			array($id_account, SQLSRV_PARAM_IN),
			array($title, SQLSRV_PARAM_IN),
			array($location, SQLSRV_PARAM_IN),
			array($requirement, SQLSRV_PARAM_IN),
			array($position, SQLSRV_PARAM_IN),
			array($worktime, SQLSRV_PARAM_IN),
			array($salary, SQLSRV_PARAM_IN),
			array($quantity, SQLSRV_PARAM_IN),
			array($CVDeadline, SQLSRV_PARAM_IN),

		);	
		$stmt = sqlsrv_query($conn, $tsql_callSP, $param);
		if ($stmt == False) {
			if( ($errors = sqlsrv_errors() ) != null) {
				foreach( $errors as $error ) {
					echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
					echo "code: ".$error[ 'code']."<br />";
					echo "message: ".$error[ 'message']."<br />";
				}
			}
			die();
		}
		sqlsrv_free_stmt($stmt);
		sqlsrv_close($conn);
		phpAlert("Tạo tin tuyển dụng thành công.");
        exit();
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

    <title>TheJobs - Add job</title>

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
	if (!isPoster()){
		Header( "HTTP/1.1 301 Moved Permanently" );
		header('Location: index.php');
		exit();
	}
	include 'HeaderPoster-1.php';
	?>
    <!-- END Navigation bar -->

    <form action="job-add.php" method="POST" > 
    <!-- Page header -->
    <header class="page-header">
      <div class="container page-name">
        <h1 class="text-center">Add a new job</h1>
        <p class="lead text-center">Create a new vacancy for your company and put it online.</p>
      </div>

      <div class="container">
		<div class="row">
			<div class="form-group col-xs-12 col-sm-6">
				<input type="text" name="title" class="form-control input-lg" placeholder="Job title, e.g. Front-end developer">
			</div>

			<div class="form-group col-xs-12 col-sm-6">
				<a href="company-detail.php?id=3"> <?php echo "Company: " . $company_name; ?> </a>
			</div>


			<div class="form-group col-xs-12">
				<textarea name="Requirement" class="form-control" rows="3" placeholder="Short description"></textarea>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-4">
				<div class="input-group input-group-sm">
				<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<input name="location" type="text" class="form-control" placeholder="Location, e.g. Melon Park, CA">
				</div>
			</div>

          	<div class="form-group col-xs-12 col-sm-6 col-md-4">
				<div class="input-group input-group-sm">
					<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
					<select name="position" class="form-control selectpicker">
						<option value = "Full time">Full time</option>
						<option value = "Part time">Part time</option>
						<option value = "Internship">Internship</option>
						<option value = "Freelance">Freelance</option>
						<option value = "Remote">Remote</option>
					</select>
				</div>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-4">
				<div class="input-group input-group-sm">
					<span class="input-group-addon"><i class="fa fa-money"></i></span>
					<input type="date" name="DeadlineCV" class="form-control input-lg" >
				</div>
			</div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-money"></i></span>
              <input name="salary" type="text" class="form-control" placeholder="Salary">
            </div>
          </div>

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
              <input name="worktime" type="text" class="form-control" placeholder="Working hours, e.g. 40">
              <span class="input-group-addon">hours / week</span>
            </div>
          </div>

          <!-- <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-flask"></i></span>
              <input type="text" class="form-control" placeholder="Experience, e.g. 5">
              <span class="input-group-addon">Years</span>
            </div>
          </div> -->

          <div class="form-group col-xs-12 col-sm-6 col-md-4">
            <div class="input-group input-group-sm">
              <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
              <input name="quantity" type="text" class="form-control" placeholder="Quantity, e.g. 40">
              <span class="input-group-addon">persons</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
        <!-- Submit -->
        <section class="bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit Job</h2>
              <p>Please review your information once more and press the below button to put your job online.</p>
            </header>

            <p class="text-center"><button name="btnSubmit" class="btn btn-success btn-xl btn-round">Submit your job</button></p>

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
