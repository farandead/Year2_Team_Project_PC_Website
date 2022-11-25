<?php
ob_start();
if(isset($_POST['submitEmail'])){
  echo "Yes:":
echo "<br>Email:".$_GET['EMAIL'];
  echo "<br>ID".$_GET['ID'];
}
else{
header("Location: accounts_base_page.php");
}

?>
