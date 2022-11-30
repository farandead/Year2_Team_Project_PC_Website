<?php
if(isset($_POST['Remove']) or isset($_POST['deafault']))
ob_start();session_start();require "connect_db.php";
if(isset($_POST['Remove'])){
  $changeTo= "Hidden";
 // echo "Remove";
  
}
elseif(isset($_POST['deafault'])){
  
  $userID=$_SESSION['User_ID'];
  $sql="SELECT * FROM Delivery_address WHERE User_ID='$userID' AND 	Address_Status='Default'";
  $query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($query)){
$ADID=$row['Address_ID'];
  
  
  $sqlUP = "UPDATE Delivery_address SET Address_Status='Accessible' WHERE Address_ID=$ADID";

if ($conn->query($sqlUP) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


}
   $changeTo= "Default";
//echo "update";
}


  $sqlUPS = "UPDATE Delivery_address SET Address_Status='$changeTo' WHERE Address_ID=$ADID";

if ($conn->query($sqlUPS) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}




}

?>
