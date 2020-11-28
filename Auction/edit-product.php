<?php
session_start();
$con=mysqli_connect('localhost','root','','auction');


$Select = "select * from additem where id='".$_GET['id']."'";
$Rsc  = mysqli_query($con,$Select);
$Data = mysqli_fetch_array($Rsc,MYSQLI_NUM);


?>
<html>
<head>
<link rel="stylesheet" href="add.css">
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
<td><input type="text" name="productname" id="productname" placeholder="Enter Product Name" required value="<?php echo $Data['Product_name']?>"/></td>
</tr>

<tr>
<td id="ps">Description</td>
<td><input type="text" name="description"  id="description" placeholder="Enter Product Description" required value="<?php echo $Data['Description']?>"/></td>
</tr>

<tr>
<td id="cps">Min Bid Price</td>
<td><input type="text" name="minbid"  id="minbid" placeholder="Enter Minimum Bid Price" required value="<?php echo $Data['Min_bid']?>"/></td>
</tr>

<tr>
<td id="fn">Start Date</td>
<td><input type="date" name="sdate"  id="sdate" placeholder="Enter Start Date" required value="<?php echo $Data['Start_date']?>"/></td>
</tr>

<tr>
<td id="ln">End Date</td>
<td><input type="date" name="edate"  id="edate" placeholder="Enter End Date" required value="<?php echo $Data['End_date']?>"/></td>
</tr>

<tr>
<td id="ut">Category</td>
<td>
<?php
$sel = "select * from category";
$rsc = mysql_query($sel);
?>
<select name="category" id="category">
<option value="<?php echo $Data[2]?>"><?php echo $Data[2]?></option>
<?php
	while($data = mysql_fetch_array($rsc))
	{
?>
<option value="<?php echo $data['CateName']?>"><?php echo $data['CateName']?></option>
<?php } ?>
</select></td>
</tr>

<tr>
<td id="em">Product Image</td>
<td><input type="file" name="productimage" required/> <img src="upload/<?php echo $Data[6]?>" height="100" width="100"></td>
</tr>
</table>
</div>
<div id="register">
</br>
<tr>
<td>
<input type="hidden" name="postid" value="<?php echo $Data[0]?>">
<input type="submit"  name="Update" value="Update" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
</body>
</html>