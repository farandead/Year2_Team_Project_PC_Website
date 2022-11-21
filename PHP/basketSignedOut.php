<?php
$_COOKIE["Basket"]="8,1;2,3;";

$BasketStr= $_COOKIE["Basket"];

$arrayStringBasket=  explode(";", $BasketStr );

print_r($arrayStringBasket);
?>
