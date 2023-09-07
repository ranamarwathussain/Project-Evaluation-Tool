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

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

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
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <h1><p class="text-success"></p></h1>
                
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
           
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/b5.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>You Can Learn Anything</h1>
            </div>
          </div>
        </div>
      </div>

       
      <div class="intro-section" style="background-image: url('images/b2.jpg');">
        <div class="container">
          <div class="row align-items-center">
             
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('images/b3.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
               
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('images/b4.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
               
            </div>
          </div>
        </div>
      </div>


    </div>
    

    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Why PBL Works</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Focuses More on Skill Based Learning</h2>
                <p>It develops the student's ability to work with his or her peers, building teamwork and group skills.</p>
                 
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>It allows the teacher to learn more about the student as a person</h2>
                <p>It helps the teacher communicate in progressive and meaningful ways with the student or a group of children on a range of issues.</p>
                
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Tools for Students</h2>
                <p>PBL and the use of technology enable students, teachers, and administrators to reach out beyond the school building</p>
                 
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">


       

      
        
        
      </div>
    </div>

    


    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About the PBL</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="text-justify">What Is Project-Based Learning? 
            Project-based learning (PBL) or project-based instruction is an instructional approach designed to give students the opportunity to develop knowledge and skills through engaging projects set around challenges and problems they may face in the real world. 

            Project-based learning is more than just “doing a project,” in the way you might remember from your own school days. As the Buck Institute for Education (BIE) explains, with PBL, students “investigate and respond to an authentic, engaging, and complex problem or challenge” with deep and sustained attention.1 ArchForKids, an organization that provides STEAM programs for young learners, puts it even more succinctly: PBL is “learning by doing.”2 </p>
            <p class="text-justify">Why Project-Based Learning? We Live in a Project-Based World 
              The truth is, many in education recognize that our modern world is sustained and advanced through the successful completion of projects. Or, as the Swiss psychologist, Jean Piaget, put it, “knowledge is a consequence of experience.”3 

              It’s true! Your weekend chores, an upcoming presentation, or organizing a fundraising event—they’re all projects. This is the spirit behind PBL, and we see evidence of its increasing popularity in things like the growth of the maker movement.4 When we help students have authentic experiences, we prepare them for the real world. In its purest form, PBL prepares students to be self-sufficient, creative, and critical thinkers that can take on any challenge. 

              For most modern workers, their careers will be marked by a series of projects rather than years of service to a specific organization. “Solving real-world issues that matter is important to us as adults—and it’s important to our students,” explain Lathram, Lenz, and Vander Ark in their ebook, Preparing Students for a Project-Based World.5 

              In short, if we are to prepare students for success in life, we need to prepare them for a project-based world. Therefore, when relating project-based learning benefits to students, we must always include examples of real-world application. This will reinforce for students the notion that they can break down future problems into their component parts, assemble and lead a diverse team of stakeholders to process the problem, and implement a solution. </p>
            
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
 
    

    
    

    


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