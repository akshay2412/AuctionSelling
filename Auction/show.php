<?php
session_start();
include("function.php");
include("validation.php");

$con=mysqli_connect('localhost','root','','auction');
$location=$_POST['loc'];
$cost=$_POST['price'];
$seller=$_POST['sid'];
$name=$_POST['name'];
$d=$_POST['dat'];
if($d=='')
	$d=date("Y-m-d");
	
if($cost=='')
	$cost=99999999;
if((($location=='') and isValidPrice($cost)) or (isString($location) and isValidPrice($cost)))
{
if($location=='' && $seller=='' && $name=='')
{
	$Select="Select * from additem where Min_bid<='$cost' and End_date<='$d'";
}

elseif($seller=='' && $name=='')
{
	$Select="Select * from additem where Min_bid<='$cost' and city='$location' and End_date<='$d'";
}
elseif($location=='' && $name=='')
{
	$Select="Select * from additem where Min_bid<='$cost' and SellerId='$seller' and End_date<='$d'";
}
elseif($location=='' && $seller=='')
{
	$Select="Select * from additem where Min_bid<='$cost' and Product_name='$name' and End_date<='$d'";
}
elseif($seller=='')
{
	$Select="Select * from additem where Min_bid<='$cost' and Product_name='$name' and city='$location' and End_date<='$d'";
}


elseif($location=='' )
{
	$Select="Select * from additem where Min_bid<='$cost' and Product_name='$name' and SellerId='$seller' and End_date<='$d'";
}


elseif($name=='' )
{
	$Select="Select * from additem where Min_bid<='$cost' and city='$location' and SellerId='$seller' and End_date<='$d'";
}
else
{
	$Select="Select * from additem where Min_bid<='$cost' and city='$location' and SellerId='$seller' and Product_name='$name' and End_date<='$d'";
}
$Rsc  = mysqli_query($con,$Select);
}
else
{ echo 'else';
	echo '<script> alert("Wong location/price") </script>';
	header('refresh:2;url=search.php');
} 
?>
<html>
<head><style>
	*{
margin:0px;
padding:0px;
}
#main
{
height:100%; 
width:100%;
background:#C0C0C0;
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
width:100%;
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
#image
{
height:80px;width:80px;
margin-left:160px;
margin-top:20px;
}
#form
{
background-color:white; 
height:540px; 
width:800px;
margin-top:40px;
margin-left:350px;
border-radius:10px;
position:absolute;
}
#image{width:150px; height:100px; float:right;margin-top:-25px;}
table{margin-left:80px; margin-top:80px;}
tr,td{width:250px; height:35px;}
#ut{font-size:30px;}
#un{font-size:30px;}
#ps{font-size:30px;}
#cps{font-size:30px;}
#fn{font-size:30px;}
#ln{font-size:30px;}
#addr{font-size:30px;}
#cn{font-size:30px;}
#cd{font-size:30px;}
#em{font-size:30px;}

#select{height:30px; width:200px; border-radius:5px; paddding-left:30px;}
#uname{height:30px; width:200px;border-radius:5px;text-align:center;}
#pass{height:30px; width:200px;border-radius:5px;text-align:center;}
#cpass{height:30px; width:200px;border-radius:5px;text-align:center;}
#fname{height:30px; width:200px;border-radius:5px;text-align:center;}
#lname{height:30px; width:200px;border-radius:5px;text-align:center;}
#email{height:30px; width:200px;border-radius:5px;text-align:center;}
#address{height:30px; width:200px;border-radius:5px;text-align:center;}
#contact{height:30px; width:200px;border-radius:5px;text-align:center;}
#create{height:30px; width:200px;border-radius:5px;text-align:center;}

#submit{height:40px; width:500px; margin-left:52px;background-color:#2bbbad; color:white; font-size:25;border-radius:10px;}
#p{text-align:center;font-size:22;}
#loginlink{text-decoration:none;}
#table{margin:0px 10px;}
table{border-collapse:collapse; width:1000px;}
//table,th,td{border:1px solid black;}
th,td{border-bottom:1px solid black; height:50px;padding:10px; font-size:25px;}
td{text-align:center}
.h1{text-align:center; font-size:40px;color:#6495ED;}
#delete{height:35px;width:150px;border-radius:10px;}
#update{height:35px;width:150px;border-radius:10px;}

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
</div></br></br></br></br>
<div><h1 class="h1">Product List</h1></div>
<div id="table">
<form name="salertable" method="post" action="">
<table>
<tr>

<th>||Category||</th>
<th>||Product||</th>
<th>||Description||</th>
<th>||Bid Price||</th>
<th>||StartDate||</th>
<th>||EndDate||</th>
<th>||Seller||</th>
<th>||Action||</th>
</tr>
<?php 
while($Data = mysqli_fetch_array($Rsc,MYSQLI_NUM))
	{
?>	
<tr>
<td><?php echo $Data[1]?></td>
<td><?php echo $Data[2]?></td>
<td><?php echo $Data[3]?></td>
<td><?php echo $Data[4]?></td>
<td><?php echo $Data[5]?></td>
<td><?php echo $Data[7]?></td>
<td><?php echo UserName($Data[9])?></td>
<td><a href="productd.php?id=<?php echo $Data[0]?>">Detail</a></td>
</tr>
<?php } ?>
</table>
</form>


</div>
</body>
</html>