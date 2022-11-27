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
    
      $result=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($result);
    
  }
  

  
    if($rowcount==1){
    $result2=mysqli_query($conn,$sql);
      $ROWLINK=mysqli_fetch_assoc($result2);
      
     $GetPrice=$ROWLINK['Total_Price'];
      $GetOrderID=$ROWLINK['Order_ID'];
      
      
      echo "yes!!!!!".$GetPrice;//of total
      
      $sqlPriceProduct="SELECT * FROM Product WHERE Product_ID=$product";
      $resultPr=mysqli_query($conn,$sqlPriceProduct);
      $ROWPr=mysqli_fetch_assoc($resultPr);
      
      
      $price=round($ROWPr['Product_Price']-$ROWPr['Product_Price']*$ROWPr['Product_Discount']/100,2);
      
      echo "Price: ".$price;//of one
      
 
      
      
      $sqlIfthere="SELECT * FROM Linked_Order_and_Products WHERE Product_ID=$product and Order_ID=$GetOrderID ";
      $resOfsqlIfthere=mysqli_query($conn,$sqlIfthere);
       $ROWsofIfthere=mysqli_fetch_assoc($resOfsqlIfthere);
       $rowcountIfthere=mysqli_num_rows($ROWsofIfthere);
      if(!isset($rowcountIfthere)){$rowcountIfthere=0;}
      
      
      if($rowcountIfthere==0){
      
          $sqlNewLink = "INSERT INTO Linked_Order_and_Products (Amount_Product, Product_ID, Order_ID)
VALUES ('1', '$product', '$GetOrderID')";

if ($conn->query($sqlNewLink) === TRUE) {
  echo "New record created successfully";
  
  
  $UPprice=$price+$GetPrice;
  $sqlUpPr = "UPDATE OrderP SET Total_Price='$UPprice' WHERE Order_ID= $GetOrderID";

if ($conn->query($sqlUpPr) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  
  
  
  
  
} else {
  echo "Error: " . $sqlNewLink . "<br>" . $conn->error;
}
      
      
      
      }    
      
      
      
      
    }else{echo "Number is wrong!";}
  
  
}else{
 //$rowcount=mysqli_num_rows($result);
  

}
  
}
?>
