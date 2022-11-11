<?php
//SQL TO ACCESS THE INPUT PRODUCT AND COLLECT THE DATA INTO AN ARRAY

$product=$_GET["Product"];  

  $queryPr=mysqli_query($conn,"SELECT * FROM Product WHERE Product_ID='$product'");
  $res=mysqli_fetch_assoc($queryPr);

if($res!=null){
$Product_ID=$res["Product_ID"];
  $Man_ID=$res["Man_ID"];
  $queryPr2=mysqli_query($conn,"SELECT * FROM Manufacture WHERE Man_ID='$Man_ID'");
  $res2=mysqli_fetch_assoc($queryPr2);
}
else{$Product_ID=null;
     header('Location: index.php');
}
?>
