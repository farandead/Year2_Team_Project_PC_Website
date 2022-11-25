<?php
require "CheckAdminAccess.php";

ob_start();
if(isset($_POST['submitEmail'])){
  echo "Yes:";
$email=$_GET['EMAIL'];
$id=$_GET['ID'];
  require "connect_db.php";
}
else{
header("Location: accounts_base_page.php");
}

?>
