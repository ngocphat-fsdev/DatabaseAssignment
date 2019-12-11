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

    <title>TheJobs - Blog</title>

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

   <?php 
    include "HeaderUser.php";
   ?>


    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Blog</h1>
        <p class="lead text-center">Keep up to date with the latest news</p>
        <p>
          <?php
            echo "<a href='page-blog.php?topview=1'>Top views blog</a><br />";  
          ?>
        <p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main class="container blog-page">

      <div class="row">

        <div class="col-md-8 col-lg-9">
          
          <?php 
            include "connectDB.php";
            if ($_GET['topview'] == 1){
              $sql = "SELECT dbo.blog_show_most_view()";
              $stmt = sqlsrv_query($conn, $sql);
              $row = sqlsrv_fetch_array($stmt);
              $id_user = $row[0];
              $sql = "EXEC blog_show_blogID ".$id_user;
              $stmt = sqlsrv_query($conn, $sql);
              $row = sqlsrv_fetch_array($stmt);
          ?>
              
              <article class="post">
            <div class="post-media">
              <a href="page-post.php"><img src="assets/img/blog-1.jpg" alt="..."></a>
            </div>

            <header>
              <h2><a href="page-post.php">
                <?php echo $row['TITLE']?>
              </a></h2>
              <p><?php echo date_format($row['UPLOAD_TIME'], 'Y-m-d H:i:s'); ?></p>
            </header>

            <div class="blog-content">
              <p class="text-justify">
                <?php echo substr($row['CONTENT'], 0, 100); ?>
              </p>
            </div>
            
              <p class="read-more">
                <?php
                 echo "<a class='btn btn-primary btn-outline' href='page-post.php?id=". $row['ID'] ."'>Continue reading</a>";
                ?>  
              </p>
            
          </article>
              
          <?php
            }
            else
            {
              $sql = "EXEC blog_show_all";
              $stmt = sqlsrv_query($conn, $sql);
              if ($stmt){
                //$row = sqlsrv_fetch_array($stmt);
                while ($row = sqlsrv_fetch_array($stmt)){
          ?>

          <article class="post">
            <div class="post-media">
              <a href="page-post.php"><img src="assets/img/blog-1.jpg" alt="..."></a>
            </div>

            <header>
              <h2><a href="page-post.php">
                <?php echo $row['TITLE']?>
              </a></h2>
              <p><?php echo date_format($row['UPLOAD_TIME'], 'Y-m-d H:i:s'); ?></p>
            </header>

            <div class="blog-content">
              <p class="text-justify">
                <?php echo substr($row['CONTENT'], 0, 100); ?>
              </p>
            </div>
            
              <p class="read-more">
                <?php
                 echo "<a class='btn btn-primary btn-outline' href='page-post.php?id=". $row['ID'] ."'>Continue reading</a>";
                ?>  
              </p>
            
          </article>

          <?php 
              }
            }
          }
            sqlsrv_close($conn);
          ?>

          <nav>
            <ul class="pager">
              <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Older posts</a></li>
              <li class="next"><a href="#">Newer posts <i class="ti-arrow-right"></i></a></li>
            </ul>
          </nav>

        </div>
        
        <div class="col-md-4 col-lg-3">

          <div class="widget">
            <h6 class="widget-title">Search</h6>
            <div class="widget-body">
              <form method="get" target="#">
                <input class="form-control" type="text" name="s" placeholder="Enter your keyword">
              </form>
            </div>
          </div>

          <div class="widget">
            <h6 class="widget-title">Popular</h6>
            <ul class="widget-body media-list">
              <li>
                <div class="thumb"><a href="page-post.php"><img src="assets/img/blog-1-thumb.jpg" alt="..."></a></div>
                <div class="content">
                  <h5><a href="page-post.php">How to Design Your Workspace for Productivity</a></h5>
                  <time datetime="2016-04-04 20:00">April 04, 2016</time>
                </div>
              </li>

              <li>
                <div class="thumb"><a href="page-post.php"><img src="assets/img/blog-2-thumb.jpg" alt="..."></a></div>
                <div class="content">
                  <h5><a href="page-post.php">Office Dress Code Do's and Don'ts</a></h5>
                  <time datetime="2016-03-28 20:00">March 28, 2016</time>
                </div>
              </li>

              <li>
                <div class="thumb"><a href="page-post.php"><img src="assets/img/blog-3-thumb.jpg" alt="..."></a></div>
                <div class="content">
                  <h5><a href="page-post.php">Why People Thrive in Coworking Spaces</a></h5>
                  <time datetime="2016-03-17 20:00">March 17, 2016</time>
                </div>
              </li>
            </ul>
          </div>

          <div class="widget widget_categories">
            <h6 class="widget-title">Categories</h6>
            <ul class="widget-body">
              <li class="cat-item"><a href="#">News</a></li>
              <li class="cat-item"><a href="#">Companies</a></li>
              <li class="cat-item"><a href="#">Market</a></li>
              <li class="cat-item"><a href="#">Candidates</a></li>
              <li class="cat-item"><a href="#">Positions</a></li>
              <li class="cat-item"><a href="#">Stats</a></li>
            </ul>
          </div>

          <div class="widget widget_tag_cloud">
            <h6 class="widget-title">Tags</h6>
            <div class="widget-body">
              <a href="#">blog</a>
              <a href="#">new</a>
              <a href="#">google</a>
              <a href="#">position</a>
              <a href="#">facebook</a>
              <a href="#">hire</a>
              <a href="#">chance</a>
              <a href="#">resume</a>
              <a href="#">tip</a>
            </div>
          </div>

        </div>      

      </div>

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
