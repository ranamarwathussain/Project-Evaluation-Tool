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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
<style type="text/css">
    .shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
</style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
               <div class="container-fluid">
<div class="form-group shadow-textarea">
     <div class="form-group">
                                    <label for="email">Evaluation Criteria Marks</label>
                                    <input type="text" class="form-control" name="c1" value="0-5 Marks for each Criteria!" disabled>
                                  </div>
  <label for="exampleFormControlTextarea6">Evaluation Form for Register Students </label>
  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" disabled>Columns Shows the Evaluation Createria & for each you are given 0-5 marks. Rows shows the Students Details and the Project Details</textarea>
</div>
<div class="container-fluid" style="border: solid; border-style: solid;border-width: 5px">
    <div class="col-lg-12">
        <center>
        <?php
            $sql="select * from register";
            $result=$conn->query($sql);
            $i=0;
           while($row=$result->fetch_assoc())
           {

           if($i%2==0)
           {
            ?>
            <button type="button" class="btn btn-success"><a href="checkresult.php?pid=<?php echo $row['pid']; ?>"><?php echo $row['pid']; ?></a></button>
            <?php
            }
            else
             {
            ?>
            <button type="button" class="btn btn-danger"><a href="checkresult.php?pid=<?php echo $row['pid']; ?>"><?php echo $row['pid']; ?></a></button>
            <?php 
    
            }?>



           <?php
           $i+=1;
       }

        ?>
    </div>
    </center>
</div>
    </div>
    <br>
    <br>
 <?php
        $pid='';
        extract($_GET);
        $pid=$_GET['pid'];
        $sql="select * from register where pid='$pid'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $sql1="select * from evacriteria";
        $result1=$conn->query($sql1);
        $row1=$result1->fetch_assoc();
        $i=1;
        ?>
   <?php
   if(mysqli_num_rows($result)>0)
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
        <th>Total/<input type="text" name="totalmarks" id="totalmarks" value=""></th>

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
        <td style="color: black;font:bold;"><input type="text" name="std" value="<?php echo $row['std'];?>" readonly> </td>
        <td><input type="text" name="title" value="<?php echo $row['title'];  ?>" readonly></td>
        <td><input type="text" name="pid" value="<?php echo $row['pid'];  ?>" readonly></td>
        <td><input type="number" class="form-control" name="c1" id="c1" value=""/></td>
        <td><input type="number" class="form-control" name="c2" id="c2" value=""/></td>
        <td><input type="number" class="form-control" name="c3" id="c3" value=""/></td>
        <td><input type="number" class="form-control" name="c4" id="c4" value=""/></td>
        <td><input type="number" class="form-control" name="c5" id="c5" value=""/></td>
        <td><input type="number" class="form-control" name="c6"  id="c6" value=""/></td>
         <td><input type="text" name="tc" id="tc" value="0" readonly></td>
       

      </tr>
      <?php
      if($row['member1id']=='')
      {
      }
      else
        {
            $i+=1;
            ?>
      <tr>
        <td style="color: black;font:bold;"><input type="text" name="std1" id="std1" value="<?php echo $row['member1id'];  ?>" readonly> </td>
        <td><input type="text" name="title" value="<?php echo $row['title'];  ?>" readonly></td>
        <td><input type="text" name="pid" value="<?php echo $row['pid'];  ?>" readonly></td>
         <td><input type="number" class="form-control" name="c11" id="c11" value=""/></td>
        <td><input type="number" class="form-control" name="c21" id="c21" value=""/></td>
        <td><input type="number" class="form-control" name="c31" id="c31" value=""/></td>
        <td><input type="number" class="form-control" name="c41" id="c41" value=""/></td>
        <td><input type="number" class="form-control" name="c51" id="c51" value=""/></td>
        <td><input type="number" class="form-control" name="c61"  id="c61" value=""/></td>
         <td><input type="text" name="tc1" id="tc1" value="0" readonly></td>
       
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
            $i+=1;
            ?>
      <tr>
        <td style="color: black;font:bold;"><input type="text" name="std2" id="std2" value="<?php echo $row['member2id'];  ?>" readonly> </td>
        <td><input type="text" name="title" value="<?php echo $row['title'];  ?>" readonly></td>
        <td><input type="text" name="pid" value="<?php echo $row['pid'];  ?>" readonly></td>
         <td><input type="number" class="form-control" name="c12" id="c12" value=""/></td>
        <td><input type="number" class="form-control" name="c22" id="c22" value=""/></td>
        <td><input type="number" class="form-control" name="c32" id="c32" value=""/></td>
        <td><input type="number" class="form-control" name="c42" id="c42" value=""/></td>
        <td><input type="number" class="form-control" name="c52" id="c52" value=""/></td>
        <td><input type="number" class="form-control" name="c62"  id="c62" value=""/></td>
         <td><input type="text" name="tc2" id="tc2" value="0" readonly></td>
       
      </tr>
      <?php
      }
      ?>
     
    </tbody>
  </table>
</div>
<input type="hidden" name="iterator" value="<?php echo $i; ?>">

<button type="button" onclick="calculate();" class="btn btn-primary btn-block">Calculate</button>
<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Submit</button>
<button type="submit" name="update" value="update" class="btn btn-primary btn-block">Update</button>

</form>
<?php  
}?>


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
      <script type="text/javascript">
        function calculate()
        {
            var totalmarks=parseFloat(document.getElementById('totalmarks').value);
            var total_credits=((parseFloat(document.getElementById('c1').value)+parseFloat(document.getElementById('c2').value)+parseFloat(document.getElementById('c3').value)+parseFloat(document.getElementById('c4').value)+parseFloat(document.getElementById('c5').value)+parseFloat(document.getElementById('c6').value))/30*parseFloat(totalmarks));
            document.getElementById('tc').value=parseFloat(total_credits);
if(document.getElementById('std1'.value) != '')
{
    var totalmarks=parseFloat(document.getElementById('totalmarks').value);
            var total_credits=((parseFloat(document.getElementById('c11').value)+parseFloat(document.getElementById('c21').value)+parseFloat(document.getElementById('c31').value)+parseFloat(document.getElementById('c41').value)+parseFloat(document.getElementById('c51').value)+parseFloat(document.getElementById('c61').value))/30*parseFloat(totalmarks));
            document.getElementById('tc1').value=parseFloat(total_credits);


}
if(document.getElementById('std2'.value) != '')
{
    var totalmarks=parseFloat(document.getElementById('totalmarks').value);
            var total_credits=((parseFloat(document.getElementById('c12').value)+parseFloat(document.getElementById('c22').value)+parseFloat(document.getElementById('c32').value)+parseFloat(document.getElementById('c42').value)+parseFloat(document.getElementById('c52').value)+parseFloat(document.getElementById('c62').value))/30*parseFloat(totalmarks));
            document.getElementById('tc2').value=parseFloat(total_credits);


}




        }
    </script>

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
