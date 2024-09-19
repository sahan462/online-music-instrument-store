<?php session_start();?>


<?php
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<?php

    if(!empty($_POST['log'])){

        $username=$_POST['Uname'];
        $userpassword=$_POST['pass'];
        $query="SELECT * FROM signup WHERE email='$username' and password_='$userpassword'";
        $result=mysqli_query($connection,$query);
        $r=mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
        if ($count>0) {

            $_SESSION['username']=$r['u_name'];
            $_SESSION['userid']=$r['u_id'];
            $_SESSION['email']=$r['email'];
            header('location:homepage.php');
            ?>

            <script>
                alert("Login Successfull")
            </script>
            <?php
        }
        else{
            ?>

            <script >
                alert("Login Not Successfull")
            </script>

            <?php
        }
    }


?>

<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="handf.css">
    <link rel="stylesheet" type="text/css" href="login.css">
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
            <a href="login.php"><input style="color: white; background: #ff3300 ; height: 25px; width: 80px;" type="button" name="" value="Log in"></a>
        <?php } else { ?>
            <a href="homepage.php?log=1"><input style="color: white; background: #ff3300 ; height: 25px; width: 80px;" type="button" name="" value="Log Out"></a>
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
        <a href="Shopping Cart.php"><img src="../images/shopping cart.png" height="60" width="60"  ></a>
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
            <li><a href="">Home</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Help and Support</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">About Us</a></li>
        </ul>
    </nav>
</div>



<!---------------------------Content----------------------------->

<br><br>
    <div class="login">
        <h2>Login</h2>
        <h4>Enter Login details to get access</h4>

            <form method="post" action="">
                <label>Username Or Email Address </label>
                <br><br>
                <input type="text" name="Uname" id="Uname" placeholder="Username/Email address" required> 
                <br><br><br>
                <label>Password </label>
                <br><br>
                <input type="password" name="pass" id="pass" placeholder="Enter Password"required>
                <br><br>
                <a href="#" class="Fpass">Forgot Password</a>
                <!--<input type="checkbox" id="check">    
                <span>Keep Me Logged In</span>-->
                <br><br>
                <a href="homepage.php"><input type="submit" name="log" id="log" value="Login"></a>
                <br> 
                <p>Don't have an account?</p>
                <a href="signup.php" class="sign_up">Sign Up</a> 
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