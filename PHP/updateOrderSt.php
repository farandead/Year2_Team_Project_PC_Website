<?php
ob_start();
if(isset($_POST['updateStO'])){
$OrderID= base64_decode($_GET['OI']);
$Status=$_POsT['Statuses'];
  echo $OrderID;
  echo $Status;
  
 require "connect_db.php";
  
}
?>
