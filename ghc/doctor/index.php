<?php
session_start();
include("include/config.php");
error_reporting(0);
if (isset($_POST['submit'])) {
	$uname = $_POST['username'];
	$dpassword = md5($_POST['password']);
	$ret = mysqli_query($con, "SELECT * FROM doctors WHERE docEmail='$uname' and password='$dpassword'");
	$num = mysqli_fetch_array($ret);
	if ($num > 0) {
		$_SESSION['dlogin'] = $_POST['username'];
		$_SESSION['id'] = $num['id'];
		$uid = $num['id'];
		$uip = $_SERVER['REMOTE_ADDR'];
		$status = 1;
		//Code Logs
		$log = mysqli_query($con, "insert into doctorslog(uid,username,userip,status) values('$uid','$uname','$uip','$status')");
		header("location:dashboard.php");
	} else {
		$uip = $_SERVER['REMOTE_ADDR'];
		$status = 0;
		mysqli_query($con, "insert into doctorslog(username,userip,status) values('$uname','$uip','$status')");
		$_SESSION['errmsg'] = "Invalid username or password";
		header("location:index.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Doctor Login</title>
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>

<body class="login">
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="logo margin-top-30">
				<h2 style="margin-top:20px;font-size:40px; font-weight:700; text-align:center; color:#0063d9">Global Health Care</h2>
				<h2 style="font-size:25px; font-weight:700; text-align:center;">Doctor Login</h2>
			</div>
			<div class="box-login">
				<form class="form-login" method="post">
					<fieldset>
						<legend>
							Signin to Your Account
						</legend>
						<p>
							Please Enter Credentials to Enter System.<br />
							<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg'] = ""; ?></span>
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Enter Your UserName">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Enter Your Password"><i class="fa fa-lock"></i>
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary pull-right" name="submit">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<a href="forgot-password.php" style="margin-top:5px">
							Forgot Password ?
						</a>
					</fieldset>
				</form>
				<div class="copyright">
					&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Global Health Care (Cluster2.4)</span>. <span>All Rights Reserved</span>
				</div>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/login.js"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			Login.init();
		});
	</script>
</body>
<!-- end: BODY -->

</html>