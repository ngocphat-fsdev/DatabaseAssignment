<?php
  include('permission.php');
  // checkLogin();
  if (isset($_POST['loginBtn']))
  {
    include('connectDB.php');

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['pass']);
    // kiem tra trong sql server
    $sql = "SELECT * FROM ACCOUNT WHERE USERNAME = '$username'";
    $stmt = sqlsrv_query($conn, $sql);
    if ($stmt == FALSE){
      die( print_r( sqlsrv_errors(), true));
    }

    $row = sqlsrv_fetch_array($stmt);
    if (($row['PASSWORD'] != $password)){
      header("Location: user-login.php");
      echo "Username or Password is incorrect!<br />";
      exit();
    }
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['USERNAME'] = $username;
    $_SESSION['LEVEL'] = $row['LEVEL'];
    // kiem tra phan quyen o day
    sqlsrv_close($conn);
    header("Location: index.php");
    echo "<script> location.replace('index.php');</script>";
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

    <title>TheJobs - Login</title>

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

        <form action="user-login.php" method="POST">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input name="username" type="text" class="form-control" placeholder="Email">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input name="pass" type="password" class="form-control" placeholder="Password">
            </div>
          </div>

          <button name="loginBtn" class="btn btn-primary btn-block" type="submit">Login</button>

          <div class="login-footer">
            <h6>Or login with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <a class="pull-left" href="user-forget-pass.html">Forget Password?</a>
        <a class="pull-right" href="user-register.html">Register an account</a>
      </div>

    </main>


    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
