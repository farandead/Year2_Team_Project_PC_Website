<?php
ob_start();session_start();
if(isset($_POST['buyB']) and isset($_SESSION['login'])){
$idor=$_POST['id'];
  $idad=$_POST['addresses'];
  
  require "connect_db.php";
      //link address and order
$sql = "INSERT INTO Linked_Address_and_Order (Order_ID, Address_ID)
VALUES ('$idor', '$idad')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}  
  
  
     //update status to inptocess
  $sql = "UPDATE OrderP SET Order_Status	='InProcess' WHERE Order_ID=$idor";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  header("Location:../userprofile.php");
  //go to profile page!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
  echo "done";
}else{
header("Location: ../index.php");
}


?>
