<?php

$isEmpty=true;
$counter=0;
error_reporting(0);
while($row=mysqli_fetch_assoc($query)){
  
  $isEmpty=false;
  
  if($counter==0){
    echo " <div class=\"devices-sub-container\">";
  }
  
  require $template;
  
  $counter=$counter+1;
  
  if($counter==3){
    $counter=0;
     echo "</div>";
     // echo "<br>";

  }
}
if($isEmpty==true){
echo "<h2>There are no products.</h2>";
}
if($isEmpty==true or $counter!=0){
  echo "</div>";
  //echo "<br>";
 
}
error_reporting(1);
echo "<br>";
echo "<br>";
?>
