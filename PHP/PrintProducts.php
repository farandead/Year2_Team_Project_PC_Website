<?php
require "connect_db.php";

$queryCat=mysqli_query($conn,"SELECT Cat_ID FROM Category WHERE Cat_Name='$category'");

$query=mysqli_query($conn,"SELECT * FROM Product WHERE Cat_ID='$queryCat'");

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
      echo "<br>";
  echo "<br>";
  }
}
if($isEmpty==true or $counter!=0){
  echo "</div>";
  echo "<br>";
  echo "<br>";
}
?>
