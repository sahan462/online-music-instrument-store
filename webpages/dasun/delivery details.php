<!DOCTYPE HTML>
<html>
	<head>
<title></title>
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
<img src="./images/logo2.png" height="150" width="200" align="left">
</a>
</div>



<!--Website name-->



<div class="webname">
<a href="www.cassette.lk">Cassette.lk
</div>



<!--Search box-->



<div class="search-box">
<input class="search-text" name="" id="" type="text" size="50" maxlength="50" placeholder="search">
<a class="search-btn" href="#"><i class="fas fa-search"></i></a>
</div>



<!--User profile,Shopping cart and Wishlist-->



<div class="shopuser1">
<div class= "tooltip">
<a href=""><img src="./images/wishlist.png" height="60" width="60" ></a>
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
<a href=""><img src="./images/user.png" height="48" width="48" ></a>
<span class="tooltiptext">My Account</span>
</div>
</div>
</div>

<!--//header-->

	<p class="p3">Delivery Details</p>
	<div class="box5">

	<form action="" method="post">
	<p class="p8">Enter your name<br>
	<input name="first_name" type="text" placeholder="First Name">
	<input name="last_name" type="text" placeholder="Last Name"></p>
	
	<p class="p8">Enter Your Phone Number<br>
	<input name="phone_number" type="text" placeholder="Phone Number"></p>
	
	<p class="p8">Enter Your Address<br>
    <input name="address_1" type="text" placeholder="Street Address 1"> <br><br>
	<input name="address_2" type="text" placeholder="Street Address 2"> </p>

    <p class="p8">Enter your city and the District<br>
	<input name="city" type="text" placeholder="City">
	<select name ="district">
		<option value = "Ampara">Ampara</option>
		<option value = "Anuradhapura">Anuradhapura</option>
		<option value = "Badulla">Badulla</option>
		<option value = "Batticaloa">Batticaloa</option>
		<option value = "Colombo">Colombo</option>
		<option value = "Galle">Galle</option>
		<option value = "Gampaha">Gampaha</option>
		<option value = "Hambanthota">Hambanthota</option>
		<option value = "Jaffna">Jaffna</option>
		<option value = "Kalutara">Kalutara</option>
		<option value = "Kandy">Kandy</option>
		<option value = "Kegalle">Kegalle</option>
		<option value = "Kilinochchi">Kilinochchi</option>
		<option value = "Kurunegala">Kurunegala</option>
		<option value = "Mannar">Mannar</option>
		<option value = "Matale">Matale</option>
		<option value = "Matara">Matara</option>
		<option value = "Monaragala">Monaragala</option>
		<option value = "Mullaitivu">Mullaitivu</option>
		<option value = "Nuwara Eliya">Nuwara Eliya</option>
		<option value = "Polonnaruwa">Polonnaruwa</option>
		<option value = "Puttalam">Puttalam</option>
		<option value = "Ratnapura">Ratnapura</option>
		<option value = "Trincomalee">Trincomalee</option>
		<option value = "Vavuniya">Vavuniya</option>
		</select> </p>

	<p class="p8">Enter Your Postal Code and Country <br>
	<input name = "zip_code" type="text" size="10" placeholder="Postal/Zip code">
	<select name= "country">
		<option value = "Sri Lanka">Sri Lanka</option>
		<option value = "India">India</option>
		<option value = "Bangladesh">Bangladesh</option>
		<option value = "Malyasia">Malyasia</option>
		<option value = "China">China</option>
	</select> </p>
	
	<p class="p8">Order Note (optional)<br>
	<textarea name="order_note" rows="3" cols="40" placeholder="Enter your message..."></textarea>  </p>
	<hr>

	<center>
		<input type="submit" class="button3" name="submit" value="Proceed to Checkout"></center>
		</div>

<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'shopping');
		
		if(isset($_POST['submit']))
		{
			$first_name    = $_POST['first_name'];
			$last_name     = $_POST['last_name'];
			$phone_number  = $_POST['phone_number'];
			$address_1  = $_POST['address_1'];
			$address_2  = $_POST['address_2'];
			$city       = $_POST['city'];
			$district   = $_POST['district'];
			$zip_code   = $_POST['zip_code'];
			$country    = $_POST['country'];
			$order_note = $_POST['order_note'];
			
			$query = "INSERT INTO 'delivery_details' ('first_name','last_name','phone_number','address_1','address_2','city','district','zip_code','country','order_notes') VALUES ('$first_name','$last_name','$phone_number','$address_1','$address_2','$city','$district','$zip_code','$country','$order_note')";
			
			$query_run = mysqli_query($connection,$query);
			
			if($query_run)
			{
				echo '<script type = "text/javascript"> alert("Data Saved") </script>';
			}
				else {		
				
					echo '<script type = "text/javascript"> alert("Data Not Saved") </script>';
			}
		}
		?>

<!------ content here---->


<!--Page wrapper-->
<div class="page-wrapper"></div>

<!--Footer-->

 <div class="footer">
	<div class="footer-content">
		<div class="sec1">
			<input type="submit" id="" value="Subscribe" class="emailbtn" >
<p class="p6">
	    <input type="text" name="" id="" placeholder="Your email here" class="email">
	    <a href="">Cassette.lk</a><br>
		    <a href="" class="a1">About Us</a>
			<a href="" class="a1">Careers</a>
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