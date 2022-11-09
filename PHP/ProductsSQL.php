<?php
$queryCat=mysqli_query($conn,"SELECT Cat_ID FROM Category WHERE Cat_Name='$category'");
$res=mysqli_fetch_assoc($queryCat);

if($res!=null){
$Cat_ID=$res["Cat_ID"];}
else{$Cat_ID=null;
}

$query=mysqli_query($conn,"SELECT * FROM Product WHERE Cat_ID='$Cat_ID'");

$template= "TemplateProduct.php";

?>
