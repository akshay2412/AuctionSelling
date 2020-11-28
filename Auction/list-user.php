<?php
session_start();
$con=mysqli_connect('localhost','root','','auction');


$Select = "select * from user";
$Rsc  = mysqli_query($con,$Select);
 
?>
<html>
<head>
<style>

	<style>
	*{
margin:0px;
padding:0px;
}
#main
{
height:1800px; 
width:100%; 
background:#85b9ed;
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
    padding-left:20px;
    height:100px;
}
ul li a:hover 
    {
    background-color:#CDC9A5;
    border-radius:20px;
    }
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
<div><h1 class="h1">User List</h1></div>
<div id="table">
<form name="salertable" method="post" action="">
<table>
<tr>

<th>||Name||</th>
<th>||Password||</th>
<th>||Fname||</th>
<th>||Lname||</th>
<th>||Email||</th>
<th>||Address||</th>
<th>||Contact||</th>
<th>||Type||</th>
</tr>
<?php 
while($Data = mysqli_fetch_array($Rsc,MYSQLI_NUM))
	{
?>	
<tr>
<td><?php echo $Data['UserName']?></td>
<td><?php echo $Data['Password']?></td>
<td><?php echo $Data['Fname']?></td>
<td><?php echo $Data['Lname']?></td>
<td><?php echo $Data['Email']?></td>
<td><?php echo $Data['Address']?></td>
<td><?php echo $Data['ContctNo']?></td>
<td><?php if($Data['UserType']=='0') { echo "Admin"; } else if($Data['UserType']=='1')
	{ echo "Saler"; } else 
	{ echo "Bidder"; }
?></td>
</tr>
<?php } ?>
</table>
</form>


</div>
</body>
</html>