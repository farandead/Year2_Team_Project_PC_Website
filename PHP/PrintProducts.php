<?php
require "connect_db.php";




$sql = "SELECT Product_Name FROM Product";


$query=mysqli_query($conn,"SELECT Product_Name FROM Product");

while($row=mysqli_fetch_assoc($query)){
  echo "test".$row['Product_Name']."test";
}
?>
