<?php

$BasketStr= $_COOKIE["BasketCompUK"];

$items="";
$template= "TemplateProductBasket.php";

$arrayStringBasket=  explode(";", $BasketStr );

$ArrayCollectionBasketDic=array();

for($i=0;$i<Count($arrayStringBasket)-1;$i++){
$ArrayCollectionBasket=explode(",", $arrayStringBasket[$i] );
  $ArrayCollectionBasketDic=array($ArrayCollectionBasket[0]=>$ArrayCollectionBasket[1]);
  
  if($i==0){ $items=$items."Product_ID='".$ArrayCollectionBasket[0]."'";}else{
   $items=$items." OR Product_ID='".$ArrayCollectionBasket[0]."'";
  }
  
  
}

//echo $items;

 $query=mysqli_query($conn,"SELECT * FROM Product WHERE ".$items."");
 // $res=mysqli_fetch_assoc($query);

?>
