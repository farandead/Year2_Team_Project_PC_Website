<?php
session_start();

if($_SESSION['login']){
if($_SESSION['User_Status']=="Admin"){echo "You have been already provided with the admin rights!";}
elseif($_SESSION['User_Status']=="RegAdmin"){
echo "Your application is pending, please wait.";
}
else{
require "../connect_db.php";

}
}
else{
header("Location: ../../Sign_up_new.php");
}

?>
