<?php

function UserName($id)
{ //echo $id;
	$Select = "select * from user where id='$id'";
	$con=mysqli_connect('localhost','root','','auction');
	$Rsc  = mysqli_query($con,$Select);
	
	$Data = mysqli_fetch_array($Rsc,MYSQLI_NUM);
	
	echo $Data[2];
}
function ProductName($id)
{$con=mysqli_connect('localhost','root','','auction');
	$Select = "select * from additem where id='$id'";
	$Rsc  = mysqli_query($con,$Select);
	$Data = mysqli_fetch_array($Rsc,MYSQLI_NUM);
	return $Data[2];
}

function Product($id)
{$con=mysqli_connect('localhost','root','','auction');
	$Select = "select * from additem where id='$id'";
	$Rsc  = mysqli_query($con,$Select);
	$Data = mysqli_fetch_array($Rsc,MYSQLI_NUM);
	return $Data[7];
}


?>