<?php
session_start();
include '../connection.php';
if(!isset($_SESSION['adminuser']))
{
    echo "<script>window.location.href='../login.php'</script>";
} 
$sql="select * from admin where email='".$_SESSION['adminuser']."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Groups/Users Details</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                             <img src="images/icon/logo.jpg" alt="Cool Admin" width="100" height="100" />
                 </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                             
                        </li>
                        <li>
                            <a href="checkuser.php">
                                <i class="fas fa-chart-bar"></i>Check User</a>
                        </li>
                        <li>
                            <a href="evacriteria.php">
                                <i class="fas fa-table"></i>Project Evaluation criterion</a>
                        </li>
                        <li>
                            <a href="checkresult.php">
                                <i class="far fa-check-square"></i>Check Results</a>
                        </li>
                        <li>
                            <a href="invitation.php">
                                <i class="fas fa-calendar-alt"></i>Invitation </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                   <img src="images/icon/logo.jpg" alt="Cool Admin" width="100" height="100" />
                   </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                         <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                             
                        </li>
                        <li>
                            <a href="checkuser.php">
                                <i class="fas fa-chart-bar"></i>Check User</a>
                        </li>
                        <li>
                            <a href="evacriteria.php">
                                <i class="fas fa-table"></i>Project Evaluation criterion</a>
                        </li>
                        <li>
                            <a href="checkresult.php">
                                <i class="far fa-check-square"></i>Check Results</a>
                        </li>
                        <li>
                            <a href="invitation.php">
                                <i class="fas fa-calendar-alt"></i>Invitation </a>
                        </li>
                         
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                              <div class="header-button">
                                 
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/1.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $row['name'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/1.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $row['name'];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $row['email'];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                 
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Profile</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                             
                              <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-lg-12" style="text-align:center;">
                            	 <?php
                            	    $i=1;
                                        $sql="select * from register";
											$result=$conn->query($sql);
											
											while($row=$result->fetch_assoc())
											{

											?>
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Groups-<?php echo $i;?></h3>
                                        </div>
                                        <hr>
                                        <style type="text/css">
                                        	input
                                        	{
                                        		text-align: center;
                                        	}
                                        </style>
                                       
											<center>
											<p>____________________________________________________________</p>
											<p class="text-muted">Project Details with Lead and Members!!</p>
											<div class="form-group">
										    <label >Project Title</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['title'];?>" disabled>
										    </div>
										  </div>
										  <div class="form-group">
										    <label >Project ID</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['pid'];?>" disabled>
										    </div>
										  </div>
										   <div class="form-group">
										    <label >Group Lead/Solo Student ID</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['std'];?>" disabled>
										    </div>
										  </div>
										  <div class="form-group">
										    <label >Group Lead/Solo Student Name</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['username'];?>" disabled>
										    </div>
										    <div class="form-group">
										    <label >Group Lead/Solo Student Email</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['email'];?>" disabled>
										    </div>
										    <div class="form-group">
										    <label >Group Member 1 ID</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['member1id'];?>" disabled>
										    </div>
										    <div class="form-group">
										    <label >Group Member 1 Name</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['member1name'];?>" disabled>
										    </div>

										  </div>
										  <div class="form-group">
										    <label >Group Member 2 ID</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['member2id'];?>" disabled>
										    </div>
										  </div>
										  <div class="form-group">
										    <label >Group Member 2 Name</label>
										    <div >
										      <input class="form-control" id="focusedInput" type="text" value="<?php echo $row['member2name'];?>" disabled>
										    </div>
										  </div>
										  <p>____________________________________________________________</p>
										  </center>

											
                                        
                                    </div>
                                    <br>
                                    <?php
                                    $i+=1;
										}
										?>
                                </div>
                            </div>
                         
                                 
                             
                         
                         
                           
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
                    </div>
                    </div>         
                           
                            
                            
                           
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright 2022&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://marwathussain.tk" target="_blank" >RMTech</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
