<?php
session_start();
$con=mysqli_connect('localhost','root','','auction');


$Select = "SELECT * FROM biding WHERE  SalerId='".$_SESSION['id']."'";
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
    
#addform
{
background-color:white; 
height:700px; 
width:600px;
margin-top:80px;
margin-left:350px;
border-radius:10px;
position:absolute;
}
#addform1
{
background-color:white; 
height:700px; 
width:1000px;
margin-top:80px;
margin-left:50px;
border-radius:10px;
position:absolute;
}


#image{width:150px; height:100px; float:right;margin-top:-25px;}
table{margin-left:80px; margin-top:80px;}
tr,td{width:250px; height:35px;}

#un{font-size:30px;}
#ps{font-size:30px;}
#cps{font-size:30px;}
#fn{font-size:30px;}
#ln{font-size:30px;}
#ut{font-size:30px;}
#em{font-size:30px;}


#productname{height:30px; width:200px;border-radius:5px;text-align:center;}
#description{height:30px; width:200px;border-radius:5px;text-align:center;}
#minbid{height:30px; width:200px;border-radius:5px;text-align:center;}
#sdate{height:30px; width:200px;border-radius:5px;text-align:center;}
#edate{height:30px; width:200px;border-radius:5px;text-align:center;}
#category{height:30px; width:200px; border-radius:5px; padding-left:30px;}

#submit{height:40px; width:300px; margin-left:150px;background-color:#2bbbad; color:white; font-size:25;border-radius:10px;margin-top:20px;}
#p{text-align:center;font-size:22;}
#loginlink{text-decoration:none;}
    
#after-image>fieldset>marquee{font-family:cooper black;color:green;}
#content>fieldset>h1{text-align:center;color:brown;}
#content>fieldset>p{text-align:justify;font-size:18px;padding:5px 20px;line-height:25px;}
#footer{background-color:#8b8970;height:300px;}
#footer>form>img{height:50px; width:50px; padding-top:230px;opacity:0.5}
#footer>form>img:hover{opacity:1}
#footer>form>p{text-align:left;}

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

<div id="addform">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post"  enctype="multipart/form-data" action="additem1.php">
<table>

<tr>
<td id="un">Product Name </td>
<td><input type="text" name="productname" id="productname" placeholder="Enter Product Name" required/></td>
</tr>

<tr>
<td id="ps">Description</td>
<td><input type="text" name="description"  id="description" placeholder="Enter Product Description" required/></td>
</tr>

<tr>
<td id="cps">Min Bid Price</td>
<td><input type="text" name="minbid"  id="minbid" placeholder="Enter Minimum Bid Price" required/></td>
</tr>

<tr>
<td id="fn">Start Date</td>
<td><input type="date" name="sdate"  id="sdate" placeholder="Enter Start Date" required/></td>
</tr>

<tr>
<td id="ln">End Date</td>
<td><input type="date" name="edate"  id="edate" placeholder="Enter End Date" required/></td>
</tr>

<tr>
<td id="ut">Category</td>
<td>
<?php
$sel = "select * from category";
$rsc = mysqli_query($con,$sel);
if(!$rsc)
echo "No";
else
echo "yes";
?>
<select name="category" id="category">
<option value=""></option>
<?php
	while($data = mysqli_fetch_array($rsc,MYSQLI_NUM))
	{ echo 'while';
?>
<option value="<?php echo $data[1]?>"><?php echo $data[1]?></option>
<?php } ?>
</select></td>
</tr>

<tr>
<td id="em">Product Image</td>
<td><input type="file" name="productimage" required/></td>
</tr>
</table>
</div>
<div id="register">
</br>
<tr>
<td><input type="submit"  name="submit" value="ADD ITEM" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
<?php 
$today=date("Y-m-d")." ".date("h:i:sa");
while($Data = mysqli_fetch_array($Rsc))
	{
?>	
<?php $date=$Data['End_date'];

if($today>$date)
{
	$q="Select * from biding where ProductId='".$data['id']."'";
	$Rsc1  = mysqli_query($con,$Select);
	$max=0;
	$sold_to=0;
	while($row = mysqli_fetch_array($Rsc1))
		
	{
		if($row['BidAmount']>$max)
		{
			$max=$row['BidAmount'];
			$sold_to=$row['BiderId'];
		}
		
	}
	$msg='Item '.$Data['id'].' sold to customer id'.$sold_to.' at price '.$max;
	
	echo "<script type='text/javascript'>alert('$msg');</script>";
	
}
?>
<?php } ?>
</body>
</html>