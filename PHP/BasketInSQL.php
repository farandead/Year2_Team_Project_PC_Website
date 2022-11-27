<?php
$id=29;//$_SESSION['User_ID'];
$template= "TemplateProductBasket.php";
$items="";

$sqlBas = "SELECT * FROM OrderP WHERE User_ID=$id and Order_Status='Basket'";
if ($resultBas=mysqli_query($conn,$sqlBas)) {
    $rowcount=mysqli_num_rows($resultBas);
    if($rowcount==1){
    
      echo "yes";
    }else{
    echo "Something is wrong!";
    }
}else{
echo "Currently empty";
}

?>
