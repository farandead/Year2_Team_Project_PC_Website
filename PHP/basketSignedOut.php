<?php
ob_start();
//if(!isset($_COOKIE["Basket"])){setcookie("Basket","");}

//$_COOKIE["Basket"]="8,1;2,3;";
$product="2";
$IsThere=false;

if(isset($_COOKIE["BasketCompUK"])){
$BasketStr= $_COOKIE["BasketCompUK"];

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
  setcookie("BasketCompUK","",time() + 2 * 24 * 60 * 60);
  
}

if(!$IsThere){
 $update=$_COOKIE["BasketCompUK"].$product.",1;";
  setcookie("BasketCompUK",$update,time() + 2 * 24 * 60 * 60);
}

echo "BasketCompUK: ";
echo $_COOKIE["BasketCompUK"];


?>
