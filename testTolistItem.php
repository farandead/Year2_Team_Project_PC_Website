<?php
require "PHP/connect_db.php";
$sql="SELECT * FROM Linked_Order_and_Products WHERE 	Order_ID=10";
$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query)){
$productID=$row['Product_ID'];
$sql2="SELECT * FROM Product WHERE 	Product_ID=$productID";
$query2=mysqli_query($conn, $sql2);
 $productinfo=mysqli_fetch_assoc($query2);
  echo "Amount:".$row['Amount_Product']."<br>";
  echo "Name:".$productinfo['Product_Name']."<br>";
}
?>
