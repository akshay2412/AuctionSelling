<?php
session_start();
include("function.php");

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
<td><?php echo $Data[2]?></td>
</tr>

<tr>
<td id="ps">Description</td>
<td><?php echo $Data[3]?></td>
</tr>

<tr>
<td id="cps">Min Bid Price</td>
<td><?php echo $Data[4]?></td>
</tr>

<tr>
<td id="fn">Start Date</td>
<td><?php echo $Data[5]?></td>
</tr>

<tr>
<td id="ln">End Date</td>
<td><?php echo $Data[7]?></td>
</tr>

<tr>
<td id="ut">Category</td>
<td>
<?php echo $Data[1]?></td>
</tr>

<tr>
<td id="em">Create date</td>
<td><?php echo $Data[8]?></td>
</tr>
<tr>
<td id="em">Product Image</td>
<td><img src="upload/<?php echo $Data[6]?>" height="150" width="150"></td>
</tr>

<tr>
<td id="em">Seller</td>
<td><?php echo UserName($Data[9])?></td>
</tr>

</table>
</div>
<div id="register">
</br>
</div>
</form>
</div>
</div>
</body>
</html>