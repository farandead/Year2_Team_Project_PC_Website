<?php
ob_start();
if(isset($_POST['buyB'])){
echo "1";
}elseif(isset($_POST['Cancel'])){echo "2";
                                 
 $idor=$_POST['id'];          


  $sqlBuyNow = "UPDATE OrderP SET 	Order_Status='InProcess' WHERE Order_ID=$idor";

if ($conn->query($sqlBuyNow) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
  
          
    header("Location: ../ShoppingCart.php");                             
                                 
                                 
}else{
header("Location: ../index.php");
}


?>
