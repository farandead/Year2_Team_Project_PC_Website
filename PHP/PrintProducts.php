<?php
require "connect_db.php";

$queryCat=mysqli_query($conn,"SELECT Cat_ID FROM Category WHERE Cat_Name='$category'");
$res=mysqli_fetch_assoc($queryCat);

if($res!=null){
$Cat_ID=$res["Cat_ID"];}
else{$Cat_ID=null;
}

$query=mysqli_query($conn,"SELECT * FROM Product WHERE Cat_ID='$Cat_ID'");

$template= "TemplateProduct.php";




$isEmpty=true;
$counter=0;

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
      echo "<br>";
  echo "<br>";
  }
}
if($isEmpty==true){
echo "<h2>There are no products.</h2>";
}
if($isEmpty==true or $counter!=0){
  echo "</div>";
  echo "<br>";
  echo "<br>";
}
?>
