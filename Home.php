<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <script src="JavaScript/JSscript.js"></script>  <!-- Set Menu height = Main height (option) -->
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
</head>
<body>
<div class="site-branding-area">
        <div class="container">
            <div class="row">
            <div class="col-sm-5">
                    <div class="logo">
                        <h1><a href="./"><img src="Images/logo.png"></a></h1>
                    </div>
                </div>
                
            </div>
        </div>
</div> <!-- End site branding area -->
<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Home.php">Home</a></li>
                        <li><a  href="index.php?page=Product"><span>Product</span></a></li>
                        <li><a  href="index.php?page=Contact"><span>Contact</span></a></li>

                    
             
        
        <?php

            if(isset($_SESSION['user'])){
                echo '<li class=""> <a  href="index.php?page=Cart"><span>View Cart</span></a></li>';
                echo '<li class=""> <a  href="index.php?page=Profile"><span>Profile</span></a></li>';
                echo '<li class=""> <a  href="Logout.php"><span>Logout</span></a></li>';
            }
            else{
                echo '<li class=""> <a  href="index.php?page=Login"><span>Login</span></a></li>';
                echo '<li class=""> <a  href="index.php?page=Registration"><span>Registration</span></a></li>';
            }

        ?>
        </ul>
        
        </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    

    
    
                
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider">
				<ul >
					<li>
						<img src="img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 <strong>Plus</strong></span>
							</h2>
							<h4 class="caption subtitle">Dual SIM</h4>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    
    <div id="site-branding-area">
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] === "Introduction")
                    require_once ("Introduction.html");
                else if($_GET['page'] === "Registration")
                    require_once ("Registration.php");
                else if($_GET['page'] === "Product")
                    require_once ("Product.php");
                else if($_GET['page'] === "ProductDetail")
                    require_once ("ProductDetail.php");
                else if($_GET['page'] === "Login")
                    require_once ("Login.php");
                else if($_GET['page'] === "Cart")
                    require_once ("Cart.php");
                else if($_GET['page'] === "Profile")
                    require_once ("Profile.php");
                else if($_GET['page'] === "ModifyProfile")
                    require_once ("ModifyProfile.php");
                else if($_GET['page'] === "Contact")
                    require_once ("Contact.php");
            }else{
                require_once ("Product.php");
            }
        ?>
    </div>
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    
        </div>
    </div> <!-- End product widget area -->
    
    
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                    <p><b>Cao đẳng Anh quốc BTEC Cần Thơ</b> &#169; Copyright AnNB 2023<br></p>
        <i>Address:</i> 41 Cách Mạng Tháng Tám, P.An Hòa, Q.Ninh Kiều, TP.Cần Thơ <br>
        <i>Phone:</i> +84 909726326
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="JS/owl.carousel.min.js"></script>
    <script src="JS/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="JS/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="JS/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="JS/bxslider.min.js"></script>
	<script type="text/javascript" src="JS/script.slider.js"></script>
</body>
</html>