<?php
include_once('user/include/config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $dscrption = $_POST['description'];
    echo "<script>alert('Your information successfully submitted');</script>";
    echo "<script>window.location.href ='index.php'</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Hospital Management System </title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- ################# Header Starts Here#######################--->
    <header id="menu-jk" style="width: 100%;">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row" style="margin-right: -200px;">
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li style="font-size: 40px; color:#0063D9"><i class="fa fa-heartbeat"></i><a style="font-size: 40px; color:#0063D9" href="#"> GLOBAL HEALTH CARE</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint" style="padding-top: 37px;">
                        <a class="btn btn-success" href="user/index.php">Make Appointment Now</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  ************************* Logins ************************** -->
    <section id="home" class="our-blog container-fluid">
        <h2 class="animated bounceInDown" style="font-size: 30px;text-align:center;">Welcome to</h2>
        <h1 class="animated bounceInDown" style="margin-bottom:30px;font-size: 50px;text-align:center;">Global Health Care</h1>
        <div class="container">
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">
                            <img src="assets/images/admin.jpg" alt="">
                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                                <a href="admin">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">
                            <img src="assets/images/doctor.jpg" alt="">
                            <div class="blog-single-det">
                                <h6>Doctor login</h6>
                                <a href="doctor">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">
                            <img src="assets/images/patient.jpg" alt="">
                            <div class="blog-single-det">
                                <h6>User Login</h6>
                                <a href="user">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ################# Footer Starts Here#######################--->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 map-img" style="font-weight: 400; text-indent: 0px;font-family: system-ui;">
                    <h1>About Us</h1>
                    <p style="font-weight: 300;width:1080px; text-indent: 0px;font-family: system-ui;">Welcome to our Hospital Management platform, where efficiency meets compassion in healthcare. Our user-friendly web pages provide a seamless experience for patients, offering easy registration, appointment scheduling, and secure access to medical records. With streamlined staff management, inventory tracking, and billing processes, we aim to optimize every aspect of healthcare administration.</p>
                    </br>
                    Jaffna Genaral Hospital, Jaffna.<br>
                    Phone: 0771234567 <br>
                    Email: genaralhospital@gmail.com<br>
                    Opening Hours: 24 Hours
                    </p>
                    </br>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy" style="font-family: system-ui;background-color: #0063d9;font-weight:600">
        <div class="container">
            Hospital Management System | Developed By Dynamic Developers (Cluster 2.4)
        </div>
    </div>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>

</html>