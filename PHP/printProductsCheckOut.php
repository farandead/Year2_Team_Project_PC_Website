<?php
$sqlPrL="SELECT * FROM Linked_Order_and_Products WHERE  Order_ID ='$orderID'";
  $queryPrL=mysqli_query($conn, $sqlPrL);
while($row=mysqli_fetch_assoc($query)){
  $prodid=$row['Product_ID'];
$sqlPr="SELECT * FROM Linked_Order_and_Products WHERE  Product_ID ='$prodid'";
$queryPr=mysqli_query($conn, $sqlPr);
  $productinfo=mysqli_fetch_assoc($queryPr);
  echo $productinfo['Product_ID'];

}



?>
