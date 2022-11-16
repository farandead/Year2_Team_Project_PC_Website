<?php
if($status=="Admin")
if($view!=1){
//change to 1
 $CATT= $_GET["Category"];
  $link="product_page.php?Category=".$CATT."&AdminView=1";
}
else{
//change to 0
   $link="product_page.php?Category=".$CATT."";
}

if($view==1){
  // echo add buton
  echo "<a href=''>add </a>";
}
echo "<a href='".$link."'>change view</a>";
?>
