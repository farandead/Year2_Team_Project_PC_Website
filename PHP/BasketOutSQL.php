<?php

$BasketStr= $_COOKIE["BasketCompUK"];

$items="";

$arrayStringBasket=  explode(";", $BasketStr );


for($i=0;$i<Count($arrayStringBasket);$i++){
$ArrayCollectionBasket=explode(",", $arrayStringBasket[$i] );
  $ArrayCollectionBasketDic=array($ArrayCollectionBasket[0]=>$ArrayCollectionBasket[1]);
  
  if($i==0){ $items=$items."Product_ID='".$ArrayCollectionBasket[0]."'";}else{
   $items=$items." OR Product_ID='".$ArrayCollectionBasket[0]."'";
  }
  
  
}

echo $items;

 $queryPr=mysqli_query($conn,"SELECT * FROM Product WHERE ".$items."");
  $res=mysqli_fetch_assoc($queryPr);

?>
