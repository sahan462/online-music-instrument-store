<!DOCTYPE HTML>
<html>
	<head>
		<title>helpandsupport</title>
		<link rel="stylesheet" href="help and support.css">
		<script src="https://kit.fontawesome.com/9470dea697.js" crossorigin="anonymous"></script>
		<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	</head>

<body>

<!--header-->

<div class= "header">

	<!--Brands-->

	<h4>powered by
	<div class="contact">
		+94703819255|Mon-Sun(8AM-10PM)|info@cassette.lk
	</div>	
		<button class="button2" style="vertical-align:middle"><span>Log in</span></button>

	<div class="sponsor1">
		<a href="https://www.yamaha.com/"><img src="./images/yamaha.png" height="27" width="100"  ></a>
	</div>

	<div class="sponsor2">
		<a href="https://www.roland.com/global/"><img src="./images/roland.png" height="27" width="120"  ></a>
		</div><br>
	</h4>
	<hr>

	<!--logo-->

	<div class="logo">
		<a href="www.cassette.lk">
			<img  src="./images/logo2.png" height="150" width="200" align="left">
		</a>
	</div>

	<!--Website name-->

	<div class="webname">
		<a href="www.cassette.lk">Cassette.lk</a>
	</div>

	<!--Search box-->

	<div class="search-box">
		<input class="search-text" name="" id="" type="text" size="50" maxlength="50" placeholder="search">
		
		<a class="search-btn" href="#"><i class="fas fa-search"></i></a>
	</div>

	<!--User profile,Shopping cart and Wishlist-->

	<div class="shopuser1">
		<div class= "tooltip">
		<a href=""><img src="./images/wishlist.png" height="60" width="60"  ></a>
			<span class="tooltiptext">Wishlist</span>
		</div>
	</div>
	<div class="shopuser2">
		<div class= "tooltip">
		<a href=""><img src="./images/shopping cart.png" height="60" width="60"></a>
			<span class="tooltiptext">My Cart</span>
		</div>
	</div>
	<div class="shopuser3">
		<div class= "tooltip">
		<a href=""><img src="./images/user.png" height="48" width="48"  ></a>
			<span class="tooltiptext">My Account</span>
		</div>
	</div>
</div>

<!--//header-->



<p class = "p3" >How We Can Help You?</p>
	
	<div  class = "box">
		
		<p class ="p4">Please select what you need help with: <br><br> </p>
	  		
<form>
<form method="post" action="">  
	<p class ="p4">
 <input type="radio" name="help" value="Buying"> Buying Items<br>
	
 <input type="radio" name="help" placeholder="Payments"> Payments<br>
	
<input type="radio" name="help" value="Refunds"> Refunds<br>
	
<input type="radio" name="help" value="Account"> Account<br>
	
<input type="radio" name="help" value="Shipping"> Shipping<br>
	
<input type="radio" name="help" value="Site_Issues"> Website Issues<br>
	
<input type="radio" name="help" value="Other_Issues"> Another Issue<br>
	</p>
  <br>  
	
	<center>
	<input type="submit" class="button" name="submit" value="Submit">
  <!-- <input type="submit" name="submit" value="Submit" class="button" style="vertical-align: middle"><span>Submit</span> -->
	<br><br>
	</center>
   <hr>
	
	</form>
</div>

<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db("$connection",'shopping');
		
		if(isset($_POST['submit']))
		{
			$helptopic  = $_POST['help'];
			
			$query = "INSERT INTO 'help_index' ('help_type') VALUES ('$helptopic)";
			$query_run = mysqli_query($connection,$query);
			
			if($query_run)
			{
				echo '<script type = "text/javascript"> alert("Data Saved") </script>';
				
				echo '<script type = "text/javascript"> alert("Data Not Saved") </script>';
			}
		}
		?>
		
<!--Page wrapper-->
<div class="page-wrapper"></div>

<!--Footer-->

<div class="footer">
	<div class="footer-content">
		<div class="sec1">
			<!--<font class="emailtop">Get your freshest item updates</font>-->
			<input type="submit" id="" value="Subscribe" class="emailbtn" >
<p class="p6">
	    <input type="text" name="" id="" placeholder="Your email here" class="email">
	    <a href="">Cassette.lk</a><br>
		    <a href="" class="a1">About Us</a>
			<a href="" class="a1">Careers</a><br>
			<a href="" class="a1">Contact Us</a>
			<a href="" class="a1">Customer Care</a>
			</p>
		</div>
		<div class="sec2">
			<p class="p7">
			<a href="" class="a2">Terms and Conditions |</a>
			<a href="" class="a2">	Privacy Policy</a>
			<a href="" class="a2">	|	Supplier Code of Conduct</a><br>
			</p>

			<a href="https://www.instagram.com" class="smicon"><img src="./images/instergram.png" height="30px" width="30px" TARGET="_blank"></a>
			<a href="https://www.twitter.com" class="smicon"><img src="./images/twitter.png" height="30px" width="30px" TARGET="_blank"></a>
			<a href="https://www.facebook.com" class="smicon"><img src="./images/facebook.png" height="30px" width="30px" TARGET="_blank"></a>
		</div>

	</div>
	<div class="footer-bottom">
		&copy; Cassette.lk | Designed by Group 10
	</div>
</div>
</body>
</html>