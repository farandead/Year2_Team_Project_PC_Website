<?php
if(isset($_POST['submitPrice'])){
  $ID= $_GET['Product'];
  $pr=$_POST['Price'];
  $ds=$_POST['Discount'];
  require "connect_db.php";
  
  $sql = "UPDATE Product SET Product_Price='$pr' WHERE Product_ID=$ID";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  
   $conn  -> close();
}


?>
