<?php
session_start();
//$_SESSION['User_Status']="Admin";
echo $_SESSION['User_Status'];

//$_SESSION['User_ID']=29;
echo $_SESSION['User_ID'];


if(isset($_SESSION['login'])) {
echo "EXIST";
}else {
  echo "Not exist";
}

?>
