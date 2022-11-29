<?php
$sqlPrL="SELECT * FROM Linked_Order_and_Products WHERE  Order_ID ='$orderID'";
  $queryPrL=mysqli_query($conn, $sqlPrL);
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



?>
