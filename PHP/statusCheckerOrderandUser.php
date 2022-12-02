<?php
//You need to start the sessrion before the require!
//You need to require connect_db.php before the doc!
//Put ob_start(); before this file
if(isset($_SESSION['User_ID'])){
$IDUser=$_SESSION['User_ID'];}else{header("Location: ../index.php");}
$IDOrder=$_GET['orderId'];

$SQLCHECK="SELECT * FROM OrderP WHERE User_ID=$IDUser and Order_ID=$IDOrder";
$resultCh=mysqli_query($conn,$SQLCHECK);

 $rowcount=mysqli_num_rows($resultCh);

if($rowcount!=1){header("Location: ../index.php");}


?>
