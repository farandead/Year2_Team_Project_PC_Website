<?php
session_start();
//$_SESSION['User_Status']="Admin";
echo $_SESSION['User_Status'];

//$_SESSION['User_ID']=29;
echo $_SESSION['User_ID'];

if($_SESSION['login'] = true) {
  
  echo $_SESSION['User_ID'];
  echo $_SESSION['user_Email'] ;
  echo $_SESSION['User_FName'];
  echo $_SESSION['User_SName'] ;
  echo $_SESSION['User_Status'] ;
  echo $_SESSION['User_Password'] ;
                   
}


?>
