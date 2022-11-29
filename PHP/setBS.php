<?php


  $sqlBuyNow = "UPDATE OrderP SET 	Order_Status='BuyNow' WHERE Order_ID=$idor";

if ($conn->query($sqlBuyNow) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  
  ?>
