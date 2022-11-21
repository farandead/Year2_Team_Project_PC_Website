<?php
if(isset($_SESSION['User_Status'])){
  
}else{
if(isset($_COOKIE["BasketCompUK"])){
if($_COOKIE["BasketCompUK"]!=""){
echo "Products";
  
require "connect_db.php";
require "BasketOutSQL.php";
require "Printer.php";
  
}else{
  echo "No products2";}
}
  else{
  echo "No products1";
    print_r($_COOKIE,true);
  }

}

?>
