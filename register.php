<?php
session_start();
include 'connection.php';
$sql="select * from admin where aid='23623'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Program Based &mdash; Learning Assessment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


     <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span><?php echo $row['email']; ?></a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid" width="200" height="200">
             </a>
          </div>
           

          </div>
           
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
               
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

<form action="studentregister.php" method="POST">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Group Lead/Solo StudentID</label>
                            <input type="text" name="sid" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Group Lead/Solo Student Name</label>
                            <input type="text" name="sidn" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="username">Title Of The Project</label>
                            <input type="text" name="title" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" name="pword" id="pword"class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">Re-type Password</label>
                            <input type="password" name="pword2" id="pword2" class="form-control form-control-lg" required>
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="username">Group Member 1 StudentID</label>
                            <input type="text" name="sid1" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="username">Group Member 1 Student Name</label>
                            <input type="text" name="sidn1" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Group Member 2 StudentID</label>
                            <input type="text" name="sid2" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="username">Group Member 2 Student Name</label>
                            <input type="text" name="sidn2" class="form-control form-control-lg" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
        </form>
            

          
        </div>
    </div>

    

    <div class="footer">
     
        
           <center>
        
       <blockquote class="blockquote-reverse">
    <h1><p>“Your comfort zone is a place where you keep yourself in a self-illusion and nothing can grow there but your potentiality can grow only when you can think and grow out of that zone.”<footer>― Rashedur Ryan Rahman</footer></p></h1>
  </blockquote> 
             
           </center>
           
              
     
           
         
        <div class="row">
          <div class="col-12">
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
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>