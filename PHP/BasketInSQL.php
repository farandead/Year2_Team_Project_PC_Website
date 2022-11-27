<?php
$id=29;//$_SESSION['User_ID'];
$template= "TemplateProductBasket.php";
$items="";

$sqlBas = "SELECT * FROM OrderP WHERE User_ID=$id and Order_Status='Basket'";
if ($resultBas=mysqli_query($conn,$sqlBas)) {
    $rowcount=mysqli_num_rows($resultBas);
    if($rowcount==1){
    $idOrder=$resultBas['Order_ID'];
        $sqlOrder = "SELECT * FROM Linked_Order_and_Products WHERE Order_ID=$idOrder";
        $resultBasPr=mysqli_query($conn,$sqlOrder);
        $rowcount2=mysqli_num_rows($resultBasPr);
        if($rowcount2>0){
        echo "Good!";
        }else{
        echo "Basket is empty";
        }
        
        
        
      echo "yes";
    }else{
    echo "Something is wrong!";
    }
}else{
echo "Currently empty";
}

?>
