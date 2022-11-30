<?php
if(isset($_POST['AddAddress'])){
 session_start();
 ob_start();
  require "connect_db.php";
 
  $userID=$_SESSION['User_ID'];
  $ZIP=$_POST['ZIP'];
  $City=$_POST['City'];
  $Country=$_POST['Country'];
  $Street=$_POST['Street'];
    
 $sql = "INSERT INTO Delivery_address(ZIP, City, Country,Street,	Address_Status,User_ID)
VALUES ('$ZIP', '$City', '$Country','$Street','Accessible','$userID')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}
header("Location:../userprofile.php");


?>
