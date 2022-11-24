<?php
require "CheckAdminAccess.php";
if($isset($_GET['Product'])){
  require "PHP/connect_db.php";
  echo "yes";
}

?>
