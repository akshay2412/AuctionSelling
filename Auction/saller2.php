<html>
<head>
<style>
*{
margin:0px;
padding:0px;
}
#main
{
height:660px; 
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
width:1350px;
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
	     <img src="logo1.png">
	   </div>
	  
<div id="forlogin">
    <ul>
	   <li><a href="pp.htm">Home</a></li>
       <li><a href="login.html">Login</a></li>
	   <li><a href="reg.html">Registration</a></li>
	   <li><a href="#about">Category</a></li>
	   <li><a href="#about">Products</a></li>
	   <li><a href="about.html">AboutUs</a></li>
	   <li><a href="#about">Search</a></li>
    </ul>
</div></br></br></br></br>
<div><h1 class="h1">You may purchase item from here</h1></div>
<div id="table">
<form name="salertable" method="post" action="">
<table>
<tr>
<td></td>
<th>||Product_Name||</th>
<th>||Description||</th>
<th>||Min_Bid||</th>
<th>||Start_Date||</th>
<th>||End_Date||</th>
<th>||Category||</th>
<th>||Product_Image||</th>
</tr>
<tr>
<td><input type="checkbox" name="delete"></td>
<td>bmw360<a href="car1.html">Details</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><img src="logo1.png" width="100px" height="50px"</td>
</tr>
<tr>
<td><input type="checkbox" name="delete"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><input type="checkbox" name="delete"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><input type="checkbox" name="delete"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><input type="checkbox" name="check"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><input type="submit" name="delele" id="delete" value="REMOVE ITEM"/></td>
<td><input type="submit" name="delele" id="update" value="UPDATE ITEM"/></td>
</table>
</form>


</div>
</body>
</html>