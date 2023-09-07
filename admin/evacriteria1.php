<?php
session_start();
include "../connection.php";
extract($_POST);

$sql="update evacriteria set c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5', c6='$c6' where subject='$subject';";
$result=$conn->query($sql);

if($result)
{

echo "<script>
alert('Inserted Successfully !!!');
window.location.href='evacriteria.php'</script>";

}




?>