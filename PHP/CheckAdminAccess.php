<?php

session_start();
require "connect_db.php";
$idu=$_SESSION['User_ID'];
$sqlAdminS="SELECT User_Status FROM account WHERE User_ID=$idu";
$resultF = $conn->query($sqlAdminS);
$INFO = $resultF->fetch_assoc()

if(isset($INFO['User_Status'])){
$status=$INFO['User_Status'];}else{$status=null;}


if(!($status=="Admin")){
header("Location: index.php");
}


?>
