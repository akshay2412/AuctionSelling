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
height:1800px; 
width:100%; 
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

#after-image>fieldset>marquee{font-family:cooper black;color:green;}
#content>fieldset>h1{text-align:center;color:brown;}
#content>fieldset>p{align:justify;font-size:18px;padding:5px 20px;line-height:25px;}
#footer{background-color:#8b8970;height:300px;}
#footer>form>img{height:50px; width:50px; padding-top:230px;opacity:0.5}
#footer>form>img:hover{opacity:1}
#footer>form>p{text-align:left;}

</style>
<title>Auction</title>
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
	   <div></div>
	   <div id="forlogin">
    
	<?php include("menu.php"); ?>
	
	
</div>
<div id="after-menu">
  <img src="pic.jpg" ></div>

 <div id="content">
<fieldset><h1>Auction.com</h1>
<p>Welcome to Auction.com one of the best Indian online auction shopping venues on the Net! This web site is owned and operated by Auction.com Corporation, an Indian enterprise founded by a group of seasoned investors; successful business persons from west region of India
Auction.com conducted it's 1st online auction on 1st December 2011. Since then we are proudly India's No-1 Online Auctioneer with 2 Registered Members
We are also operating india's first online .You can buy branded CAR ,Luxury car,Antique car,Bike at ever lowest prices in india.
Auction.com has introduced a completely new and funny way of online shopping. Why spending a fortune for a brand new product if you can get it with a huge discount? We give you the chance to get the products you dream about at amazing prices!
Auction.com is a new exciting auction website where you can win branded factory sealed new products at huge discounts up to 89% off. Look at our homepage to see what products are up for auction right now, and if something seems interesting, why not bid for it!
Auction gives an opportunity to those people who can't afford to purchase costly branded products, they can try our risk free auctions to win their desired products like Cars, Bikes,& branded watches.
If you don’t win an auction, you will never have to walk away empty handed from Auction.com because you can buy the product for a discount price using the Buy Now option. You'll never have to pay more than the Value Price (MRP) for any products on Auction.com
We will do our very best to provide you with great merchandise at the best possible price. We think you will find that mixing online auction competition into the "joy of shopping" makes it all even more fun at Auction.com
</fieldset></p></div></br>

<div id="after-image"><fieldset>
<marquee behavior="alternate">
<h1>Latest Auctions</h1></marquee>
<img src="car1.jpg" width="300px" height="200px">
<img src="car2.jpg" width="330px" height="200px">
<img src="car3.jpg" width="350px" height="200px">
<img src="car4.jpg" width="350px" height="200px">
</fieldset>
</div></br>

<div id="footer">
<form >
<img src="twi5.png" class="mg">
<img src="gg1.png" class="mg">
<img src="fb3.ico" class="mg">
<p>Copyright &copy; 2020 Auction.com All rights reserved.</p>
</form>
</div>

</div>  
</body>
</html>