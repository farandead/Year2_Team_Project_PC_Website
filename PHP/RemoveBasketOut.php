<?php

echo $_GET["ITR"]." \ ";
if(isset($_COOKIE["BasketCompUK"])){
  
$bas=$_COOKIE["BasketCompUK"];
echo $bas;
  
  $bas=preg_replace("/10,[1-9]+;/","",$bas);
  echo " After:";
  echo $bas;
  
  $_COOKIE["BasketCompUK"]=echo $bas;
}


?>
