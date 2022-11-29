<?php
require "CheckAdminAccess.php";
if(isset($_GET['a']) and isset($_GET['who'])){
  ob_start();
require "connect_db.php";
 $userID=base64_decode($_GET['who']);
 if($_GET['a']==1){$status="Admin";
 }else{$status="Customer";
 }
  
  
  $sql = "UPDATE account SET User_Status='$status' WHERE User_ID=$userID";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
  
  
  
}
//header("Location: ../accept_admin_page.php");

?>
