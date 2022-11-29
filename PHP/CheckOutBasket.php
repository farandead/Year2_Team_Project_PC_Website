<?php
if(isset($_POST['Update'])){
echo "Update";
  require "connect_db.php";
  $idor=$_POST['idor'];
  $sql="SELECT * FROM Linked_Order_and_Products WHERE  Order_ID ='$idor'";
  $query=mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($query)){
$PRid=$row['Product_ID'];
$amount=$_POST[$PRid];
$sqlUp = "UPDATE Linked_Order_and_Products SET 	Amount_Product='$amount' WHERE Order_ID ='$idor' AND Product_ID='$PRid'";

if ($conn->query($sqlUp) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


}
  
}
if(isset($_POST['CheckOut'])){
echo "CheckOut";
}
?>
