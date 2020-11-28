<?php
 $code1=$_POST['code'];
 $mail=$_POST['email'];

echo "<script type='text/javascript'>alert('$code1');</script>";

echo "<script type='text/javascript'>alert('$mail');</script>";
$con=mysqli_connect('localhost','root','','auction');

$Select = "SELECT * from checker where mail='$mail' and code='$code1'";
$Rsc  = mysqli_query($con,$Select);
$c=mysqli_num_rows($Rsc);
if($c>=1)
{
	header("location:register1.php");
}
else
{	
$message = "Wrong code";
echo "<script type='text/javascript'>alert('$message');</script>";

header("refresh:2;url=verify.php");
}

 ?>