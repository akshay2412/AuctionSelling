<?php
session_start();
include("function.php");

$con=mysqli_connect('localhost','root','','auction');
$RReport = $_POST['RReport'];
$msg = $_GET['msg'];

if($_POST['Export'])
{

	if($RReport=='Product')
	{
	$filename = "product_report".date("Y-m-d_h-i_s",time());
	$Select = "SELECT * from additem"; 

	$Query = mysqli_query($con,$Select);
	$Count  = mysqli_num_fields($Query);

header("Content-Type: application/vnd.ms-excel; name='excel'");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename."."xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<table border="1">
<tr>

<th>||Category||</th>
<th>||Product||</th>
<th>||Description||</th>
<th>||Bid Price||</th>
<th>||StartDate||</th>
<th>||EndDate||</th>
<th>||Saler||</th>

</tr>
<?php 
while($Data = mysqli_fetch_array($con,$Query))
	{
?>	
<tr>
<td><?php echo $Data[1]?></td>
<td><?php echo $Data[2]?></td>
<td><?php echo $Data[3]?></td>
<td><?php echo $Data[4]?></td>
<td><?php echo $Data[5]?></td>
<td><?php echo $Data[6]?></td>
<td><?php echo UserName($Data[9])?></td>
</tr>
<?php } ?>
</table>

<?php 
}
else if($RReport=='Biddinng')
	{
	$filename = "bid_report".date("Y-m-d_h-i_s",time());
	$Select = "select * from biding"; 

	$Query = mysql_query($Select);
	$Count  = mysql_num_fields($Query);

header("Content-Type: application/vnd.ms-excel; name='excel'");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename."."xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<table border="1">
<tr>

<th>||Product||</th>
<th>||Bidder||</th>
<th>||Amount||</th>
<th>||Action||</th>
</tr>
<?php 
while($Data = mysql_fetch_array($Rsc))
	{
?>	
<tr>
<td><?php echo ProductName($Data['ProductId'])?></td>
<td><?php echo UserName($Data['BiderId'])?></td>
<td><?php echo $Data['BidAmount']?></td>
<td><a href="bid-ok.php?id=<?php echo $Data['id']?>">Detail</a></td>
</tr>
<?php } ?>
</table>

<?php 
}


exit; }
 ?>
<html>
<head>
<link rel="stylesheet" href="add.css">
</head>
<body>
<div id="main">

       <div id="logo">
	     <img src="logo1.png">
		 <?php echo $_SESSION['name'];?>
	   </div>
	  
	  <div id="forlogin">
          <?php include("menu.php"); ?>
      </div>

<div id="addform">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post"  action="">
<table>
<tr>
	<td><?php echo $msg;?></td>
</tr>
<tr>
<td id="un">Report Name </td>
<td><select name="RReport">
<option value="Product">Product</option>
<option value="Biddinng">Bidding</option>
</select>
</td>
</tr>


</table>
</div>
<div id="register">
</br>
<tr>
<td><input type="submit"  name="Export" value="Export" id="submit"></td>
</tr>
</div>
</form>
</div>
</div>
</body>
</html>