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
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.php">Login</a> or <a href="user-register.php">register</a>
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
            <a href="#">Position</a>
            <ul>
              <li><a href="job-list-1.php">Browse jobs - 1</a></li>
              <li><a href="job-list-2.php">Browse jobs - 2</a></li>
              <li><a href="job-list-3.php">Browse jobs - 3</a></li>
              <li><a href="job-detail.php">Job detail</a></li>
              <li><a href="job-apply.php">Apply for job</a></li>
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
            <a class="active" href="#">Company</a>
            <ul>
              <li><a class="active" href="company-list.php">Browse companies</a></li>
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
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Browse companies</h1>
        <p class="lead text-center">Use following search box to find companies that fits you better</p>
      </div>

      <div class="container">
        <form action="#">

          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Keyword">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Location">
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
              <button class="btn btn-primary">Apply filter</button>
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
              <h5>We found <strong>86</strong> matches, you're watching <i>10</i> to <i>15</i></h5>
            </div>

            <!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4>Google</h4>
                    <h5>Internet and computer software</h5>
                  </div>
                  <span class="open-position">15 open position</span>
                </header>

                <div class="item-body">
                  <p>Google Inc. is an American multinational technology company specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, and software. Most of its profits are derived from AdWords, an online advertising service that places advertising near the list of search results.</p>
                </div>
              </a>
            </div>
            <!-- END Company detail -->


            <!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php">
                <header>
                  <img src="assets/img/logo-facebook.png" alt="">
                  <div class="hgroup">
                    <h4>Facebook</h4>
                    <h5>Internet</h5>
                  </div>
                  <span class="open-position">6 open position</span>
                </header>

                <div class="item-body">
                  <p>Facebook is a corporation and online social networking service headquartered in Menlo Park, California, in the United States. Its website was launched on February 4, 2004, by Mark Zuckerberg with his Harvard College roommates and fellow students Eduardo Saverin, Andrew McCollum, Dustin Moskovitz and Chris Hughes. The founders had initially limited the website's membership to Harvard students, but later expanded it to colleges in the Boston area, the Ivy League, and Stanford University. It gradually added support for students at various other universities and later to high-school students.</p>
                </div>
              </a>
            </div>
            <!-- END Company detail -->



            <!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php">
                <header>
                  <img src="assets/img/logo-envato.png" alt="">
                  <div class="hgroup">
                    <h4>Envato</h4>
                    <h5>Internet, Web Design, Web Development</h5>
                  </div>
                  <span class="open-position">2 open position</span>
                </header>

                <div class="item-body">
                  <p>Envato (formerly Eden) operates a group of digital marketplaces that sell creative assets for web designers, including themes, graphics, video, audio, photography and 3D models. It has over 1.5 million active buyers and sellers and over 6 million community members. Its highest-trafficked marketplace, ThemeForest, is the 204th most visited site in the world according to Alexa.</p>
                </div>
              </a>
            </div>
            <!-- END Company detail -->



            <!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php">
                <header>
                  <img src="assets/img/logo-microsoft.jpg" alt="">
                  <div class="hgroup">
                    <h4>Microsoft</h4>
                    <h5>Computer software and hardware</h5>
                  </div>
                  <span class="open-position">7 open position</span>
                </header>

                <div class="item-body">
                  <p>Microsoft is an American multinational technology company headquartered in Redmond, Washington, that develops, manufactures, licenses, supports and sells computer software, consumer electronics and personal computers and services. Its best known software products are the Microsoft Windows line of operating systems, Microsoft Office office suite, and Internet Explorer and Edge web browsers. Its flagship hardware products are the Xbox game consoles and the Microsoft Surface tablet lineup. It is the world's largest software maker by revenue, and one of the world's most valuable companies.</p>
                </div>
              </a>
            </div>
            <!-- END Company detail -->


            <!-- Company detail -->
            <div class="col-xs-12">
              <a class="item-block" href="company-detail.php">
                <header>
                  <img src="assets/img/logo-linkedin.png" alt="">
                  <div class="hgroup">
                    <h4>Linkedin</h4>
                    <h5>Internet</h5>
                  </div>
                  <span class="open-position">3 open position</span>
                </header>

                <div class="item-body">
                  <p>LinkedIn is a business-oriented social networking service. Founded in December 2002 and launched on May 5, 2003, it is mainly used for professional networking. As of 2015, most of the site's revenue comes from selling access to information about its users to recruiters and sales professionals. In 2006, LinkedIn increased to 20 million members. As of October 2015, LinkedIn reports more than 400 million acquired users in more than 200 countries and territories.</p>
                </div>
              </a>
            </div>
            <!-- END Company detail -->


            <!-- Page navigation -->
            <nav class="text-center">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <i class="ti-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- END Page navigation -->

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
