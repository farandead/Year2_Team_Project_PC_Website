<?php
require "CheckAdminAccess.php";

ob_start();
if(isset($_POST['submitEmail'])){
  echo "Yes:";
$email=$_POST['em'];
$id=base64_decode($_GET['ID']);
  require "connect_db.php";
  
  
   $sql = "SELECT FROM account WHERE user_Email= '$email'";
        if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo "The total number of rows are: ".$rowcount; 
}
  
  if($rowcount>0){
  $sql = "UPDATE account SET user_Email='$email' WHERE 	User_ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  }
  else{
  echo "Email is already used!";
  }
   $conn  -> close();
  
}
else{
header("Location: accounts_base_page.php");
}

?>
