<?php
if(isset($_POST['buy'])){
ob_start();
 session_start();
  require "connect_db.php";
$idPr= $_POST['id'];
$Price= $_POST['price'];
$User=$SESSION['User_ID'];
  
  $sql = "INSERT INTO OrderP (Order_Status, Total_Price, User_ID)
VALUES ('BuyNow', '$Price', '$User')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  
$sqlIDO = "SELECT Order_ID FROM OrderP WHERE User_ID=$User AND Order_Status= 'BuyNow'";
if ($resultIDO=mysqli_query($conn,$sqlIDO)) {
    $rowcount=mysqli_num_rows($resultIDO);
    if($rowcount=1){
    $IDorder=mysqli_fetch_assoc($resultIDO);
        
      
      
      
      echo "Yes";
      
      
      
    }
    else{echo "Failed";}
}else{echo "Failed";}
  
  
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  
echo "yes";
}else{echo "no";}

?>
