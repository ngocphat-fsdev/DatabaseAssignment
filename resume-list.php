<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Resume list</title>

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
            <a class="active" href="#">Resume</a>
            <ul>
              <li><a class="active" href="resume-list.php">Browse resumes</a></li>
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
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg);">
      <div class="container page-name">
        <h1 class="text-center">Browse resumes</h1>
        <p class="lead text-center">Use following search box to find resumes that fits your position better</p>
      </div>

      <div class="container">
        <form action="#">

          <div class="row">
            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Keyword: name, skills, or tags">
            </div>

            <div class="form-group col-xs-12 col-sm-4">
              <input type="text" class="form-control" placeholder="Location: city, state or zip">
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


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Hourly rate</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="rate1" name="rate" checked>
                  <label for="rate1">All rates</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate2" name="rate">
                  <label for="rate2">$0 - $50 <small>(364)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate3" name="rate">
                  <label for="rate3">$50 - $100 <small>(684)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate4" name="rate">
                  <label for="rate4">$100 - $200 <small>(195)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="rate5" name="rate">
                  <label for="rate5">$200+ <small>(39)</small></label>
                </div>
              </div>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Academic degree</h6>
              <div class="checkall-group">
                <div class="checkbox">
                  <input type="checkbox" id="degree1" name="degree" checked>
                  <label for="degree1">All degrees</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree2" name="degree">
                  <label for="degree2">Associate degree <small>(216)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree3" name="degree">
                  <label for="degree3">Bachelor's degree <small>(569)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree4" name="degree">
                  <label for="degree4">Master's degree <small>(439)</small></label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" id="degree5" name="degree">
                  <label for="degree5">Doctoral degree <small>(84)</small></label>
                </div>
              </div>
            </div>


            <div class="form-group col-xs-12 col-sm-4">
              <h6>Sort by</h6>
              <div class="radio">
                <input type="radio" name="sortby" id="sortby1" value="option1" checked>
                <label for="sortby1">Relevance</label>
              </div>

              <div class="radio">
                <input type="radio" name="sortby" id="sortby2" value="option2">
                <label for="sortby2">Highest rate first</label>
              </div>

              <div class="radio">
                <input type="radio" name="sortby" id="sortby3" value="option3">
                <label for="sortby3">Lowest rate first</label>
              </div>

              <div class="radio">
                <input type="radio" name="sortby" id="sortby4" value="option4">
                <label for="sortby4">Highest degree first</label>
              </div>

              <div class="radio">
                <input type="radio" name="sortby" id="sortby5" value="option5">
                <label for="sortby5">Lowest degree first</label>
              </div>

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
              <h5>We found <strong>357</strong> matches, you're watching <i>10</i> to <i>20</i></h5>
            </div>
            
            <!-- Resume detail -->
            <div class="col-xs-12">
              <a class="item-block" href="resume-detail.php">
                <header>
                  <img class="resume-avatar" src="assets/img/avatar.jpg" alt="">
                  <div class="hgroup">
                    <h4>John Doe</h4>
                    <h5>Front-end developer</h5>
                  </div>
                </header>

                <div class="item-body">
                  <p>20+ years of experience working on front-end development for major companies. I develop well-designed, accessible, and standards-based web sites and applications. Highly effective communicator and team leader with a proven track record of delivering quality work on time and within budget working as a remote employee. Experience and success in both agency and major corporate environments.</p>

                  <div class="tag-list">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>Bootstrap</span>
                    <span>Wordpress</span>
                  </div>
                </div>

                <footer>
                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Menlo Park, CA</span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>$55 / hour</span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span>Master of Computer Science</span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Resume detail -->
          </div>

          <div class="row">
            <!-- Resume detail -->
            <div class="col-sm-12 col-md-6">
              <a class="item-block" href="resume-detail.php">
                <header>
                  <img class="resume-avatar" src="assets/img/avatar-1.jpg" alt="">
                  <div class="hgroup">
                    <h4>Bikesh Soltanian</h4>
                    <h5>Java developer</h5>
                  </div>
                </header>

                <div class="item-body">
                  <p>I develop well-designed, accessible, and standards-based web sites and applications. Highly effective communicator and team leader with a proven track record of delivering quality work on time and within budget working as a remote employee.</p>

                  <div class="tag-list">
                    <span>J2EE</span>
                    <span>J2SE</span>
                    <span>Android</span>
                  </div>
                </div>

                <footer>
                  <ul class="details cols-2">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Fairfield, IA</span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>$60 / hour</span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Resume detail -->


            <!-- Resume detail -->
            <div class="col-sm-12 col-md-6">
              <a class="item-block" href="resume-detail.php">
                <header>
                  <img class="resume-avatar" src="assets/img/avatar-2.jpg" alt="">
                  <div class="hgroup">
                    <h4>Chris Hernandeziyan</h4>
                    <h5>.Net developer</h5>
                  </div>
                </header>

                <div class="item-body">
                  <p>I develop well-designed, accessible, and standards-based web sites and applications. Highly effective communicator and team leader with a proven track record of delivering quality work on time and within budget working as a remote employee.</p>

                  <div class="tag-list">
                    <span>VB.Net</span>
                    <span>C#</span>
                    <span>WPF</span>
                    <span>ASP.Net</span>
                    <span>MVC.Net</span>
                  </div>
                </div>

                <footer>
                  <ul class="details cols-2">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Seattle, WA</span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>$50 / hour</span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Resume detail -->
          </div>

          <div class="row">
            <!-- Resume detail -->
            <div class="col-sm-12 col-md-6">
              <a class="item-block" href="resume-detail.php">
                <header>
                  <img class="resume-avatar" src="assets/img/avatar-3.jpg" alt="">
                  <div class="hgroup">
                    <h4>Mary Amiri</h4>
                    <h5>Quality assurance</h5>
                  </div>
                </header>

                <div class="item-body">
                  <p>I develop well-designed, accessible, and standards-based web sites and applications. Highly effective communicator and team leader with a proven track record of delivering quality work on time and within budget working as a remote employee.</p>

                  <div class="tag-list">
                    <span>Testcase</span>
                    <span>Unit test</span>
                    <span>jUnit</span>
                    <span>Git</span>
                  </div>
                </div>

                <footer>
                  <ul class="details cols-2">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Fremont, CA</span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>$70 / hour</span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Resume detail -->



            <!-- Resume detail -->
            <div class="col-sm-12 col-md-6">
              <a class="item-block" href="resume-detail.php">
                <header>
                  <img class="resume-avatar" src="assets/img/avatar-4.jpg" alt="">
                  <div class="hgroup">
                    <h4>Sarah Luizgarden</h4>
                    <h5>UI/UX developer</h5>
                  </div>
                </header>

                <div class="item-body">
                  <p>I develop well-designed, accessible, and standards-based web sites and applications. Highly effective communicator and team leader with a proven track record of delivering quality work on time and within budget working as a remote employee.</p>

                  <div class="tag-list">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>Bootstrap</span>
                    <span>Photoshop</span>
                  </div>
                </div>

                <footer>
                  <ul class="details cols-2">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span>Columbus, OH</span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span>$45 / hour</span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Resume detail -->
          </div>


          <!-- Page navigation -->
          <nav class="text-center">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <i class="ti-angle-left"></i>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
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
