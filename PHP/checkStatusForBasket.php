<?php
session_start();
print_r ($_SESSION,true);
  
if(isset($_SESSION['User_Status'])){
  echo "Signed In!";
}
else{
  require "basketSignedOut.php";
}


?>
