<?php

session_start();


if(isset($_SESSION['User_Status'])){
$status=$_SESSION['User_Status'];}else{$status=null;}

if(isset($_GET["AdminView"])){
$view=$_GET["AdminView"];}else{$view=0;}

?>
