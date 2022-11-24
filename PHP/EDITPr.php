<?php
require "CheckAdminAccess.php";
if(isset($_GET['Product'])){
  require "connect_db.php";
  echo "yes";
}

?>
