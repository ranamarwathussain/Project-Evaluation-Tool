<?php
session_start();
include "../connection.php";
$submit='';
extract($_POST);

if($submit=='submit')
{
	
	for($j=0; $j < $iterator; $j++)
	{ 
		if($j==0)
		{
				$sql="insert into resultfinal values('$std','$title','$pid','$c1','$c2','$c3','$c4','$c5','$c6','$tc','$totalmarks')";
				$result=$conn->query($sql);

				
		}
		else if($j==1)
		{
			$sql="insert into resultfinal values('$std1','$title','$pid','$c11','$c21','$c31','$c41','$c51','$c61','$tc1','$totalmarks')";
				$result=$conn->query($sql);

		}
		else if($j==2)
		{
			$sql="insert into resultfinal values('$std2','$title','$pid','$c12','$c22','$c32','$c42','$c52','$c62','$tc2','$totalmarks')";
				$result=$conn->query($sql);

				
		}
	}
		if($result)
				{

				echo "<script>
				alert('Inserted Successfully !!!');
				window.location.href='checkresult.php'</script>";

				}
}
else
{
		
			$sql="update resultfinal set c1m='$c1', c2m='$c2', c3m='$c3', c4m='$c4',c5m='$c5', c6m='$c6', ctm='$tc', atc='$totalmarks' where sid='$std'";
				$result=$conn->query($sql);

		if($result)
				{

				echo "<script>
				alert('Updation Successfully !!!');
				window.location.href='invitation.php'</script>";

				}
}





?>