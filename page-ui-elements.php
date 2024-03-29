<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - UI Elements</title>

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
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.php">Browse companies</a></li>
              <li><a href="company-detail.php">Company detail</a></li>
              <li><a href="company-add.php">Create a company</a></li>
              <li><a href="company-manage.php">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Pages</a>
            <ul>
              <li><a href="page-blog.php">Blog</a></li>
              <li><a href="page-post.php">Blog-post</a></li>
              <li><a href="page-about.php">About</a></li>
              <li><a href="page-contact.php">Contact</a></li>
              <li><a href="page-faq.php">FAQ</a></li>
              <li><a href="page-pricing.php">Pricing</a></li>
              <li><a href="page-typography.php">Typography</a></li>
              <li><a class="active" href="page-ui-elements.php">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner2.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">UI Elements</h1>
        <p class="lead">Nullam at elementum risus. Quisque ornare hendrerit risus, sed cursus lectus accumsan eu. Suspendisse non ultrices urna. Aenean vel leo dictum, lobortis est non, sollicitudin lorem.</p>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <!-- Buttons -->
      <section class="demo-btn-margin">
        <div class="container">
          <header class="section-header">
            <span>Call to action</span>
            <h2>Buttons</h2>
          </header>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h4>Regular</h4>
              <a class="btn btn-primary" href="#">Sample Button</a>
              <a class="btn btn-success" href="#">Sample Button</a>
              <a class="btn btn-info" href="#">Sample Button</a>
              <a class="btn btn-warning" href="#">Sample Button</a>
              <a class="btn btn-danger" href="#">Sample Button</a>
              <a class="btn btn-black" href="#">Sample Button</a>
              <a class="btn btn-white" href="#">Sample Button</a>
            </div>

            <div class="col-sm-12 col-md-6">
              <h4>Ouline</h4>
              <a class="btn btn-outline btn-primary" href="#">Sample Button</a>
              <a class="btn btn-outline btn-success" href="#">Sample Button</a>
              <a class="btn btn-outline btn-info" href="#">Sample Button</a>
              <a class="btn btn-outline btn-warning" href="#">Sample Button</a>
              <a class="btn btn-outline btn-danger" href="#">Sample Button</a>
              <a class="btn btn-outline btn-black" href="#">Sample Button</a>
              <a class="btn btn-outline btn-white" href="#">Sample Button</a>
            </div>
          </div>

          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h4>Round</h4>
              <a class="btn btn-round btn-primary" href="#">Sample Button</a>
              <a class="btn btn-round btn-success" href="#">Sample Button</a>
              <a class="btn btn-round btn-info" href="#">Sample Button</a>
              <a class="btn btn-round btn-warning" href="#">Sample Button</a>
              <a class="btn btn-round btn-danger" href="#">Sample Button</a>
              <a class="btn btn-round btn-black" href="#">Sample Button</a>
              <a class="btn btn-round btn-white" href="#">Sample Button</a>
            </div>

            <div class="col-sm-12 col-md-6">
              <h4>Float</h4>
              <a class="btn btn-float btn-primary" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-float btn-success" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-float btn-info" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-float btn-warning" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-float btn-danger" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-float btn-black" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-float btn-white" href="#"><i class="fa fa-pencil"></i></a>
            </div>
          </div>

          <br><br>
          
          <div class="row">
            <div class="col-xs-12">
              <h4>Sizes</h4>
              <a class="btn btn-primary btn-xs" href="#">sample button</a>
              <a class="btn btn-primary btn-sm" href="#">sample button</a>
              <a class="btn btn-primary" href="#">sample button</a>
              <a class="btn btn-primary btn-lg" href="#">sample button</a>
              <a class="btn btn-primary btn-xl" href="#">sample button</a>

              <br><br>

              <a class="btn btn-primary btn-outline btn-xs" href="#">sample button</a>
              <a class="btn btn-primary btn-outline btn-sm" href="#">sample button</a>
              <a class="btn btn-primary btn-outline" href="#">sample button</a>
              <a class="btn btn-primary btn-outline btn-lg" href="#">sample button</a>
              <a class="btn btn-primary btn-outline btn-xl" href="#">sample button</a>

              <br><br>

              <a class="btn btn-primary btn-round btn-xs" href="#">sample button</a>
              <a class="btn btn-primary btn-round btn-sm" href="#">sample button</a>
              <a class="btn btn-primary btn-round" href="#">sample button</a>
              <a class="btn btn-primary btn-round btn-lg" href="#">sample button</a>
              <a class="btn btn-primary btn-round btn-xl" href="#">sample button</a>

              <br><br>

              <a class="btn btn-primary btn-float btn-xs" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-primary btn-float btn-sm" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-primary btn-float" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-primary btn-float btn-lg" href="#"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-primary btn-float btn-xl" href="#"><i class="fa fa-pencil"></i></a>
            </div>
          </div>

          <br><br>

          <div class="row">
            <div class="col-xs-12">
              <h4>Block level</h4>
              <button type="button" class="btn btn-block btn-primary">sample button</button>
              <button type="button" class="btn btn-block btn-success">sample button</button>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <button type="button" class="btn btn-block btn-danger">sample button</button>
                  <button type="button" class="btn btn-block btn-info">sample button</button>
                </div>

                <div class="col-md-6">
                  <button type="button" class="btn btn-block btn-black">sample button</button>
                  <button type="button" class="btn btn-block btn-warning">sample button</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- END Buttons -->


      <!-- Alerts -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Notification block</span>
            <h2>Alerts</h2>
          </header>

          <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully read this important alert message.
          </div>

          <div class="alert alert-info" role="alert">
            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
          </div>

          <div class="alert alert-warning" role="alert">
            <strong>Warning!</strong> Better check yourself, you're not looking too good.
          </div>

          <div class="alert alert-danger" role="alert">
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
          </div>

        </div>
      </section>
      <!-- END Alerts -->


      <!-- Form elements -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Inputs, selects, etc.</span>
            <h2>Form elements</h2>
          </header>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>Inputs</h6>
              <input type="text" class="form-control">

              <h6>With help text</h6>
              <div class="form-group">
                <input type="text" class="form-control">
                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>

              <h6>With placeholder</h6>
              <input type="text" class="form-control" placeholder="Placeholder">

              <h6>With label</h6>
              <div class="form-group">
                <label for="input1">Label text</label>
                <input type="text" id="input1" class="form-control">
              </div>

              <h6>Sizes</h6>
              <div class="form-group">
                <input type="text" class="form-control input-sm" placeholder="Small">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Normal">
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" placeholder="Big">
              </div>

            </div>

            <div class="col-sm-12 col-md-6">

              <h6>Select</h6>
              <div class="form-group">
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <select multiple class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <h6>Bootstrap Select</h6>
              <div class="form-group">
                <select class="form-control selectpicker" data-placeholder="Choose one...">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group">
                <select multiple class="form-control selectpicker" data-placeholder="Choose one...">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <h6>Textarea</h6>
              <textarea class="form-control" rows="3"></textarea>

              <h6>Input group</h6>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" placeholder="Username">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username">
                  <span class="input-group-addon">@example.com</span>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                  <span class="input-group-addon">.00</span>
                </div>
              </div>

              <div class="form-group">
                <label for="basic-url">Your vanity URL</label>
                <div class="input-group">
                  <span class="input-group-addon">https://example.com/users/</span>
                  <input type="text" class="form-control" id="basic-url">
                </div>
              </div>

            </div>
          </div>

          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>Checkbox</h6>
              <div class="checkbox">
                <input type="checkbox" id="checkbox1">
                <label for="checkbox1">Unchecked</label>
              </div>

              <div class="checkbox">
                <input type="checkbox" id="checkbox2" checked>
                <label for="checkbox2">Checked</label>
              </div>

              <div class="checkbox disabled">
                <input type="checkbox" id="checkbox3" disabled>
                <label for="checkbox3">Disabled and unchecked</label>
              </div>

              <div class="checkbox disabled">
                <input type="checkbox" id="checkbox4" disabled checked>
                <label for="checkbox4">Disabled and checked</label>
              </div>

              <h6>Switch</h6>
              <input type="checkbox" class="js-switch" checked>
              <input type="checkbox" class="js-switch-big" checked>
            </div>

            <div class="col-sm-12 col-md-6">
              <h6>Radiobox</h6>
              <div class="radio">
                <input type="radio" name="radio1" id="radio1" value="option1">
                <label for="radio1">Unchecked</label>
              </div>

              <div class="radio">
                <input type="radio" name="radio1" id="radio2" value="option2" checked>
                <label for="radio2">Checked</label>
              </div>

              <div class="radio disabled">
                <input type="radio" name="radio1" id="radio3" value="option3" disabled>
                <label for="radio3">Disabled and unchecked</label>
              </div>

              <div class="radio disabled">
                <input type="radio" name="radio2" id="radio4" value="option4" disabled checked>
                <label for="radio4">Disabled and checked</label>
              </div>


            </div>
          </div>

          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              
            </div>

            <div class="col-sm-12 col-md-6">
              
            </div>
          </div>

        </div>
      </section>
      <!-- END Form elements -->


      <!-- Social media -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Available icons</span>
            <h2>Social media</h2>
          </header>

          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h5>Normal</h5>
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="git" href="#"><i class="fa fa-git"></i></a></li>
                <li><a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
                <li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a class="flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="reddit" href="#"><i class="fa fa-reddit"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a class="lastfm" href="#"><i class="fa fa-lastfm"></i></a></li>
                <li><a class="behance" href="#"><i class="fa fa-behance"></i></a></li>
                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>

            <div class="col-sm-12 col-md-6">
              <h5>Small</h5>
              <ul class="social-icons size-sm">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="git" href="#"><i class="fa fa-git"></i></a></li>
                <li><a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
                <li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a class="flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="reddit" href="#"><i class="fa fa-reddit"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>
                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a class="lastfm" href="#"><i class="fa fa-lastfm"></i></a></li>
                <li><a class="behance" href="#"><i class="fa fa-behance"></i></a></li>
                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>


        </div>
      </section>
      <!-- END Social media -->


      <!-- Pagination -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Load more data</span>
            <h2>Pagination</h2>
          </header>

          <div class="row">
            <div class="col-xs-12">

              <h6 class="text-center">Numeric</h6>
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

              <br><br>
              <h6 class="text-center">Pager</h6>
              <nav>
                <ul class="pager">
                  <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                  <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                </ul>
              </nav>


              <br><br>
              <h6 class="text-center">Spinner</h6>
              <div class="spinner">
                <span class="dot1"></span>
                <span class="dot2"></span>
                <span class="dot3"></span>
              </div>


            </div>
          </div>


        </div>
      </section>
      <!-- END Pagination -->

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
