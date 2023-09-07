<?php
session_start();
include "connection.php";
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
extract($_POST);

$sql1="select * from register where std='$sid' OR member1id='$sid1' OR member2id='$sid2'";
$result1=$conn->query($sql1);

if(mysqli_num_rows($result1)>0)
{
	$row=$result1->fetch_assoc();
	echo "<script>
		alert('Team Member Already Registered!! No more than one groups allowed');
		window.location.href='register.php'</script>";
			
}
else
{
        $pid=generateRandomString()."wt".generateRandomString();
        $sql="insert into register values('$sid','$sidn','$title','$pid','$email','$pword','$sid1','$sidn1','$sid2','$sidn2')"; 
        $result=$conn->query($sql);

        if($result)
        {

        echo "<script>
        alert('Team Registered Successfully Prepared for the Big Game !!!');
        window.location.href='register.php'</script>";

        }
}




?>