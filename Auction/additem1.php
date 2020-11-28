<?php
include("validation.php");
session_start();

$con=mysqli_connect('localhost','root','','auction');

$a=$_POST['productname'];
$b=$_POST['description'];
$c=$_POST['minbid'];
$d=$_POST['sdate'];
$e=$_POST['edate'];
$f=$_POST['category'];
$postid = $_POST['postid'];

$name=$_FILES['productimage']['name'];
$temp=$_FILES['productimage']['tmp_name'];
move_uploaded_file($temp,'upload/'.$name);

 if($_POST['submit']!='')
{
if(isString($a) and isValidPrice($cost)){
    $x="insert into additem(Product_name,Description,Min_bid,Start_date,
   End_date,Category,Image,CreateDate,SellerId) values('$a','$b',$c,'$d','$e','$f','$name',now(),'".$_SESSION['id']."')"; 
    $Rsc = mysqli_query($con,$x);
	
	if($Rsc)
	{
    header("location:add.php");
	}
}
else{
    header("location:add.php");
	
}

}

 if($_POST['Update']!='')
{
    $x="updatte additem set Product_name='$a',Description='$b',Min_bid='$c',Start_date='$d',End_date='$e',Category='$f',Image='$name',CreateDate=now() where id='$postid'"; 
    $Rsc = mysqli_query($con,$x);
	
	if($Rsc)
	{
    header("location:add.php");
	}
}
?>