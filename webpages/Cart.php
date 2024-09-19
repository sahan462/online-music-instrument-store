<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<?php
    if(!empty($_POST['placeorder'])){

        
        $userid=$_SESSION['userid'];
        $query="INSERT INTO order_(userid) VALUES ('$userid')";
        if(mysqli_query($connection,$query)){

            header('location:deliverydetails.php');
            /*echo "Row inserted";*/
        }
        else{
            /*echo "Row not inserted";*/
        } 
    }

?>


<?php 

    if(!empty($_POST['remove'])){

        $prid=$_POST['productid'];
        $query1="DELETE FROM cart WHERE productid=$prid";

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
    <!--<link rel="stylesheet" type="text/css" href="handf.css">-->
    <link rel="stylesheet" type="text/css" href="Cart.css">
    <script src="https://kit.fontawesome.com/9470dea697.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body >

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
Shopping Cart
</div>

<div class="account_table">

    
    <?php 
        $total=0;
        $x=0;
        $userid=$_SESSION['userid'];
        $totalquery="select * from cart where userid=$userid order by userid";
        $totalresult=mysqli_query($connection,$totalquery);
        /*$row=mysqli_fetch_assoc($result);*/
        while($totalrow=mysqli_fetch_assoc($totalresult)){

            $total=$total+$totalrow['subtotal'];
            $x=$x+$totalrow['qty'];
        }

    ?>
    

    <table border="1">
        <tr>
            <td>Items:</td>
            <td style="float:right;"><?php echo $x;?></td>
        </tr>
        <tr>
            <td>Total:</td>
            <td style="float: right;"><?php echo number_format($total,2); ?></td>
        </tr>
    </table>

</div>
<div class=" Cart_table">
    <div class="SCart">
        <table>
            <tr>
                <th>Product</th>
                <th >Quantity</th>
                <th>Subtotal</th>
            </tr>

                <?php 
                $userid=$_SESSION['userid'];
                $query="select * from cart where userid=$userid order by userid";
                $result=mysqli_query($connection,$query);
                /*$row=mysqli_fetch_assoc($result);*/
                while($row=mysqli_fetch_assoc($result)){

                ?>
            <tr>
                <td>
                <form method="post" action="">
                    <div class="cart-info">
                        <img src="<?php echo $row['pimage'];?>" wide="200" height="200" >
                        <div>
                            <p><center><?php echo $row['pname'];?></center></p>
                            <small><?php echo $row['pprice'];?></small>
                            <br>
                            <input type="hidden" name="productid" value="<?php echo $row["productid"]; ?>">
                            <input type="submit" name="remove" value="remove" class="btn1">
                        </div>
                    </div>
                
                </td>
                <td style="text-align: center;"><?php echo $row['qty'];?></td>
                <td class="subtotal"><?php echo number_format($row["qty"]*$row["pprice"],2);?></td>
                </form>

            </tr>
                
        <?php } ?>

    </table>
    <br><br><br>
    <a href="deliverydetails.php"><input class="btn2" name="placeorder" type="submit" value="PLACE ORDER"></a><br><br><br>
    </form>
    <a href="homepage.php"><input class="btn3" type="submit" value="CONTINUE SHOPPING"></a>
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