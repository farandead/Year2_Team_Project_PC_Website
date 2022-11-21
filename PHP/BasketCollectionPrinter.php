<?php
if(isset($_SESSION['User_Status'])){
  
}else{
if(isset($_COOKIE["BasketCompUK"])){
if($_COOKIE["BasketCompUK"]!=""){
echo "Products";
}else{
  echo "No products";}
}
  else{
  echo "No products";
  }

}

?>
