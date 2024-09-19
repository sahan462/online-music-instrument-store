<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>


<?php

    if(!empty($_POST['SignUp'])){

        $fname=$_POST['Fname'];
        $email=$_POST['email'];
        $password=$_POST['C_pass'];


        echo $fname,$email,$password;

        $query="INSERT INTO signup(u_name,email,password_)VALUES('$fname','$email','$password')";

        if(mysqli_query($connection,$query)){

            ?>

            <script>
                alert("SignUp Completed! ");
            </script>

            <?php
            header('location:login.php');
        }
        
        else{

            ?>

            <script>
                alert("SignUp Not Completed! Try Again.");
            </script>

            <?php
        }
    }
?>




<html>
<head>
    <title>signup</title>
    <link rel="stylesheet" type="text/css" href="handf.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
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
    <!--<div class="button">
        <input type="button" name="" value="Log in">
    </div>-->
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

    <!--<div class="search-box">
        <input class="search-text" name="" id="" type="text" name="" size="50" maxlength="50" placeholder="search">
        <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
    </div>-->

    <!--User profile,Shopping cart and Wishlist-->

   <!--<div class="shopuser1">
        <a href=""><img src="../images/wishlist.png" height="60" width="60"  ></a>  
    </div>
    <div class="shopuser2">
        <a href="Shopping Cart.php"><img src="../images/shopping cart.png" height="60" width="60"  ></a>
    </div>
    <div class="shopuser3">
        <a href=""><img src="../images/user.png" height="48" width="48"  ></a>
    </div>-->
</div>

<!--//header-->



<!-------------------Navigation Bar-----------------------> 

<!--<div class="navbar">
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Help and Support</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">About Us</a></li>
        </ul>
    </nav>
</div>-->



<!---------------------------Content----------------------------->

<div class="sign_up">
    
        <h2>Sign Up</h2>
        <h4>Create your account to get full access</h4>

        <form method="post" >
            <label>Full Name</label>
            <br><br>
            <input type="text" name="Fname" id="Fname" placeholder="Enter Your Name" required> 
            <br><br><br>
            <label>Email Address</label>
            <br><br>
            <input type="text" name="email" id="email"  placeholder="Enter email address"  required>
            <br><br><br>
            <label>Password </label>
            <br><br>
            <input type="password" name="pass" id="pass" placeholder="Enter Password"  required>
            <br><br><br>
            <label>Confirm Password </label>
            <br><br>
            <input type="password" name="C_pass" id="C_pass" placeholder="Confirm Password"  required>
            <br><br>

    
            <input type="submit" name="SignUp" id="sign_up" value="Sign Up">
        </form>
</div>
    

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