<?php 
  include 'permission.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Apply for a job</title>

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

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.php"><img src="assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right">

          <div class="dropdown user-account">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
              <img src="assets/img/logo-envato.png" alt="avatar">
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="user-login.php">Login</a></li>
              <li><a href="user-register.php">Register</a></li>
              <li><a href="user-forget-pass.php">Forget pass</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>

        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="index.php">Home</a>
            <ul>
              <li><a href="index.php">Version 1</a></li>
              <li><a href="index-2.php">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Position</a>
            <ul>
              <li><a href="job-list-1.php">Browse jobs - 1</a></li>
              <li><a href="job-list-2.php">Browse jobs - 2</a></li>
              <li><a href="job-list-3.php">Browse jobs - 3</a></li>
              <li><a href="job-detail.php">Job detail</a></li>
              <li><a class="active" href="job-apply.php">Apply for job</a></li>
              <li><a href="job-add.php">Post a job</a></li>
              <li><a href="job-manage.php">Manage jobs</a></li>
              <li><a href="job-candidates.php">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Resume</a>
            <ul>
              <li><a href="resume-list.php">Browse resumes</a></li>
              <li><a href="resume-detail.php">Resume detail</a></li>
              <li><a href="resume-add.php">Create a resume</a></li>
              <li><a href="resume-manage.php">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.php">Browse companies</a></li>
              <li><a href="company-detail.php">Company detail</a></li>
              <li><a href="company-add.php">Create a company</a></li>
              <li><a href="company-manage.php">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-blog.php">Blog</a></li>
              <li><a href="page-post.php">Blog-post</a></li>
              <li><a href="page-about.php">About</a></li>
              <li><a href="page-contact.php">Contact</a></li>
              <li><a href="page-faq.php">FAQ</a></li>
              <li><a href="page-pricing.php">Pricing</a></li>
              <li><a href="page-typography.php">Typography</a></li>
              <li><a href="page-ui-elements.php">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Apply for the job</h1>
        <p class="lead text-center">Apply with your online resume, create new resume for the job, or make a custom application.</p>

        <hr>

        <!-- Job detail -->
        <a class="item-block item-block-flat" href="job-detail.php">
          <header>
            <img src="assets/img/logo-google.jpg" alt="">
            <div class="hgroup">
              <h4>Senior front-end developer</h4>
              <h5>Google</h5>
            </div>
            <div class="header-meta">
              <span class="location">Menlo park, CA</span>
              <time datetime="2016-03-10 20:00">34 min ago</time>
            </div>
          </header>
        </a>
        <!-- END Job detail -->

        <div class="button-group">
          <div class="action-buttons">
            <a class="btn btn-gray" href="#sec-custom">Custom application</a>
            <a class="btn btn-primary" href="#sec-resume">Apply with a resume</a>
          </div>
        </div>

      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


        <!-- Apply with resume -->
        <section id="sec-resume">
          <div class="container">

            <header class="section-header">
              <span>Apply with a resume</span>
              <h2>Select a resume</h2>
              <p>Applied for this job with one of your online available resumes</p>
            </header>
            

            <!-- Resume item -->
            <div class="item-block">
              <header>
                <a href="resume-detail.php"><img class="resume-avatar" src="assets/img/avatar.jpg" alt=""></a>
                <div class="hgroup">
                  <h4><a href="resume-detail.php">John Doe</a></h4>
                  <h5>Front-end developer</h5>
                </div>
                <div class="header-meta">
                  <span class="location">Menlo park, CA</span>
                  <span class="rate">$55 per hour</span>
                </div>
              </header>

              <footer>
                <p class="status"><strong>Updated on:</strong> March 10, 2016</p>

                <div class="action-btn">
                  <a class="btn btn-xs btn-gray" href="#">Edit</a>
                  <a class="btn btn-xs btn-success" href="#">Select</a>
                </div>
              </footer>
            </div>
            <!-- END Resume item -->


            <!-- Resume item -->
            <div class="item-block">
              <header>
                <a href="resume-detail.php"><img class="resume-avatar" src="assets/img/avatar.jpg" alt=""></a>
                <div class="hgroup">
                  <h4><a href="resume-detail.php">John Doe</a></h4>
                  <h5>Full stack developer</h5>
                </div>
                <div class="header-meta">
                  <span class="location">Menlo park, CA</span>
                  <span class="rate">$85 per hour</span>
                </div>
              </header>

              <footer>
                <p class="status"><strong>Updated on:</strong> March 03, 2016</p>

                <div class="action-btn">
                  <a class="btn btn-xs btn-gray" href="#">Edit</a>
                  <a class="btn btn-xs btn-success" href="#">Select</a>
                </div>
              </footer>
            </div>
            <!-- END Resume item -->


            <!-- Resume item -->
            <div class="item-block">
              <header>
                <a href="resume-detail.php"><img class="resume-avatar" src="assets/img/avatar.jpg" alt=""></a>
                <div class="hgroup">
                  <h4><a href="resume-detail.php">John Doe</a></h4>
                  <h5>PHP developer <span class="label label-info">Hidden</span></h5>
                </div>
                <div class="header-meta">
                  <span class="location">Menlo park, CA</span>
                  <span class="rate">$60 per hour</span>
                </div>
              </header>

              <footer>
                <p class="status"><strong>Updated on:</strong> Feb 27, 2016</p>

                <div class="action-btn">
                  <a class="btn btn-xs btn-gray" href="#">Edit</a>
                  <a class="btn btn-xs btn-success" href="#">Select</a>
                </div>
              </footer>
            </div>
            <!-- END Resume item -->

            <br>

            <div class="row">
              <div class="col-xs-12 col-md-3">
                <a class="btn btn-block btn-primary" href="resume-add.php">Add new resume</a>
              </div>
            </div>
            
          </div>
        </section>
        <!-- END Apply with resume -->


        <!-- Custom application -->
        <section id="sec-custom" class="bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Custom application</span>
              <h2>Apply now</h2>
              <p>Apply for this job with a custom application.</p>
            </header>

            <form>
              <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                  <input type="text" class="form-control input-lg" placeholder="Name">
                </div>

                <div class="form-group col-xs-12 col-md-6">
                  <input type="email" class="form-control input-lg" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Message"></textarea>
              </div>

              <div class="form-group">
                
              </div>
              
              <div class="row">
                <div class="col-xs-6 col-md-3">
                  <div class="upload-button upload-button-block">
                    <button class="btn btn-block btn-success">Attach your CV</button>
                    <input name="cv" type="file">
                  </div>
                </div>

                <div class="col-xs-6 col-md-3">
                  <button type="submit" class="btn btn-block btn-primary">Submit application</button>
                </div>
              </div>
            </form>

          </div>
        </section>
        <!-- END Custom application -->


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
    <script src="assets/vendors/summernote/summernote.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
