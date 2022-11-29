<?php
ob_start();
session_start();
if(isset($_SESSION['login'])){
if($_SESSION['login']){
if($_SESSION['User_Status']=="Admin"){echo "You have been already provided with the admin rights!";}
elseif($_SESSION['User_Status']=="RegAdmin"){
echo "Your application is pending, please wait.";
}
else{
require "../connect_db.php";

  $userId=$_SESSION['User_ID'];
  $sql = "UPDATE account SET User_Status='RegAdmin' WHERE User_ID=$userId";

if ($conn->query($sql) === TRUE) {
  echo "From now, your application is pending, please wait.";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
  
}
}
else{
header("Location: ../../Sign_up_new.php");
}
}else{header("Location: ../../Sign_up_new.php");}
?>
