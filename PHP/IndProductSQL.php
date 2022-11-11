<?php
//SQL TO ACCESS THE INPUT PRODUCT AND COLLECT THE DATA INTO AN ARRAY

$product=$_GET["Product"];  

  $queryPr=mysqli_query($conn,"SELECT * FROM Product WHERE Product_ID='$product'");
  $res=mysqli_fetch_assoc($queryPr);

if($res!=null){
$Product_ID=$res["Cat_ID"];}
else{$Product_ID=null;
}
?>
