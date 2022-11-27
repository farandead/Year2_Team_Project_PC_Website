<?php

if(isset($_GET["product"])){
  session_start();
  
  
$product=$_GET["product"];
$IsThere=false;
$UserId=$_SESSION["User_ID"];
  
require "connect_db.php";
 
$sql = "SELECT * FROM OrderP WHERE 	User_ID='$UserId' and Order_Status='Basket'";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
 if($rowcount==0) {
  
    
    
    $sqlNewBas = "INSERT INTO OrderP (Order_Status, Total_Price, User_ID)
VALUES ('Basket', '0', '$UserId')";

if ($conn->query($sqlNewBas) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sqlNewBas . "<br>" . $conn->error;
}
    
    
    
  }
  
  $result=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($result);
  
    if($rowcount==1){
    $result2=mysqli_query($conn,$sql);
      
     // $sqlGetPrice=
      echo "yes!!!!!";
    
    }else{echo "Number is wrong!";}
  
  
}else{
 $rowcount=mysqli_num_rows($result);
  

}
  
}
?>
