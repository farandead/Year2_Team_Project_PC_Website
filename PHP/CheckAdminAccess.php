<?php

session_start();


if(isset($_SESSION['User_Status'])){
$status=$_SESSION['User_Status'];}else{$status=null;}


if(!($status=="Admin")){
header("Location: index.php");
}


?>
