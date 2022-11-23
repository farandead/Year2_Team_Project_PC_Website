<?php
ob_start();

echo $_GET["ITR"]." \ ";
if(isset($_COOKIE["BasketCompUK"])){
  
$bas=$_COOKIE["BasketCompUK"];
echo $bas;
  
  $bas=preg_replace("/10,[1-9]+;/","",$bas);
  echo " After:";
  echo $bas;
  
  
  setcookie("BasketCompUK",$bas,time() + 2 * 24 * 60 * 60,"/","comp-uk.motorsfeere.com",true);
  //$_COOKIE["BasketCompUK"]=$bas;
 
}

header("Location: ShoppingCart.php");

?>
