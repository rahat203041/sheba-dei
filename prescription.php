<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./prescription.css">

    <!-- Title  -->
    <title> Prescription </title>
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>Welcome to <span>সেবা দেই</span> </p>
                           
                            <!-- for emergency click here -->
                            
                            <a href="#" class="medilife-appoint-btn ml-30">For <span>emergencies</span> Click here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                
                                <!-- Dropdown Menu -->                                
                                
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="emergency-first-aid.php">Emergency First Aid</a>
                                                <a class="dropdown-item" href="prescription.php">Emergency Medicine</a>
                                                <a class="dropdown-item" href="Healthcare-guidline.php">Health Care Guideline</a>
                                                <a class="dropdown-item" href="ambulance.php">24 Hours Ambulance</a>
                                                <a class="dropdown-item" href="web_cam.php">Live Chat</a>
                                            </div>        
                                        </li>
                                                                          
                                        <li class="nav-item">
                                            <a class="nav-link" href="offer-box.php">Offer Box</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="prescription.php">Presciption Upload</a>
                                        </li>
                                        <div Class="pay">
                                            <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payment</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.php">Bkash</a>
                                                <a class="dropdown-item" href="index.php">Rocket</a>
                                                <a class="dropdown-item" href="index.php">Cash On</a>
                                            </div>
                                            </li>
                                            </div>
                                        
                                            <li class="nav-item">
                                            <a class="nav-link" href="about-us.php">About Us</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                   </div>
                                
                                 <!-- Dropdown Menu end--> 
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="hero-area">
        <div class="header">
            <h2 class="h2-fix mb-0">Please upload your Prescription</h2>
        </div>
        <form method="post" class="mb-4" action="" enctype="multipart/form-data">
            <div class="input-name form-input">
                <tr>Full Name: <input type="text" name="name" required="1" ></tr>
            </div>
            <div class="input-name form-input">
                <tr>Address: <input type="text" name="address" required="1" ></tr>
            </div>
            <div class="input-name form-input">
                <tr>Phone No.: <input type="text" name="phone" required="1" ></tr>
            </div>
            <div class="input-group form-input">
                <input type="file" name="image" >
            </div>
            <div class="input-group form-input">
                <input type="submit" class="btn" name="submit_btn" value="Upload">
                <br/>
                <br/>
                <a  href="index.php">Go To Home</a>
            </div>         
            
            <div class="php">
                <?php
                    $con = mysqli_connect("localhost","root","","hospitalmanagement");

                    if(isset($_FILES['image'])){
                        $name = $_POST['name'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $filename = $_FILES['image']['name'];
                        $filetmp = $_FILES['image']['tmp_name'];
                        $fileType = $_FILES['image']['type'];
                        if($fileType){
                            if(move_uploaded_file($filetmp, "upload/".$filename)){
                                mysqli_query($con, "INSERT INTO `prescription` (`name`, `address`, `phone`, `file`) VALUES ('$name', '$address', '$phone', '$filename')");
                                echo"Image uploaded Successfully";
                            }
                        }
                        else{
                            echo 'file not found';
                        }
                    }else{
                        echo 'please select a jpg, png, or pdf file';
                    }
                ?>
            </div>
        </form>
    </div>
    <!-- ***** Hero Area ENDS HERE ***** -->
    

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-100">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>Latest News</h6>
                            </div>
                            <div class="widget-blog-post">
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln1.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">Better Health Care</a>
                                        <p>Dec 02, 2018</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln2.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">A new drug is tested</a>
                                        <p>Dec 02, 2018</p>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="widget-single-blog-post d-flex">
                                    <div class="widget-post-thumbnail">
                                        <img src="img/blog-img/ln3.jpg" alt="">
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="#">Health department advice</a>
                                        <p>Dec 02, 2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>Contact Form</h6>
                            </div>
                            <div class="footer-contact-form">
                                <form action="#" method="post">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="footer-name" id="footer-name" placeholder="Name">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="footer-email" id="footer-email" placeholder="Email">
                                    <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0" id="footerMessage" placeholder="Message"></textarea>
                                    <button type="submit" class="btn medilife-btn">Contact Us <span>+</span></button>
                                </form>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>News Letter</h6>
                            </div>

                            <div class="footer-newsletter-area">
                                <form action="#">
                                    <input type="email" class="form-control border-0 mb-0" name="newsletterEmail" id="newsletterEmail" placeholder="Your Email Here">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-footer-content">
                            
                            <div class="copywrite-text mt-5">
                                <p>
                                    &copy; Copyright
                                    <script>document.write(new Date().getFullYear());</script> 
                                    reserved to Md. Mijanur Rahman Rahat from SIMEC SYSTEM.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>