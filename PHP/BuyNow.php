<?php
if(isset($_GET['Product']) and isset($_POST['buy'])){
$product=$_GET['Product'];
  echo $_POST['id']."<br>";echo $_POST['price'];
echo "yes";
}else{echo "no";}

?>
