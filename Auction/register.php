
<?php
include("validation.php");

//To check a password between 8 to 16 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character

$con=mysqli_connect('localhost','root','','auction');


$a=$_POST['utype'];
$b=$_POST['username'];
$c=$_POST['password'];
$d=$_POST['cpassword'];
$e=$_POST['fname'];
$f=$_POST['lname'];
$g=$_POST['email'];
$h=$_POST['address'];
$i=$_POST['contact'];
$j=$_POST['create'];


 if($_POST['submit']!='')
 { //echo 'in';
	$select = "select * from user where UserName='$b'";
	$Rsc = mysqli_query($con,$select);
	$Date = mysqli_fetch_array($Rsc,MYSQLI_NUM);
	if($Date['UserName']!='')
	{
	header("location:register1.php?msg=chk");
	}
	else
	{ echo 'else 1';
	if(isCorrectPass($c) and isCorrectName($e) and isCorrectName($f) and ($c==$d)){
	//		echo 'if';
    $x="insert into user(UserType,UserName,Password,FName,LName,Email,Address,ContactNo,CreateDate) values('$a','$b','$c','$e','$f','$g','$h',$i,now())"; 

     $y = mysqli_query($con,$x);
	 header("location:register1.php?msg=suc");
  	}
  	else
  	{
  		echo "Can't insert";
  	// header("location:register1.php");
  		
  	}
  }
  }

?>