<?php
session_start();
include("function.php");

$con=mysqli_connect('localhost','root','','auction');
$Select = "select * from additem";
$Rsc  = mysqli_query($con,$Select);
 
?>
<html>
<head>
<style>
*{
margin:0px;
padding:0px;
}
#main
{
height:100%; 
width:100%;
//background:#FFF8DC;
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
padding:0px;
margin-right:20px;
float:left;
background:#8b8970;
width:100%;
//height:50px;
}
ul li
{
float:left;
list-style-type:none;
padding-left:30px;
padding-right:0px;
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

#table{margin:0px 10px;}
table{border-collapse:collapse; width:100%;}
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
<td><?php echo UserName($Data['SellerId'])?></td>
<td><a href="productd.php?id=<?php echo $Data[0]?>">Detail</a></td>
</tr>
<?php } ?>
</table>
</form>


</div>
</body>
</html>