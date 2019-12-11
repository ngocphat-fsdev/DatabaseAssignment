<?php
	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		echo "<script> location.replace('index.php');</script>";
	}
	include 'connectDB.php';
	include 'permission.php';
	if (isset($_POST['btnSearch'])){
		$location = $_POST["location"];
		$keyword = $_POST["keyword"];
		$location = "%".$location."%";
		$keyword = "%".$keyword."%";
		$tsql_callSP = "SELECT * FROM SearchLocation ( '$keyword','$location')";
    	$stmt = sqlsrv_query($conn, $tsql_callSP);
      	if ($stmt == false){
        	die( print_r( sqlsrv_errors(), true));
        }
	}
	else {
		$tsql_callSP = "SELECT * FROM COMPANY";
    	$stmt = sqlsrv_query($conn, $tsql_callSP);
      	if ($stmt == false){
        	die( print_r( sqlsrv_errors(), true));
        }
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

    <title>TheJobs - Company list</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav bg-alt">

    <!-- Navigation bar -->
    <?php include 'HeaderCompany-2.php' ?>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Browse companies</h1>
        <p class="lead text-center">Use following search box to find companies that fits you better</p>
      </div>

      <div class="container">
        <form action="company-list.php" method="POST">

          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" name="keyword" class="form-control" placeholder="Keyword">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" name="location" class="form-control" placeholder="Location">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <select class="form-control selectpicker" multiple>
                <option selected>All categories</option>
                <option>Developer</option>
                <option>Designer</option>
                <option>Customer service</option>
                <option>Finance</option>
                <option>Healthcare</option>
                <option>Sale</option>
                <option>Marketing</option>
                <option>Information technology</option>
                <option>Others</option>
              </select>
            </div>

          </div>

          <div class="button-group">
            <div class="action-buttons">
              <button name="btnSearch" class="btn btn-primary" type="submit">Apply filter</button>
            </div>
          </div>

        </form>

      </div>

    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">

            <div class="col-xs-12">
              <br>
            </div>
			<?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){ 
				$id_company = $row['ID'];
				$tsql_callSP = "SELECT COUNT(ID) AS NUMPOST FROM F_RPOST_INFO('$id_company') AS NUMJOB";
				$stmt1 = sqlsrv_query($conn, $tsql_callSP);
				$row1 = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC);
			?>
            <!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php?id=<?php echo $row['ID'] ?>">
                <header>
                  <img src="<?php echo $row['LOGO'] ?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row['NAME'] ?></h4>
                    <h5><?php echo $row['BUSINESS_TYPE'] ?></h5>
                  </div>
                  <span class="open-position"><?php echo $row1['NUMPOST'] ?> open position</span>
                </header>

                <div class="item-body">
                  <p><?php echo $row['BUSINESS_FIELD'] ?></p>
                </div>
              </a>
			</div>
			<?php } ?>
            <!-- END Company detail -->
          </div>
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
