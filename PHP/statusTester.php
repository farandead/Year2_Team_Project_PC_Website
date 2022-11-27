<?php
session_start();
//$_SESSION['User_Status']="Admin";
echo $_SESSION['User_Status'];

//$_SESSION['User_ID']=29;
echo $_SESSION['User_ID'];

if($_SESSION['login'] = true) {
  
  echo $_SESSION['userid'];
  echo $_SESSION['useremail'] ;
  echo $_SESSION['userfname'];
  echo $_SESSION['usersname'] ;
  echo $_SESSION['userstatus'] ;
  echo $_SESSION['userpassword'] ;
 

}


?>
