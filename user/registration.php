<?php
include_once('include/config.php');
if (isset($_POST['submit'])) {
	$fname = $_POST['full_name'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$query = mysqli_query($con, "insert into users(fullname,address,gender,email,password) values('$fname','$address','$gender','$email','$password')");
	if ($query) {
		echo "<script>alert('Successfully Registered. You can login now');</script>";
		//header('location:index.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Registration</title>
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
	<script type="text/javascript">
		function valid() {
			if (document.registration.password.value != document.registration.password_again.value) {
				alert("Password and Confirm Password Field do not match  !!");
				document.registration.password_again.focus();
				return false;
			}
			return true;
		}
	</script>
</head>

<body class="login">
	<!-- start: REGISTRATION -->
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="logo margin-top-30">
				<a href="../index.php">
					<h2 style="margin-top:20px;font-size:40px; font-weight:700; text-align:center; color:#0063d9">Global Health Care</h2>
					<h2 style="font-size:25px; font-weight:700; text-align:center;">User Registration</h2>
				</a>
			</div>
			<!-- start: REGISTER BOX -->
			<div class="box-register">
				<form name="registration" id="registration" method="post" onSubmit="return valid();">
					<fieldset>
						<legend>
							Sign Up
						</legend>
						<p>
							Enter Your Personal Details Here:
						</p>
						<div class="form-group">
							<input type="text" class="form-control" name="full_name" placeholder="Enter Your Full Name" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Enter Your Address" required>
						</div>
						<div class="form-group">
							<label class="block">
								Gender
							</label>
							<div class="clip-radio radio-primary">
								<input type="radio" id="rg-male" name="gender" value="Male">
								<label for="rg-male">
									Male
								</label>
								<input type="radio" id="rg-female" name="gender" value="Female">
								<label for="rg-female">
									Female
								</label>
							</div>
						</div>
						<p>
							Enter Your Account Details Here:
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()" placeholder="Enter Your Email" required>
								<i class="fa fa-envelope"></i> </span>
							<span id="user-availability-status1" style="font-size:12px;"></span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password_again" name="password_again" placeholder="Enter Your Password Again" required>
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<div class="checkbox clip-check check-primary">
								<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
								<label for="agree">
									I Agree Terms and Conditions
								</label>
							</div>
						</div>
						<div class="form-actions">
							<p>
								Already Have An Account?
								<a href="index.php">
									Click Here
								</a>
							</p>
							<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
								Register <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
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
	<script>
		function userAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "func-check_availability.php",
				data: 'email=' + $("#email").val(),
				type: "POST",
				success: function(data) {
					$("#user-availability-status1").html(data);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
	</script>
</body>
<!-- end: BODY -->

</html>