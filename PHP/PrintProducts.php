<?php
require "connect_db.php"
  
$test= "test";
echo .$test;
$sql = "SELECT Product_Name FROM Product";

$query=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query)){
  echo".$row['Product_Name']"
}
?>
