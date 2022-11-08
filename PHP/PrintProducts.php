<?php
require "connect_db.php";

$sql = "SELECT Product_Name FROM Product";
$query=mysqli_query($conn,"SELECT * FROM Product");

$isEmpty=true;
$counter=0;

while($row=mysqli_fetch_assoc($query)){
  
  $isEmpty=false;
  
  if($counter==0){
    echo " <div class=\"devices-sub-container\">";
  }
  
  require "TemplateProduct.php";
  
  $counter=$counter+1;
  
  if($counter==3){
    $counter=0;
     echo "</div>";
  }
}
if($isEmpty==true or $counter!=0){
  echo "</div>";
}
?>
