<ul>
	   <li><a href="index.php">Home</a></li>
	   <li><a href="search.php">Search</a></li>
       <li><a href="login.php">Login</a></li>
       <?php 
	   		if($_SESSION['type']=='')
	   		{	
	   ?>
	   <li><a href="verify.php">Registration</a></li>
	   <?php } ?>
	   <?php 
	   		if($_SESSION['type']=='0')
	   		{	
	   ?>
	   <li><a href="category.php">Category</a></li>
	   
	   <li><a href="product-list.php">Products</a></li>
	   <li><a href="report.php">Report</a></li>
	   <?php  } else if($_SESSION['type']=='1')
	   		{?>
		<li><a href="add.php">Products</a></li>
		<li><a href="product-list-saler.php">Products List</a></li>
		<li><a href="bid-list.php">Bidding List</a></li>
			
		<?php } else if($_SESSION['type']=='2')
	   		{ ?>
		<li><a href="product-user-bid.php">Products</a></li>	
		<?php  } else { ?>
		<li><a href="product-user.php">Products</a></li>
		<?php } ?> 		
	   <li><a href="about.php">AboutUs</a></li>
	   <?php 
	   		if($_SESSION['type']!='')
	   		{	
	   ?>
	   <li><a href="logout.php">Logout</a></li>
	   <?php } ?>
    </ul>