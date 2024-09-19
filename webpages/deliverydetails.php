<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>
 
<?php

	if(!empty($_POST['next'])){

		header('location:checkout.php');

		$userid=$_SESSION['userid'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$zipcode=$_POST['zipcode'];
		$stradd1=$_POST['stradd1'];
		$stradd2=$_POST['stradd2'];
		$city=$_POST['city'];
		$district=$_POST['district'];

		$query="INSERT INTO delivery_details(userid, firstname, lastname, phonenumber, email, zipcode, streetaddress1, streetaddress2, city, district) VALUES ('$userid', '$fname', '$lname', '$phonenumber', '$email', '$zipcode', '$stradd1', '$stradd2', '$city', '$district')";

		if(mysqli_query($connection,$query)){
           
            echo "Row inserted";
        }
        else{
            echo "Row not inserted";
        } 


	}
?>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="handf.css">
    <link rel="stylesheet" type="text/css" href="deliverydetails.css">
    <script src="https://kit.fontawesome.com/9470dea697.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

<!--header-->

<div class= "header">

    <!--Brands-->

    <h4>powered by
    <div class="contact">
        +94703819255|Mon-Sun(8AM-10PM)|info@cassette.lk
    </div>  
    <div class="button">
        <?php if(empty($_SESSION['username'])){?>
            <a href="login.php"><input style="color: white; background: #ff3300 ; height: 25px; width: 80px; font-family: 'Roboto', sans-serif;text-transform: uppercase; cursor: pointer;" type="button" name="" value="Log in"></a>
        <?php } else { ?>
            <a href="login.php"><input style="color: white; background: #ff3300 ; height: 25px; width: 80px;  font-family: 'Roboto', sans-serif;text-transform: uppercase; cursor: pointer; " type="button" name="" value="Log Out"></a>
        <?php } ?>
    </div>
    <div class="sponsor1">
        <a href="https://www.yamaha.com/"><img src="../images/yamaha.jpg" height="30" width="50"  ></a>
    </div>

    <div class="sponsor2">
        <a href="https://www.gibson.com/"><img src="../images/gibson.jpg" height="30" width="52"  ></a>
    </div>
    </h4>
    <hr>

    <!--logo-->

    <div class="logo">
        <a href="www.cassette.lk">
            <img  src="../images/logo2.png" height="150" width="200" align="left">
        </a>
    </div>

    <!--Website name-->

    <div class="webname">
        <a href="www.cassette.lk"><font size="400"><u>Cassette.lk</u></font></a>
    </div>

    <!--Search box-->

    <div class="search-box">
        <input class="search-text" name="" id="" type="text" name="" size="50" maxlength="50" placeholder="search">
        <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
    </div>

    <!--User profile,Shopping cart and Wishlist-->

    <div class="shopuser1">
        <a href=""><img src="../images/wishlist.png" height="60" width="60"  ></a>  
    </div>
    <div class="shopuser2">
        <a href="Cart.php"><img src="../images/shopping cart.png" height="60" width="60"  ></a>
    </div>
    <div class="shopuser3">
        <a href=""><img src="../images/user.png" height="48" width="48"  ></a>
    </div>
</div>

<!--//header-->



<!-------------------Navigation Bar-----------------------> 

<div class="navbar">
    <nav>
        <ul>
            <li><a href="<?php echo 'homepage.php'; ?>">Home</a></li>
            <li><a href="<?php echo 'myorders.php'; ?>">MyOrders</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="<?php echo 'helpandsupport.php'; ?>">Help and Support</a></li>
            <li><a href="<?php echo 'contactus.php'; ?>">Contact Us</a></li>
        </ul>
    </nav>
</div>



<!---------------------------Content----------------------------->
<div class="topic">
	Delivery Details
</div>

<div class="form">

	<form method="post" action="">
		First Name:<br>
		<input name="fname"  type="text" size="60" placeholder="First Name"><br><br>
		Last Name:<br>
		<input name="lname"  type="text" size="60" placeholder="Last Name"><br><br>
		Phone Number:<br>
		<input name="phonenumber" 	type="text" size="60" placeholder="Phone Number"><br><br>
		E-mail:<br>
		<input name="email" 	type="email" size="60" placeholder="E-mail"><br><br>
		Postal/Zip Code:<br>
		<input name="zipcode"  type="text" size="60" placeholder="Postal/Zip code"><br><br>
		Street Address 1:<br>
		<input name="stradd1"  type="text" size="60" placeholder="Street Address 1"><br><br>
		Street Adderss 2:<br>
		<input name="stradd2"  type="text" size="60" placeholder="Street Address 2"><br><br>
		City:<br>
		<input name="city"  type="text" size="44" placeholder="City"><br><br>
		District:<br>
		<select name="district">
			<option>Ampara</option>
			<option>Anuradhapura</option>
			<option>Badulla</option>
			<option>batticaloa</option>
			<option>Colombo</option>
			<option>Galle</option>
			<option>Gampaha</option>
			<option>Hambanthota</option>
			<option>Jaffna</option>
			<option>Kalutara</option>
			<option>Kandy</option>
			<option>Kegalle</option>
			<option>Kilinochchi</option>
			<option>Kurunegala</option>
			<option>Mannar</option>
			<option>Matale</option>
			<option>Matara</option>
			<option>Monaragala</option>
			<option>Mullaitivu</option>
			<option>Nuwara Eliya</option>
			<option>Polonnaruwa</option>
			<option>Puttalam</option>
			<option>Ratnapura</option>
			<option>Trincomalee</option>
			<option>Vavuniya</option>
		</select><br><br>
		<!--Order Note(optional)<br>
		<textarea name="" id="" rows="4" cols="60"></textarea>-->
		<br><br><br>
		<input class="btn" name="next" type="submit" value="Next">

	</form>
</div>


<!--Page wrapper
<div class="page-wrapper"></div>-->



<!------------------------Footer------------------------->
<div class="footer">
    <div class="footer-content">
        <div class="sec1">
            <!--<font class="emailtop">Get your freshest item updates</font>-->
            <input type="submit" id="" value="Subscribe" class="emailbtn" >
            <input type="text" name="" id="" placeholder="Your email here" class="email">
            <a href="">Cassette.lk</a><br><br>
            <a href="" class="a1">About Us</a>
            <a href="" class="a1">Careers</a><br><br>
            <a href="" class="a1">Contact Us</a>
            <a href="" class="a1">Customer Care</a>
        </div>
        <div class="sec2">
            <a href="" class="a2">Terms and Condition   |</a>
            <a href="" class="a2">  Privacy Policy</a>
            <a href="" class="a2">  |   Supplier Code of Conduct</a><br>

            <a href="www.instergram.com" class="smicon"><img src="../images/instergram.png" height="30px" width="30px" TARGET="_blank"></a>
            <a href="www.twitter.com" class="smicon"><img src="../images/twitter.png" height="30px" width="30px" TARGET="_blank"></a>
            <a href="www.facebook.com" class="smicon"><img src="../images/facebook.png" height="30px" width="30px" TARGET="_blank"></a>
        </div>

    </div>
    <div class="footer-bottom">
        &copy; Cassette.lk | Designed by Group 10
    </div>
</div>
</body>
</html>

