<?php
    session_start();
    $db_name = "shopping";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<?php

    if(!empty($_POST['checkout'])){

        $userid=$_SESSION['userid'];

        $query="SELECT * FROM delivery_details WHERE userid='$userid'";
        $result=mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result);

        $deliveryid=$row['d_id'];
        $paymentmethod=$_POST['payment'];
        $cardnumber=$_POST['CardNumber'];
        $Expiry=$_POST['date'];
        $cvc=$_POST['cvc'];
        $name=$_POST['name'];
        $ordernote=$_POST['ordernote'];

        $total=0;
        $totalquery="select * from cart order by id asc";
        $totalresult=mysqli_query($connection,$totalquery);
        /*$row=mysqli_fetch_assoc($result);*/
        while($totalrow=mysqli_fetch_assoc($totalresult)){

            $total=$total+$totalrow['subtotal'];
                
        }

        $total=$total+750.00;
        $query1="INSERT INTO order_ (delivery_id, user_id,Total,payment_method, card_number, Expiry, CVC, NameOnCard
                 ,OrderNote) VALUES ('$deliveryid', '$userid','$total', '$paymentmethod', '$cardnumber', '$Expiry', '$cvc', '$name', '$ordernote')";
        mysqli_query($connection,$query1);

        ?>
        <script>
            alert("Order Successful!")
        </script>

        <?php 

        header('location:myorders.php');


        ?>
<?php 
}
?>

<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
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

<div class="section">
    <div class="maintopic1">Billing Details</div>
    <div class="maintopic2">Order Summary</div>
    <form method="post">
        <div class="account_table">

    
            <?php 
            $total=0;
            $x=0;
            $y=750.00;
            $totalquery="select * from cart order by id asc";
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
                <td>Sub Total:</td>
                <td style="float: right;">Rs. <?php echo number_format($total,2); ?></td>
            </tr>
            <tr style="border-top: 1px solid #333;">
                <td>Delivery Fee:</td>
                <td style="float:right;">Rs. 750.00</td>
            </tr>
            <tr style="border-top: 1px solid #333;">
                <td>Total:</td>
                <td style="float:right;">Rs. <?php echo number_format($total+$y,2); ?> </td>
            </tr>
            </table>
        </div>
        <textarea rows="4" cols="52" name="ordernote" placeholder="Order Note(Optional)"></textarea>
        <a href="myorders.php"><input class="btn" name="checkout" type="submit" value="PROCEED TO CHECKOUT"></a>
        <div >
        <div class="subtopic1"><u><b>Payment Method</b></u></div>
        <div class="radio_buttons">
            <input type="radio" name="payment" value="CreditCard/DebitCard" required>Credit Card/Debit Card      
            <input type="radio" name="payment" value="Cash on Delivery" required>Cash on Delivery
        </div>
        <div class="subtopic2"><u><b>Credit and Debit Cards</b></u><br></div>
        <div class="form">
            <div style="margin-left: 25px;">Card Number:<br></div>
            <input type="text" name="CardNumber" placeholder="**** **** **** ****" ><br><br>

            <div style="margin-left: 25px;">Expiry:<br></div>
            <input type="text" name="date" placeholder="MM/Y"><br><br>

            <div style="margin-left: 25px;">CVC:<br></div>
            <input type="text" name="cvc" placeholder="***"><br><br>

            <div style="margin-left: 25px;">Name on Card:<br></div>
            <input type="text" name="name" placeholder="eg. First Last"><br><br>
        </div>
        </div>        
    </form>                              
</div>

<!--Page wrapper-->
<div style=""></div>

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