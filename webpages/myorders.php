<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<?php 

    if(!empty($_POST['cancelorder'])){

        $orderid=$_POST['orderid'];
        $query1="DELETE FROM order_ WHERE order_id=$orderid";

        if(mysqli_query($connection,$query1))
            {
               /*echo "Record Inserted";*/
            }
        else
            {
               /*echo "Record Not Inserted";*/
            }
    }
?>


<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="handf.css">
    <link rel="stylesheet" type="text/css" href="myorders.css">
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
My Orders
</div>

<div class="Cart_table">
    <div class="SCart">
        <table>
            <tr>
                <th>Order ID</th>
                <th >Delivery</th>
                <th>Payment Metod</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>

                <?php 
                $userid=$_SESSION['userid'];
                $query="SELECT * FROM order_  WHERE user_id=$userid order by user_id asc";
                $result=mysqli_query($connection,$query);
                /*$row=mysqli_fetch_assoc($result);*/
                while($row=mysqli_fetch_assoc($result)){

                ?>
            <tr>
                <td>
                <form method="post">
                    <div class="cart-info">
                        <p style="margin-left: 50px;"><?php echo $row['order_id'];?></p>
                    </div>
                
                </td>

                <?php
                $deliveryid=$row['delivery_id'];
                $query2="SELECT * FROM delivery_details WHERE d_id=$deliveryid";
                $result2=mysqli_query($connection,$query2);
                $row2=mysqli_fetch_assoc($result2);

                ?>
                <td style="text-align: center;">
                    <?php echo $row2['streetaddress1'];?>,
                    <?php echo $row2['streetaddress2'];?>,
                    <?php echo $row2['city'];?>,
                    <?php echo $row2['district'];?>,
                    <?php echo $row2['zipcode'];?>.

                </td>
                <td style="text-align: center;"><?php echo $row['payment_method'];?></td>
                <td style="text-align: center;" class="subtotal"><?php echo $row['Total'];?></td>
                <td>
                    <input type="hidden" name="orderid" value="<?php echo $row["order_id"]; ?>">
                    <input type="submit" name="cancelorder" value="cancel order" class="btn1">
                </td>
                </form>
            </tr>        
        <?php } ?>

        </table>
    <br><br><br> 
    <!--<a href="deliverydetails.php"><input class="btn" name="placeorder" type="submit" value="PLACE ORDER"></a><br><br><br>--->
    </form>
    <a href="homepage.php"><input class="btn" type="submit" value="CONTINUE SHOPPING"></a>
</div>
</div>

<!--Page wrapper-->

    
<div class="page-wrapper">
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