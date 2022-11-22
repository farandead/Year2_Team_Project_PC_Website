<?php
if(isset($_SESSION['User_Status'])){
  
}else{
if(isset($_COOKIE["BasketCompUK"])){
if($_COOKIE["BasketCompUK"]!=""){
//echo "Products";
  
require "connect_db.php";
require "BasketOutSQL.php";
require "Printer.php";
  
}else{
  echo "<h2>Basket is empty</h2>";}
}
  else{
  echo "<h2>Basket is empty</h2>";
    //echo json_encode($_COOKIE);
  }

}

?>
