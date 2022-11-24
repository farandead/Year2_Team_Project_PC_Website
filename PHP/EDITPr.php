<?php
require "CheckAdminAccess.php";
if(isset($_GET['Product'])){
  require "connect_db.php";
  echo "yes";
  $ID=$_GET['Product'];
   $sql = "SELECT Product_Price, Product_Discount, Product_Name FROM Product WHERE Product_ID='$ID'";
  $q=mysqli_query($conn, $sql);
  $result=mysqli_fetch_array($q);
  $price=$result['Product_Price'];
  echo $price;
}

?>
