<?php
include_once('user/include/config.php');
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $dscrption = $_POST['description'];
    $query = mysqli_query($con, "insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
    echo "<script>alert('Your information succesfully submitted');</script>";
    echo "<script>window.location.href ='index.php'</script>";
} ?>
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
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#0063d9;font-weight:bold; font-size:42px; margin-top: 1% !important;">GHS
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="user/index.php">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ################# Slider Starts Here#######################--->
    <div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video autoplay loop muted plays-inline class="hero-header">
                        <source src="assets/images/slider_home.mp4" type="video/mp4">
                    </video>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h2 class="animated bounceInDown" style="font-size: 50px;">Welcome to</h2>
                        <h1 class="animated bounceInDown" style="font-size: 70px;">Global Health Care</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  ************************* Logins ************************** -->
    <section id="logins" class="our-blog container-fluid">
        <div class="container">
            <div class="inner-title">
                <h2 style="font-size:40px; font-weight:700">Logins</h2>
            </div>
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
    <!-- ################# Our Departments Starts Here#######################--->
    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">
                <h2 style="font-size:40px; font-weight:700">Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pediatric</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Emergency</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality Treatments</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ************************* About Us Starts Here ************************** -->
    <section id="about_us" class="about-us">
        <div class="container">
            <div class="inner-title" style="background-color: #ffffff;">
                <h2 style="font-size:40px; font-weight:700">About Our Hospital</h2>
                <p><?php
                    $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                <p><?php echo $row['PageDescription']; ?>.</p><?php } ?></p>
            </div>
        </div>
    </section>
    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="inner-title">
                <h2 style="font-size:40px; font-weight:700">Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
            <div class="row">
                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
                    <button class="btn btn-default filter-button" data-filter="spray">Neurology</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Pediatric</button>
                </div>
                <br />
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
                </div>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- ######## Gallery End ####### -->
    <!--  ************************* Contact Us Starts Here ************************** -->
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">
            <div class="col-sm-12 cop-ck">
                <form method="post">
                    <div class="container">
                        <div class="inner-title" style="background-color: #ffffff;">
                            <h2 style="font-size:40px; font-weight:700">About Our Hospital</h2>
                        </div>
                        <div class="row cf-ro">
                            <div class="col-sm-3"><label>Enter Name :</label></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required></div>
                        </div>
                        <div class="row cf-ro">
                            <div class="col-sm-3"><label>Email Address :</label></div>
                            <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm" required></div>
                        </div>
                        <div class="row cf-ro">
                            <div class="col-sm-3"><label>Mobile Number :</label></div>
                            <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required></div>
                        </div>
                        <div class="row cf-ro">
                            <div class="col-sm-3"><label>Enter Message :</label></div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="row cf-ro">
                            <div class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ################# Footer Starts Here#######################--->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        <?php
                        $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
                        while ($row = mysqli_fetch_array($ret)) {
                        ?>
                            <?php echo $row['PageDescription']; ?> <br>
                            Phone: <?php echo $row['MobileNumber']; ?> <br>
                            Email: <a href="mailto:<?php echo $row['Email']; ?>" class=""><?php echo $row['Email']; ?></a><br>
                            Opening Hours: <?php echo $row['OpenningTime']; ?>
                    </address>
                <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
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