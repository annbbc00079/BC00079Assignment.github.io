<?php
    session_start();

    if(!isset($_SESSION['adminAcc']))
        header("Location: Login.php");
    else{
        $AdminName = $_SESSION['adminAcc']['admin_fullname'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator page</title>
    <link rel="stylesheet" href="CSS/MenuStyles.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    

<!-- Menu -->

<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" >
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3">Hello Admin</div>
        </a>
        <!-- Divider -->

        
        
        <hr class="sidebar-divider my-0" >
        <li class="nav-item active"><a class="nav-link" href="index.php?page=ListProduct"><span>List Product</span></a></li>
        
        <hr class="sidebar-divider my-0" >
        <li class="nav-item active"><a class="nav-link" href="index.php?page=ListUser"><span>List User</span></a></li>
        
        <hr class="sidebar-divider my-0" >
        <li class="nav-item active"><a class="nav-link" href="index.php?page=ListFeedback"><span>List Feedback</span></a></li>

        

        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Topbar Search -->
                

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="">
                    <div style="text-align: right; margin-right: 5%">
        <?php
            echo "Hello. " .  $AdminName;
        ?>
        
    </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <a href="Logout.php"><button>Logout</button></a>
                </ul>
            </nav>
    <!-- Bootstrap core JavaScript-->
    
    
        
    

<!-- Content -->
    <div>
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] === "AddProduct")
                    require_once ("AddNewProduct.php");
                else if($_GET['page'] === "ListProduct")
                    require_once ("ListProduct.php");
                else if($_GET['page'] === "ModifyProduct")
                    require_once ("ModifyProduct.php");
                else if($_GET['page'] === "DeleteProduct")
                    require_once ("DeleteProduct.php");
                else if($_GET['page'] === "ListUser")
                    require_once ("ListUser.php");
                else if($_GET['page'] === "ModifyUser")
                    require_once ("ModifyUser.php");
                else if($_GET['page'] === "DeleteUser")
                    require_once ("DeleteUser.php");
                else if($_GET['page'] === "ListFeedback")
                    require_once ("ListFeedback.php");
                else if($_GET['page'] === "DeleteFeedback")
                    require_once ("DeleteFeedback.php");
                
            }
            else
                echo "<marquee direction='right' scrolldelay='80'>Welcome to Administrator page</marquee>";
        ?>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>