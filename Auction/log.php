<?php
session_start();
$con=mysqli_connect('localhost','root','','auction');


$a=$_POST['username'];
$b=$_POST['password'];
  if($_POST['submit']!='')
   {
   	//echo 'if';
   $x="select * from user where UserName='$a' and Password='$b'"; 
   $rsc = mysqli_query($con,$x);
   if(mysqli_num_rows($rsc)==0)
   { 
	   echo '<script> alert("Error in username/password") </script>';
	   header( "refresh:2;url=login.php" );
   }
   else{
   	//echo '2';
   $Data = mysqli_fetch_array($rsc,MYSQLI_NUM);
	print_r($Data);
	echo $Data[1].' '.$Data['UserType'];
		if($Data[0]!='')
		{
			$_SESSION['id'] = $Data[0];
			$_SESSION['name'] = $Data[2];
			$_SESSION['type'] = $Data[1];
			if($Data[1]=='0')  ///// Admin login
			{
				
			header("location:add.php"); 
			}
			else if($Data[1]=='1')   ///// Saler login
			{
			header("location:add.php");
			}
			else if($Data[1]=='2')  ///// Bidder login
			{ 
			header("location:product-user.php");
				?>
<html>

<head>
<style>
margin:0px;
padding:0px;
}
#main
{
height:640px; 
width:1350;
background:#FFF8DC;
//margin:10px 20px;
}
#logo
{
position:relative;
background:#8b8970;
height:80px;
width:auto;
padding-left:20px;
}
#forlogin
{
//padding:10px;
margin-right:20px;
float:left;
background:#8b8970;
width:1350px;
//height:50px;
}
ul li
{
float:left;
list-style-type:none;
padding-left:30px;
padding-right:0px;
//text-transform:uppercase;
}
ul li a
{
text-decoration:none;
color:black;

}
ul
{
float:right;
font-size:30;
font-family:Kristen ITC;
}
#logo>img{
padddin-left:20px;
height:100px;
}
ul li a:hover
{
background-color:#CDC9A5;
border-radius:20px;
}
#about>h1{font-family:cooper black; font-size:40px;padding:20px;}
#about>p{font-size:20px; line-height:30px;text-align:justify;padding:20px;padding-top:0px;}
</style>
</head>
<body>
<div id="main">

       <div id="logo">
	     <tr>
		 <td>
		 <img src="logo1.png">
		 </td>
		 
		 <td align="right"><?php echo $_SESSION['name'];?></td>
		 </tr>
	   </div>
	  
<div id="forlogin">
<?php include("menu.php"); ?>

</div>
<br><br><br><br><br><br><br><br>

				
	
			User name: <?php echo $Data['UserName']?><br>
			First name: <?php echo $Data['Fname']?><br>
			Last Name: <?php echo $Data['Lname']?><br>
			Email: <?php echo $Data['Email']?><br>
			Mobile No.: <?php echo $Data['ContactNo']?><br>
			Address: <?php echo $Data['Address']?><br>
			</body>
			</html>
			<?php
			}
		}
		else{
		//	header("location:login.php?msg=unsucc");			
		}
	   }	
}
?>