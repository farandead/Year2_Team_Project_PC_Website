<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        body {
            margin: 0%;
            padding: 0%;
            font-family: "Arial", Helvetica, sans-serif;
        }

        i {
            font-size: 30px;
            cursor: pointer;
            position: relative;
        ;
        }
    </style>
    <link rel="stylesheet" href="css/shopping.css">
    <link rel="stylesheet" href="css/mainpage.css">
</head>
<body>
    
    <?php require 'header.php'; ?>


<div class="shopping-box">
    <div class="shopping_con">
        <div class="shopping_title">PRODUCT LIST</div>
        <div class="">
             <form action ="PHP/CheckOutBasket.php" method="post">
        <?php
                 if(isset($_SESSION['User_Status'])){echo '<input type="submit" name="Update" value="Update the basket">';echo '<input type="submit" name="CheckOut" value="Check out!">';}
                 else{echo "no";}
                 
                 
   include "PHP/BasketCollectionPrinter.php";
                 $orderID=$idOrder;
    require "PHP/TotalPriceCounter.php";
    ?>
            
         </form>
            
            
            
        </div>
    </div>
</div>
<div class="shoppCarImg"><img src="img/car.png"/></div>
<div class="shopCarMark">
    <div class="shopCarMark_con">

    </div>
    <div class="Total">Total price: $ <span class="priceT"></span></div>
    <div class="bottom_btn">
        <div class="close">Close</div>
        <div class="pay">Pay</div>
    </div>

</div>
<?php require 'footer.php'; ?>
<script src="js/shopping.js"></script>

</body>
</html>
