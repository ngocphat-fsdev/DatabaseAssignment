<?php
	function phpAlertSuccess($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		echo "<script> location.replace('index.php');</script>";
	}
	include('permission.php');
    if (checkLogout() || !isAdmin()) {
        Header( "HTTP/1.1 301 Moved Permanently" );
        header('Location: index.php');
    }

	if (isset($_POST['SignUpBtn']))
	{
		include('connectDB.php');
		$price = $_POST['price'];
        $expire = $_POST['expire'];
        $maxpost = $_POST['maxpost'];
		$tsql_callSP = "EXEC pack_insert ?, ?, ?";
		$param = array(
			array($price, SQLSRV_PARAM_IN),
			array($expire, SQLSRV_PARAM_IN),
			array($maxpost, SQLSRV_PARAM_IN)
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
        phpAlertSuccess("Tạo gói thành công.");
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
			<h1>Insert Pack</h1>

			<form action="pack-add.php" method="POST">

			<div class="form-group">
				<div class="input-group">
				<span class="input-group-addon"><i class="ti-user"></i></span>
				<input name="price" type="text" class="form-control" placeholder="Price">
				</div>
			</div>

			<hr class="hr-xs">
			<div class="form-group">
				<div class="input-group">
				<span class="input-group-addon"><i class="ti-unlock"></i></span>
				<input name="expire" type="text" class="form-control" placeholder="Expire">
				</div>
			</div>

            <hr class="hr-xs">
			<div class="form-group">
				<div class="input-group">
				<span class="input-group-addon"><i class="ti-unlock"></i></span>
				<input name="maxpost" type="text" class="form-control" placeholder="Max Post">
				</div>
			</div>

			<hr class="hr-xs">
			<button name="SignUpBtn" class="btn btn-primary btn-block" type="submit">Submit</button>

			</form>
		</div>


		</main>


		<!-- Scripts -->
		<script src="assets/js/app.min.js"></script>
		<script src="assets/js/custom.js"></script>

	</body>
</html>
