<?php
require "CheckAdminAccess.php";

ob_start();
if(isset($_POST['submitEmail'])){
  echo "Yes:";
$email=$_POST['em'];
$id=base64_decode($_GET['ID']);
  require "connect_db.php";
  
  $sql = "UPDATE account SET user_Email='$email' WHERE 	User_ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  
   $conn  -> close();
  
}
else{
header("Location: accounts_base_page.php");
}

?>
