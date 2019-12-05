<?php
  if (isset($_POST['SignUpBtn']))
  {
    include('connectDB.php');
    include('permission.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM ACCOUNT";
    $stmt = sqlsrv_query($conn, $sql);
    $row = sqlsrv_fetch_array($stmt);
    if (($row['USERNAME'] == $username)||($row['PASSWORD'] == $password)){
      header("Location: user-register.php");
      exit();
      echo "Username or password is existed.<br />";
    }

    $sql = "INSERT INTO ACCOUNT (USERNAME, PASSWORD, USERLEVEL) VALUES (?, ?, ?)";
    $params = array($username, $password, 3);
    $stmt = sqlsrv_query( $conn, $sql, $params);
    sqlsrv_close($conn);
    header("Location: user-login.php");
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

    <title>TheJobs - Register</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="login-page">


    <main>

      <div class="login-block">
        <img src="assets/img/logo.png" alt="">
        <h1>Log into your account</h1>

        <form action="user-register.php" method="POST">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <input name="username" type="text" class="form-control" placeholder="Your name">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input name="email" type="text" class="form-control" placeholder="Your email address">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input name="password" type="password" class="form-control" placeholder="Choose a password">
            </div>
          </div>

          <button name="SignUpBtn" class="btn btn-primary btn-block" type="submit">Sign up</button>

          <div class="login-footer">
            <h6>Or register with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <p class="text-center">Already have an account? <a class="txt-brand" href="user-login.html">Login</a></p>
      </div>

    </main>


    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
