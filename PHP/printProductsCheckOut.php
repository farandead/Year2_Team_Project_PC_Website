<?php
$sqlPrL="SELECT * FROM Linked_Order_and_Products WHERE  Order_ID ='$orderID'";
  $queryPrL=mysqli_query($conn, $sqlPrL);

$sqlPrice="SELECT Total_Price FROM OrderP WHERE  Order_ID ='$orderID'";
  $queryPrice=mysqli_query($conn, $sqlPrice);
$fpr=mysqli_fetch_assoc($queryPrice);
$total=$fpr['Total_Price'];
while($row=mysqli_fetch_assoc($queryPrL)){

  
  $prodid=$row['Product_ID'];
$sqlPr="SELECT * FROM Product WHERE  Product_ID ='$prodid'";
$queryPr=mysqli_query($conn, $sqlPr);
  $productinfo=mysqli_fetch_assoc($queryPr);
  
    
  $price=round($productinfo['Product_Price']-$productinfo['Product_Price']*$productinfo['Product_Discount']/100,2);
  $priceForAmount=$price*$row['Amount_Product'];
  
  
  echo $productinfo['Product_Name']."(x".$row['Amount_Product'].")    =£". $priceForAmount;
  echo "<br>";

}
echo "<br>";
echo "<h5>Total(£): ".$total."</h5>";



?>
