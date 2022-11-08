<?php
require "connect_db.php";

$sql = "SELECT Product_Name FROM Product";
$query=mysqli_query($conn,"SELECT * FROM Product");

while($row=mysqli_fetch_assoc($query)){
  require "TemplateProduct.php";
}
?>
