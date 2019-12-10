<?php
  include 'permission.php';
  if (isset($_POST['submitResume']) && isUser())
  {
    include "connectDB.php";

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $exp_field = addslashes($_POST['exp_field']);
    $time_accum = addslashes($_POST['time_accum']);
    $career_obj = addslashes($_POST['career_obj']);
    

    $sql = "EXEC InsertCV @userId = ?, @email = ?, @career_obj = ?, @exp_field = ?, @time_accum = ?";
    $param = array($_SESSION['ID'], $email, $career_obj, $exp_field, $time_accum);

    $stmt = sqlsrv_query($conn, $sql, $param);
    if ($stmt == false){
      die( print_r( sqlsrv_errors(), true));
    }
    sqlsrv_close($conn);
    echo '<script language="javascript">alert("CV nộp thành công")</script>';
    echo "<script> location.replace('resume-add.php');</script>";
    exit;
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

    <title>TheJobs - Add resume</title>

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
      //if (isAdmin()){
        include "HeaderUser.php";
      //}
    ?>

    <form action="resume-add.php" method="POST">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add your resume</h1>
          <p class="lead text-center">Create your resume and put it online.</p>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <input type="file" class="dropify" data-default-file="assets/img/avatar.jpg">
                <span class="help-block">Please choose a 4:6 profile picture.</span>
              </div>
            </div>

            <div class="col-xs-12 col-sm-8">
              <div class="form-group">
                <input name="name" type="text" class="form-control input-lg" placeholder="Name">
              </div>

              <div class="form-group">
                <input name="email" type="text" class="form-control input-lg" placeholder="Email">
              </div>

              <div class="form-group">
                <input name="exp_field" type="text" class="form-control" placeholder="Experience field">
              </div>

              <div class="form-group">
                <input name="career_obj" type="text" class="form-control" placeholder="Career Objective">
              </div>

              <div class="form-group">
                <input name="time_accum"type="text" class="form-control" placeholder="Time accumulate">
              </div>

            </div>
          </div>

          </div>
        </div>
      </header>
      <!-- END Page header -->


      <!-- Main container -->
      <main>

        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(assets/img/bg-facts.jpg);">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit resume</h2>
              <p>Please review your information once more and press the below button to put your resume online.</p>
            </header>

            <p class="text-center"><button class="btn btn-success btn-xl btn-round" name="submitResume">Submit your resume</button></p>

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
