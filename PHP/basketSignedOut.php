<?php
$_COOKIE["Basket"]="8,1;2,3;";
$product="8";

if(isset($_COOKIE["Basket"])){
$BasketStr= $_COOKIE["Basket"];

$arrayStringBasket=  explode(";", $BasketStr );


for($i=0;$i<Count($arrayStringBasket);$i++){
$ArrayCollectionBasket[$i]=explode(",", $arrayStringBasket[$i] );
  
  
  if($ArrayCollectionBasket[$i][0]==$product){
 echo $ArrayCollectionBasket[$i][0];
  break;
 }
  
  
}

echo "Done1";
}else{
echo "empty";
}

?>
