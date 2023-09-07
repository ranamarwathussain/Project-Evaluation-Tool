<?php
session_start();
include "connection.php";
extract($_POST);
$sql="select * from admin where aid='$sid' AND pass='$pword'";
$result=$conn->query($sql);

$sql1="select * from register where std='$sid' OR member1id='$sid' OR member2id='$sid' AND pass='$pword'";
$result1=$conn->query($sql1);

if(mysqli_num_rows($result)>0)
{
	$row=$result->fetch_assoc();
	$_SESSION['adminuser']=$row['email'];
	echo "<script>window.location.href='admin/'</script>";

}

if(mysqli_num_rows($result1)>0)
{
	$row1=$result1->fetch_assoc();
	$_SESSION['studentuser']=$row1['std'];
	
	echo "<script>window.location.href='userpannel.php'</script>";

}

echo "<script>
alert('User ID Does not Exist Please Register yourself or try agin');
window.location.href='login.php'</script>";




?>