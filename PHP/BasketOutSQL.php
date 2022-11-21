<?php

$BasketStr= $_COOKIE["BasketCompUK"];

$items="";

$arrayStringBasket=  explode(";", $BasketStr );


for($i=0;$i<Count($arrayStringBasket);$i++){
$ArrayCollectionBasket=explode(",", $arrayStringBasket[$i] );
  $ArrayCollectionBasketDic=array($ArrayCollectionBasket[0]=>$ArrayCollectionBasket[1]);
  $items=$items.$ArrayCollectionBasket[0];
  
}

echo $items;

 $queryPr=mysqli_query($conn,"SELECT * FROM Product WHERE Product_ID='$product'");
  $res=mysqli_fetch_assoc($queryPr);

?>
