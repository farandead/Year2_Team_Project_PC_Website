<?php
if (isset($_POST['submit'])){
  ob_start();
  
  echo "Yes";
  
}

header("Location: ../AddProductAdminPanel.php");

?>
