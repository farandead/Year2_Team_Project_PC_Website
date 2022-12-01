<?php 
session_start();
ob_start();
require "PHP/connect_db.php";
require "PHP/statusCheckerOrderandUser.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Detail </title>
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
  
    <link rel="stylesheet" href="css/shopping.css">
    <link rel="stylesheet" href="css/mainpage.css">
     <link rel="stylesheet" href="css/header.css">
</head>
<body>
    
    <?php require 'header.php'; ?>
 

 <div class="shopping-box">
    <div class="shopping_con">
        <div class="shopping_title">YOUR ORDER DETAILS</div> 
        <div class="">
            
    
   <?php  
         
      
         $Order_ID = $_GET['orderId'];
         $sql="SELECT * FROM Linked_Order_and_Products WHERE 	Order_ID=$Order_ID";
         $query=mysqli_query($conn, $sql);
 ?>
 <div class="devices-sub-container-product" >
   <?php            
              
 while($row=mysqli_fetch_assoc($query)) {
  
         $productID=$row['Product_ID'];
          
         $sql2="SELECT * FROM Product WHERE 	Product_ID=$productID";
         $query2=mysqli_query($conn, $sql2);
          $productinfo=mysqli_fetch_assoc($query2);

     $price=round($productinfo['Product_Price']-$productinfo['Product_Price']*$productinfo['Product_Discount']/100,2);
echo "
                        <div class=\"productdetails dark_target\" style=\"display : inline;\">
                            <div class=\"product-details-title\">".$productinfo['Product_Name'].'('.$row['Amount_Product'].')'."</div>
                            <div class=\"product-details-img\"><img src=\"../Products/Images/".$productinfo['Product_ID'].".jpg\"  width=\"150 px\" height=\"150px\" alt=\"No image\">
                            </div>
                            <div class=\"product-details-description dark_target\">
                                <p>Price: <span>£".$price."</span> ";
                                if($productinfo['Product_Discount']!=0){
                               echo ",discount is ".$productinfo['Product_Discount']."% (<s>£".$productinfo['Product_Price']."</s>)";
                                }
                                echo "
                                </p>
                                <ul class=\"description-ulisted\">";
                                

                               

echo " </div> ";
   
        
              }

?>
            
            </div>
            
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
