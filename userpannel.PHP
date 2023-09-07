<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['studentuser']))
{
    echo "<script>window.location.href='login.php'</script>";
} 
$sql="select * from register where std='".$_SESSION['studentuser']."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

 $sql1="select * from evacriteria";
$result1=$conn->query($sql1);
$row1=$result1->fetch_assoc();

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
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
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
    <link href="admin/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="admin/images/icon/logo.jpg" alt="Cool Admin" width="100" height="100" />
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
                            <a class="js-arrow" href="userpannel.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                             
                        </li>
                        
                         
                         
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-calendar-alt"></i>Logout</a>
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
                    <img src="admin/images/icon/logo.jpg" alt="Cool Admin" width="100" height="100" />
                  </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="userpannel.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                             
                        </li>
                        
                         
                         
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-calendar-alt"></i>Logout</a>
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
                                            <img src="admin/images/icon/1.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $row['username'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="admin/images/icon/1.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $row['username'];?></a>
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                      <div class="alert alert-success" style="text-align: center;">
                          <strong>Hello Web Developer!</strong> Welcome to the Project Based Learning System Where you will be evaluated.
                        </div>
                        <center>
                            
                         <p>

  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Title Of The Project</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Team Lead/Solo Student Details</button>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Team Members Details</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Project Evaluation Criteria</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">Project Evaluation Result</button>

</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <div class="form-group">
    <label for="disabledInput" class="col-sm-2 control-label">Title Of The Project & ID</label>
    <div class="col-sm-10">
      <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['title'];?>" disabled>

       <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['pid'];?>" disabled>
      
      
    </div>
    
        
      </div>
    </div>
  </div>
  <div class="col">

    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['std'];?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['username'];?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['pass'];?>" disabled>
      </div>
           </div>
    </div>
  </div>
   <div class="col">

    <div class="collapse multi-collapse" id="multiCollapseExample3">
       <center> <p class="bg-primary">Details of the registered team members!!</p></center>
      <div class="card card-body">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['member1id'];?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['member1name'];?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['member2id'];?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row['member1name'];?>" disabled>
      </div>
           </div>
    </div>
     <div class="collapse multi-collapse" id="multiCollapseExample4">
       <center> <p class="bg-primary">Your Project Will Evaluated Against These Criteria!!</p></center>
      <div class="card card-body">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row1['c1']."----> "."5 Marks";?>" disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row1['c2']."----> "."5 Marks";?>"  disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row1['c3']."----> "."5 Marks";?>"  disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row1['c4']."----> "."5 Marks";?>"  disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row1['c5']."----> "."5 Marks";?>"  disabled>
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="<?php echo $row1['c6']."----> "."5 Marks";?>"  disabled>
      </div>
           </div>
    </div>


    <!-- Project Evaluated Results Will be shown here group by group -->
<div class="collapse multi-collapse" id="multiCollapseExample5">
       <center> <p class="bg-primary">Evaluation Criteria Marks</p></center>
      <div class="card card-body">
       <div class="form-group shadow-textarea">
     <div class="form-group">
                                    <input type="text" class="form-control" name="c1" value="0-5 Marks for each Criteria!" disabled>
                                  </div>
</div>

    </div>
    <br>
    <br>
 <?php
        
        $sql="select * from register where std='".$_SESSION['studentuser']."'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $sql1="select * from evacriteria";
        $result1=$conn->query($sql1);
        $row1=$result1->fetch_assoc();
        
        $gl="select * from resultfinal where sid='".$_SESSION['studentuser']."'";
        $resultgl=$conn->query($gl);
        if(mysqli_num_rows($resultgl)>0)
          {
            $rowgl=$resultgl->fetch_assoc();
            if($row['member1id'] !='')
            {
              $gm1="select * from resultfinal where sid='".$row['member1id']."'";
              $resultgm1=$conn->query($gm1);
               $rowm1=$resultgm1->fetch_assoc();

            }
            
           if($row['member2id'] !='')
            {
              $gm2="select * from resultfinal where sid='".$row['member2id']."'";
              $resultgm2=$conn->query($gm2);
               $rowm2=$resultgm2->fetch_assoc();

            }
          }





        ?>
   <?php
   if(mysqli_num_rows($resultgl)>0)
{
?>     
        <form method="POST" action="checkresult1.php">
            <div class="table-responsive">
<table class="table .table-hover">
    <thead>
      <tr>
        <th>SID </th>
        <th>P.Title</th>
        <th>PID</th>
        <th>C1 </th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
        <th>C6</th>
        <th>Total/<input type="text" name="totalmarks" id="totalmarks" value="<?php echo $rowgl['atc'];?>" readonly></th>

      </tr>
    </thead>
    <tbody>
        <tr>
            <td>--</td>
             <td>--</td>
              <td>--</td>
        <td><?php echo $row1['c1'];  ?></td>
        <td><?php echo $row1['c2'];   ?></td>
        <td><?php echo $row1['c3'];   ?></td>
         <td><?php echo $row1['c4'];   ?></td>
        <td><?php echo $row1['c5'];   ?></td>
        <td><?php echo $row1['c6'];   ?></td>
        </tr>
       
      <tr>
        <td style="color: black;font:bold;"><input type="text" name="std" value="<?php echo $rowgl['sid'];?>" readonly> </td>
        <td><input type="text" name="title" value="<?php echo $rowgl['title'];  ?>" readonly></td>
        <td><input type="text" name="pid" value="<?php echo $rowgl['pid'];  ?>" readonly></td>
        <td><input type="number" class="form-control" name="c1" id="c1" value="<?php echo $rowgl['c1m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c2" id="c2" value="<?php echo $rowgl['c2m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c3" id="c3" value="<?php echo $rowgl['c3m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c4" id="c4" value="<?php echo $rowgl['c4m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c5" id="c5" value="<?php echo $rowgl['c5m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c6"  id="c6" value="<?php echo $rowgl['c6m'];?>" readonly/></td>
         <td><input type="text" name="tc" id="tc" value="<?php echo $rowgl['ctm'];?>" readonly></td>
       

      </tr>
      <?php
      if($row['member1id']=='')
      {
      }
      else
        {
            ?>
      <tr>
        <td style="color: black;font:bold;"><input type="text" name="std1" id="std1" value="<?php echo $row['member1id'];  ?>" readonly> </td>
        <td><input type="text" name="title" value="<?php echo $row['title'];  ?>" readonly></td>
        <td><input type="text" name="pid" value="<?php echo $row['pid'];  ?>" readonly></td>
         <td><input type="number" class="form-control" name="c11" id="c11" value="<?php echo $rowm1['c1m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c21" id="c21" value="<?php echo $rowm1['c2m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c31" id="c31" value="<?php echo $rowm1['c3m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c41" id="c41" value="<?php echo $rowm1['c4m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c51" id="c51" value="<?php echo $rowm1['c5m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c61"  id="c61" value="<?php echo $rowm1['c6m'];?>" readonly/></td>
         <td><input type="text" name="tc1" id="tc1" value="<?php echo $rowm1['ctm'];?>" readonly></td>
       
      </tr>
       <?php
        }
        ?>
        
     <?php
      if($row['member2id']=='')
      {
      }
      else
        {
            
            ?>
      <tr>
        <td style="color: black;font:bold;"><input type="text" name="std2" id="std2" value="<?php echo $row['member2id'];  ?>" readonly> </td>
        <td><input type="text" name="title" value="<?php echo $row['title'];  ?>" readonly></td>
        <td><input type="text" name="pid" value="<?php echo $row['pid'];  ?>" readonly></td>
         <td><input type="number" class="form-control" name="c12" id="c12" value="<?php echo $rowm2['c1m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c22" id="c22" value="<?php echo $rowm2['c2m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c32" id="c32" value="<?php echo $rowm2['c3m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c42" id="c42" value="<?php echo $rowm2['c4m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c52" id="c52" value="<?php echo $rowm2['c5m'];?>" readonly/></td>
        <td><input type="number" class="form-control" name="c62"  id="c62" value="<?php echo $rowm2['c6m'];?>" readonly/></td>
         <td><input type="text" name="tc2" id="tc2" value="<?php echo $rowm2['ctm'];?>" readonly></td>
       
      </tr>
      <?php
      }
      ?>
     
    </tbody>
  </table>
</div>

</form>
<?php  
}?>
           </div>
    </div>

    <!-- Project Evaluated Results Will be shown here group by group -->


  </div>
</div>
</center>
                        
                        
                       
                            
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
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<style type="text/css">
    .myfooter
    {
        padding-top: 100%;
    }
</style>
                        <div class="row myfooter">
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
