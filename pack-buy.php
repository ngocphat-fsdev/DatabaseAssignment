<?php
	function phpAlertSuccess($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		echo "<script> location.replace('index.php');</script>";
	}
	include('permission.php');
	if (isset($_GET['id']))
	{
        include('connectDB.php');
        $id_pack = $_GET['id'];
        $id_account = $_SESSION['ID'];
        $tsql_callSP = "SELECT * FROM COMPANY WHERE Id_Account = $id_account";
        $stmt = sqlsrv_query($conn, $tsql_callSP);
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        $id_company = $row['ID'];
        $padmethod = "INTERNET BANKING";
        $tsql_callSP = "EXEC purchase_insert ?, ?, ?";
        $param = array(
			array($id_pack, SQLSRV_PARAM_IN),
			array($id_company, SQLSRV_PARAM_IN),
			array($padmethod, SQLSRV_PARAM_IN)
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
        phpAlertSuccess("Mua gói thành công.");
        exit();
	}
?>

