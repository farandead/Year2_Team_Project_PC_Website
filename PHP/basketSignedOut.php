<?php
//$_COOKIE["Basket"]="8,1;2,3;";
$product="18";
$IsThere=false;

if(isset($_COOKIE["Basket"])){
$BasketStr= $_COOKIE["Basket"];

$arrayStringBasket=  explode(";", $BasketStr );


for($i=0;$i<Count($arrayStringBasket);$i++){
$ArrayCollectionBasket[$i]=explode(",", $arrayStringBasket[$i] );
  
  
  if($ArrayCollectionBasket[$i][0]==$product){
    
    echo "Found: ";
 echo $ArrayCollectionBasket[$i][0];
    $IsThere=true;
  break;
 }
  
}

}else{
echo "empty";
  $_COOKIE["Basket"]="";
}

if(!$IsThere){
  $_COOKIE["Basket"]=$_COOKIE["Basket"].$product.",1;";
}

echo "Basket: ";
echo $_COOKIE["Basket"];


?>
