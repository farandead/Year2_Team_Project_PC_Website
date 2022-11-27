<?php
session_start();
//$_SESSION['User_Status']="Admin";
echo $_SESSION['User_Status'];

//$_SESSION['User_ID']=29;
echo $_SESSION['User_ID'];
if( $_SESSION['login'] = true) {
  
                   echo     $_SESSION['UserID'];
                     echo   $_SESSION['userEmail'] ;
                      echo  $_SESSION['UserFName'];
                     echo   $_SESSION['UserSName'] ;
                     echo   $_SESSION['UserStatus'] ;
                     echo   $_SESSION['UserPassword'] ;
}


?>
