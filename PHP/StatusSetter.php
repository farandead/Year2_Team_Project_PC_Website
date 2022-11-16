session_start();
$_SESSION['User_Status']="Admin";

if(isset($_SESSION['User_Status'])){
$status=$_SESSION['User_Status'];}else{$status=null;}

if(isset($_GET["AdminView"])){
$view=$_GET["AdminView"];}else{$view=0;}
