<?php
$sqlPrLC="SELECT * FROM Linked_Order_and_Products WHERE  Order_ID ='$orderID'";
  $queryPrLC=mysqli_query($conn, $sqlPrLC);

$TOTAL=0;
while($row=mysqli_fetch_assoc($queryPrL)){
$prodid=$row['Product_ID'];
$sqlPr="SELECT * FROM Product WHERE  Product_ID ='$prodid'";
$queryPr=mysqli_query($conn, $sqlPr);
  $productinfo=mysqli_fetch_assoc($queryPr);
  
    
  $price=round($productinfo['Product_Price']-$productinfo['Product_Price']*$productinfo['Product_Discount']/100,2);
  $priceForAmount=$price*$row['Amount_Product'];

  $TOTAL=$TOTAL+$priceForAmount;
}



$sql = "UPDATE OrderP  SET Total_Price ='$TOTAL' WHERE Order_ID ='$orderID'";

if ($conn->query($sql) === TRUE) {
  //echo "Record updated successfully";
} else {
 // echo "Error updating record: " . $conn->error;
}


?>
