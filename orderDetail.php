<?php 
session_start();
 $servername = "localhost";
$username = 'babimors_astonTeam';
$password = 'HW#1o.5=#cl+'; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=babimors_compuk", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
} catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}
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


<!-- <div class="shopping-box">
    <div class="shopping_con">
        <div class="shopping_title">ORDER DETAIL</div> 
        <div class="">
             <form action ="PHP/CheckOutBasket.php" method="post">
        <?php
                 //if(isset($_SESSION['User_Status'])){echo '<input type="submit" name="Update" value="Update the basket">';echo '<input type="submit" name="CheckOut" value="Check out!">';}
                 //else{echo "no";}
         
                 
   include "PHP/BasketCollectionPrinter.php";
                 if(isset($_SESSION['login'])){
                 $orderID=$_GET['orderId'];
    require "PHP/TotalPriceCounter.php";
                 
                 if(isset($TOTAL)){echo "Total: £ ". $TOTAL;}}
    ?>
            
         </form> -->
    
   <?php  
    
                $OrderID = $_GET['orderId'];    
                $sql = "SELECT * FROM Linked_Order_and_Products WHERE Order_ID = ? ";
                $result_ProductOfOrderID = $conn->prepare($sql);
                $result_ProductOfOrderID->execute(array($OrderID));  /* $_SESSION['User_ID']*/
                $count_ProductOfOrderID = $result_ProductOfOrderID->rowCount();
                $resProductOfOrderID = $result_ProductOfOrderID->fetch(PDO::FETCH_ASSOC);
              
              while($resProductOfOrderID = $result_ProductOfOrderID->fetch(PDO::FETCH_ASSOC)) {
    
                $ProductID = "15";
                $sql = "SELECT * FROM Product WHERE Product_ID = ? ";
                $result_Product = $conn->prepare($sql);
                $result_Product->execute(array($ProductID));  /* $_SESSION['User_ID']*/
                $count_Product = $result_Product->rowCount();
                $resProduct = $result_Product->fetch(PDO::FETCH_ASSOC);
              $var_dump($count_Product);
    while($row = $result_Product->fetch(PDO::FETCH_ASSOC)) {
    
//$lines= file("Products/PreDescription/".$row['Product_ID'].".txt");
$price=round($row['Product_Price']-$row['Product_Price']*$row['Product_Discount']/100,2);
echo "<div class=\"devices-sub-container-product\">
                        <div class=\"productdetails dark_target\">
                            <div class=\"product-details-title\">".$row['Product_Name']."</div>
                            <div class=\"product-details-img\"><img src=\"../Products/Images/".$row['Product_ID'].".jpg\"  width=\"150 px\" height=\"150px\" alt=\"No image\">
                            </div>
                            <div class=\"product-details-description dark_target\">
                                <p>Price: <span>".$price."£</span> ";
                                if($row['Product_Discount']!=0){
                               echo ",discount is ".$row['Product_Discount']."% (<s>".$row['Product_Price']."£</s>)";
                                }
                                echo "
                                </p>
                                <ul class=\"description-ulisted\">";
                                
//foreach($lines as $line){   
//echo $ArrayCollectionBasketDic[$row['Product_ID']];
                                   echo " <li class=\"description-ulisted-item\"> <h3>Quantity:</h3><h4><input type=\"number\" value=\"".$ArrayCollectionBasketDic[$row['Product_ID']]."\" id=\"quantity\" name=\"".$row['Product_ID']."\" min=\"1\" max=\"5\"></h4>"."</li>";
//}
if(isset($_SESSION['User_Status'])){$DeleteLink="PHP/RemoveBasketIn.php?ITR=";
}else{$DeleteLink="PHP/RemoveBasketOut.php?ITR=";
}
// <button> does not work due to the form!
                               echo "     
                                </ul>
                            </div>
                            <div class=\"product-details-buy-buttons\">
                               <a href='Product_Description.php?Product=".$row['Product_ID']."'> LOOK UP THIS ITEM ></a>
                            </div>
  <div class=\"product-details-buy-buttons\">
                               <a href='".$DeleteLink.$row['Product_ID']."'> REMOVE THIS ITEM ></a>
                            </div>";

echo "
      
                        </div>
                    </div>";
    }
}

?>
            
            
            
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
