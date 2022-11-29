<?php
$sqlPrL="SELECT * FROM Linked_Order_and_Products WHERE  Order_ID ='$orderID'";
  $queryPrL=mysqli_query($conn, $sqlPrL);
while($row=mysqli_fetch_assoc($queryPrL)){
  
  $price=round($row['Product_Price']-$row['Product_Price']*$row['Product_Discount']/100,2);
  $priceForAmount=$price*$row['Amount_Product'];
  
  $prodid=$row['Product_ID'];
$sqlPr="SELECT * FROM Linked_Order_and_Products WHERE  Product_ID ='$prodid'";
$queryPr=mysqli_query($conn, $sqlPr);
  $productinfo=mysqli_fetch_assoc($queryPr);
  echo $productinfo['Product_Name']."(x".$row['Amount_Product'].")    =£". $priceForAmount;
  echo "<br>";

}



?>
