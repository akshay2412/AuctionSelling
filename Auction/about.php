<?php
session_start();
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
height:640px; 
width:1350;
background:#FFF8DC;
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
//padding:10px;
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
#about>h1{font-family:cooper black; font-size:40px;padding:20px;}
#about>p{font-size:20px; line-height:30px;text-align:justify;padding:20px;padding-top:0px;}
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
<div id="about">
<h1><u>About Us</u></h1>
<p>
This is a website that provides a place for buyers and sellers to come together and trade almost anything . It provides user friendly graphical interface such that any  user with a little bit knowledge of computer can easily use this software. This is a public website for posting items for auction  and finding a purchaser of item all the registered users of web site have their own personal home page.
The system consists a web-portal where registered users can propose new auctions, place bids in order to buy the items on auction, send message to other users and receive automatically news via email .
Registration of users is preceded by a “pre-registration” to check whether users insert their real email address , they receive an email with an auto-generated secret code that they will be asked to type in to confirm the data (name, address, phone no etc).  Without this confirmation a user can’t access the functionality of the portal.
Auctions have a name, a description possibly a photo of related item , uploaded by users and an end period. User can’t place bids when the auction interval is over. The auction period can be extended.
The administrator can accept or refuse auctions proposed by users. He can view information about users and and items and can create, modify and  delete the auction.  
The system is realized with a 3-tier architecture : a relational database that store the information regarding items , users , auctionsand categories of auction; an application server that cares about the business logic of the system and the presentation layer that consists a web browser where users can interact with the system.

</p>

</div>














</div>
</body>
</html>