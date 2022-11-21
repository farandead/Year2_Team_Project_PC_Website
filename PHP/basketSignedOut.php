<?php
$_COOKIE["Basket"]="8,1;2,3;";

$BasketStr= $_COOKIE["Basket"];

$arrayStringBasket=  explode(";", $BasketStr );


for($i=0;$i<Count($arrayStringBasket);$i++){
$ArrayCollectionBasket[$i]=explode(",", $arrayStringBasket[$i] );
}

echo "Done!";

?>
