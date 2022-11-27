<?php
ob_start();
session_start();


if(isset($_GET['ITR'] and isset($_SESSION['User_ID']))){
  $item=$_GET['ITR'];
  $id=$_SESSION['User_ID'];
  
  require "connect_db.php";
  
  
  
  
  
  
  
  $sqlBas = "SELECT * FROM OrderP WHERE User_ID=$id and Order_Status='Basket'";
if ($resultBas=mysqli_query($conn,$sqlBas)) {
    $rowcount=mysqli_num_rows($resultBas);
    if($rowcount==1){
    $RowBas=mysqli_fetch_array($resultBas);
         $idOrder=$RowBas['Order_ID'];

    }else{echo "Something is wrong!";}
    }else{echo "No such item";}
  
  
  
  
  
  
  
      $sql = "DELETE FROM Linked_Order_and_Products WHERE Product_ID='$item' and Order_ID='$idOrder' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
  
}

header("Location: ../ShoppingCart.php");

?>
