<?php
//$_COOKIE["Basket"]="8,1;2,3;";


if(isset($_COOKIE["Basket"])){
$BasketStr= $_COOKIE["Basket"];

$arrayStringBasket=  explode(";", $BasketStr );


for($i=0;$i<Count($arrayStringBasket);$i++){
$ArrayCollectionBasket[$i]=explode(",", $arrayStringBasket[$i] );
  
 echo $ArrayCollectionBasket[$i][0];
  echo "<br>";
}

echo "Done1";
}else{
echo "empty";
}

?>
