<?php
$_COOKIE["Basket"]="8,1;2,3;";

$BasketStr= $_COOKIE["Basket"];

$arrayStringBasket=  explode(";", $BasketStr );

$i=-1;
while($arrayStringBasket){
echo $arrayStringBasket[$i++]
}

?>
