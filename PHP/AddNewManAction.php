<?php

if (isset($_POST['submit'])){
$link=$_POST['LinkMan'];
$name=$_POST['NameMan'];
  
 require "connect_db.php";
  
  //SQL to add a new Man
  
  
  $sql = "INSERT INTO Manufacture (Man_Name, Man_Link)
VALUES ('".$name."', '".$link."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  
}
header("Location: AddProductAdminPanel.php");

?>
