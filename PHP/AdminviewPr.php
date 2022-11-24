<?php
$linkToAdd="AddProductAdminPanel.php";


if($status=="Admin"){
 
 $CATT=$_GET["Category"];

if($view!=1){
//change to 1
  $link="product_page.php?Category=".$CATT."&AdminView=1";
}
else{
//change to 0
   $link="product_page.php?Category=".$CATT."";
}

if($view==1){
  // echo add buton
  echo "<a href='".$linkToAdd."'>add </a>";
}
echo "<a href='".$link."'>change view</a>";
}
?>
