<?php
if(isset($_SESSION['User_Status'])){
  echo "Signed In!";
}
else{
  require "basketSignedOut.php";
}


?>
