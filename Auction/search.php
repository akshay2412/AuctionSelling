<?php
session_start();
?>
<html>
<head>
<title>Auction</title>
<style>
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
</style>

</head>
<body>
<div id="main">

       <div id="logo">
	     <tr>
		 <td>
		 <img src="logo1.png">
		 </td>
		 
		 </tr>
	   </div>
	  
	  <div id="forlogin">
          <?php include("menu.php");?>
      </div>

<div id="form">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="search" method="post" action="show.php">
<table>

<tr>
<td id="un">Enter location </td>
<td><input type="text" name="loc" id="loc" placeholder="Enter Location" /></td>
</tr>

<tr>
<td id="ps">Enter price </td>
<td><input type="text" name="price"  id="price" placeholder="Price" /></td>
</tr>
<tr>
<td id="ps">Enter Product name </td>
<td><input type="text" name="name"  id="name" placeholder="Product name" /></td>
</tr>
<tr>
<td id="ps">Enter SellerId </td>
<td><input type="text" name="sid"  id="sid" placeholder="Seller id" /></td>
</tr>
<tr>
<td id="ps">Enter Date </td>
<td><input type="date" name="dat"  id="dat" /></td>
</tr>
<tr>
<td><input type="submit"  name="submit" value="SEARCH" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
</body>
</html>