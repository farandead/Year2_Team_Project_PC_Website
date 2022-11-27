<?php
ob_start();
session_start();
print_r ($_SESSION,true);
  
if(isset($_SESSION['User_Status'])){
  require "basketSignedIn.php";
  //echo "Signed In!";
}
else{
  require "basketSignedOut.php";
}
header("location: ../ShoppingCart.php");
?>
