<?php
if(isset($_POST['buy'])){
ob_start();
 session_start();
  require "connect_db.php";
$idPr= $_POST['id'];
$Price= $_POST['price'];
$User=$_SESSION['User_ID'];
  
  $sql = "INSERT INTO OrderP (Order_Status, Total_Price, User_ID)
VALUES ('BuyNow', '$Price', '$User')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
$sqlIDO = "SELECT Order_ID FROM OrderP WHERE User_ID=$User AND Order_Status= 'BuyNow'";
if ($resultIDO=mysqli_query($conn,$sqlIDO)) {
    $rowcount=mysqli_num_rows($resultIDO);
    if($rowcount=1){
    $IDorder=mysqli_fetch_assoc($resultIDO);
        $IDorder=$IDorder['Order_ID'];
      
      
      
    $sqlinso = "INSERT INTO Linked_Order_and_Products (Amount_Product, Product_ID, Order_ID)
VALUES ('1', '$idPr', '$IDorder')";

if ($conn->query($sqlinso) === TRUE) {
  echo "New record created successfully";
 
 
 $sqlUPORDER = "UPDATE OrderP SET Order_Status='InProcess' WHERE 	Order_ID=$IDorder";

if ($conn->query($sqlUPORDER) === TRUE) {
  echo "Record updated successfully";
 
 //ADD ADDRESS+++++++++++++++++++++
 $addressToD=$_POST['addresses'];
 $sqlLinkAdOrd = "INSERT INTO Linked_Address_and_Order (Order_ID, Address_ID)
VALUES ('$IDorder', '$addressToD')";

if ($conn->query($sqlLinkAdOrd) === TRUE) {
  echo "New record created successfully";
 //header("Location: ../userprofile.php");
 //GO TO PROFILE PAGE!!!!!!!!!
} else {
  echo "Error: " . $sqlLinkAdOrd . "<br>" . $conn->error;
}
 
 
 
 
 
 
 
} else {
  echo "Error updating record: " . $conn->error;
}
 
 
 
 
} else {
  echo "Error: " . $sqlinso . "<br>" . $conn->error;
}
      
      
      
    }
    else{echo "Failed";}
}else{echo "Failed";}
  
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  
echo "yes";
}else{header("Location:../index.php");}

?>
