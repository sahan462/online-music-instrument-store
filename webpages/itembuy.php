<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>


<?php
        if(!empty($_GET['addtocart']))

        {   

            $pid=$_GET['pid'];
            $query2="SELECT * FROM cart WHERE  productid=$pid";
            $result2=mysqli_query($connection,$query2);
            $count2=mysqli_num_rows($result2);
            if($count2>0){

            ?>
            <script type="text/javascript">
                alert("Item already in the cart!");
            </script>

         <?php } else { ?>

            <?php
                     
            $pid=$_GET['pid'];
            $hidden_name=$_GET['hidden_name'];
            $hidden_price=$_GET['hidden_price'];
            $qty=$_GET['qty'];
            $hidden_image=$_GET['hidden_image'];
            $userid=$_SESSION['userid'];
            $username=$_SESSION['username'];
            $subtotal=$qty*$hidden_price;
            $query="INSERT INTO cart(productid,userid,username,pname,pprice,qty,pimage,subtotal) VALUES ('$pid','$userid','$username','$hidden_name','$hidden_price','$qty','$hidden_image','$subtotal')";

            if(mysqli_query($connection,$query))
            {
               /*echo "Record Inserted";*/
            }
            else
            {
               /*echo "Record Not Inserted";*/
            }

            header('location:Cart.php');

         } ?>
<?php } ?>


<html>
<head>
    <title>Item</title>
    <link rel="stylesheet" type="text/css" href="handf.css">
    <link rel="stylesheet" type="text/css" href="itembuy.css">
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
            <a href="login.php"><input style="color: white; background: #ff3300 ; height: 25px; width: 80px;" type="button" name="" value="Log Out"></a>
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


    <?php
        $id=$_GET['pid'];
        $query="select * from item_1 where item_id=$id";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($result);
    ?>
    <?php
        $query1="select * from product1 where id=$id";
        $result1=mysqli_query($connection,$query1);
        $row1=mysqli_fetch_array($result1);
        $count=mysqli_num_rows($result1);
        if($count>0){

    ?>
<div class="section 1">
     <div class="item1">

        
        <table border="5">
            <tr>
                <td>
                    <img src="<?php echo $row1['image']?>">
                </td>
            </tr>
        </table>

        <div class="description">
                <table>
                    <tr >
                        <td class="desc1"><h1><?php echo $row['name']?></h1></td>
                    </tr>
                    <tr>
                        <td class="desc2">Rs. <?php echo $row['price']?></td>
                    </tr>
                    <tr>
                        <td class="desc3">In stock: <?php echo $row['quantity']?></td>
                    </tr>
                    <tr>
                        <td class="desc4"><br><?php echo $row['description']?></td>
                    </tr>
                </table>
        </div>
    </div>
        <div class="quantity">
            <form method="get" >
                <input type="hidden" name="pid" value="<?php echo $_GET['pid']?>"/>
                <input type="hidden" name="hidden_price" value="<?php echo $row1['price'];?>">
                <input type="hidden" name="hidden_name" value="<?php echo $row1['name'];?>">
                <input type="hidden" name="hidden_image" value="<?php echo $row1['image'];?>">
                <table style="width: 25%; float: left; margin-left: 65px;">
                    <tr>
                        <td class="qty" ><br>Enter quantity :</td>
                        <td><br><input type="text" name="qty"></td>
                    </tr>
                <tr>
                    <td><br>
                        <div class="cart">
                            <?php 

                                if(empty($_SESSION['username'])){

                                ?>
                                   <a href="<?php echo 'login.php'; ?>"><input type="button" name="addtocart" class="btn" value="Login to Buy"></a>

                            <?php }else{ ?>

                                    <a href="Cart.php"></a><input type="submit" name="addtocart" class="btn" value="Add to Cart">
                           <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    
</div>

<?php  } else { ?>



    <?php
        $id=$_GET['pid'];
        $query="select * from item_1 where item_id=$id";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_array($result);
    ?>
    <?php
        $query1="select * from product2 where id=$id";
        $result1=mysqli_query($connection,$query1);
        $row1=mysqli_fetch_array($result1);
        $count1=mysqli_num_rows($result1);
        if($count1>0){

    ?>
<div class="section 1">
    <div class="item1">

        
        <table border="5">
            <tr>
                <td>
                    <img src="<?php echo $row1['image']?>">
                </td>
            </tr>
        </table>

        <div class="description">
            <center>
                <table>
                    <tr >
                        <td class="desc1"><h1><?php echo $row['name']?></h1></td>
                    </tr>
                    <tr>
                        <td class="desc2">Rs. <?php echo $row['price']?></td>
                    </tr>
                    <tr>
                        <td class="desc3">In stock: <?php echo $row['quantity']?></td>
                    </tr>
                    <tr>
                        <td class="desc4"><br><?php echo $row['description']?></td>
                    </tr>
                </table>
            </center>
        </div>

    </div>

    <div class="quantity">
            <form>
                <input type="hidden" name="pid" value="<?php echo $_GET['pid']?>"/>
                <input type="hidden" name="hidden_price" value="<?php echo $row1['price'];?>">
                <input type="hidden" name="hidden_name" value="<?php echo $row1['name'];?>">
                <input type="hidden" name="hidden_image" value="<?php echo $row1['image'];?>">
                <table style="width: 25%; float: left; margin-left: 65px;">
                    <tr>
                        <td class="qty" ><br>Enter quantity :</td>
                        <td><br><input type="text" name="qty"></td>
                    </tr>
                <tr>
                    <td><br>
                        <div class="cart">
                            <?php 

                                if(empty($_SESSION['username'])){

                                ?>
                                   <a href="<?php echo 'login.php'; ?>"><input type="button" name="addtocart" class="btn" value="Login to Buy"></a>

                            <?php }else{ ?>

                                    <input type="submit" name="addtocart" class="btn" value="Add to Cart">
                           <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            </form>
        </div>
</div>

<?php } ?>
<?php } ?>



<!--Page wrapper-->
<div class="page-wrapper"></div>


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