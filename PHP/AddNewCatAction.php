<?php
if (isset($_POST['submitCat'])){
   ob_start();

$name=$_POST['NameCat'];
  
 require "connect_db.php";
  
  //SQL to add a new Man
  
  
  $sql = "INSERT INTO Category (Cat_Name)
VALUES ('".$name."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location: ../AddProductAdminPanel.php");
?>
