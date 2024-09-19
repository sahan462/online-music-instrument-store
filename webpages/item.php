<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>


<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="item.css">
    <link rel="stylesheet" type="text/css" href="handf.css">
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
        <input type="button" name="" value="Log in">
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
            <li><a href="">Home</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Help and Support</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">About Us</a></li>
        </ul>
    </nav>
</div>



<!---------------------------Content----------------------------->

<!--Display Images-->

<div class="bimages1">
    <img src="../images/category-1.jpg">
</div>

<div class="bimages2">
    <img src="../images/category-2.jpg">
</div>

<div class="bimages3">
    <img src="../images/category-3.jpg">
</div>


<br>
<br>

<!--Sub Categories-->
    <!--Category 1-->


<h2 class="title">String Instruments</h2>
<br>
 <div class="container" style="width: 100%">
        <?php
            $query = "select * from product1 order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-4" style="float: left;">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["name"];?></h5>
                                <h5 class="text-danger">Rs. <?php echo $row["price"];?></h5>
                               <!-- <input type="text" name="quantity" class="form-control" value="1">-->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <a href="itembuy.php?pid=<?php echo $row["id"];?>"><input type="submit" name="" class="btn" value="View Item"></a>
                            </div>
                    </div>
        <?php
                }
            }
        ?>
</div>


<h2 class="title">Latest Products</h2>

<br>
 <div class="container" style="width: 100%">
        <?php
            $query = "select * from product2 order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-4" style="float: left;">
                            <div class="product">
                                <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["name"];?></h5>
                                <h5 class="text-danger">Rs. <?php echo $row["price"];?></h5>
                               <!-- <input type="text" name="quantity" class="form-control" value="1">-->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <a href="itembuy1.php?pid=<?php echo $row["id"];?>"><input type="submit" name="" class="btn" value="View Item"></a>
                            </div>
                    </div>
        <?php
                }
            }
        ?>
</div>



<!--Page wrapper-->
<div class="page-wrapper"></div>


<!--/Content-->

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












