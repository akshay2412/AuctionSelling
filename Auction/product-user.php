<?php
session_start();
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
height:1800px; 
width:100%; 
background:#FFF8DC;
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

<div id="addform1">
<div><img src="logo1.png" id="image"/></div>

<div>
<form name="regi" method="post"  enctype="multipart/form-data" action="additem1.php">
<table>
	<tr>
	<?php
		$i=0;
		//echo 'hi '.$i;
		while($Data = mysqli_fetch_array($Rsc,MYSQLI_NUM))
		{ //echo $i;
			//echo $Data[6];
		if($i%4=='0')
		{
		echo "</tr><tr>";
		}
	?>
	
	<td><img src="upload/<?php echo $Data[6]?>" height="150" width="150">
	<br>
	<span><?php echo $Data[6]?></span>
	</td>
	<?php  $i++; } ?>
	</tr>
</table>
</form>
</div>
</div>
</body>
</html>