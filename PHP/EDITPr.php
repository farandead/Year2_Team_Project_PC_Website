<?php
require "PHP/CheckAdminAccess.php";
if($isset($_GET['Product'])){
  require "PHP/connect_db.php";
  ecoh "yes";
}

?>
