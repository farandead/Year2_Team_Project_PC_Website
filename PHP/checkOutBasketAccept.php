<?php
ob_start();
if(isset($_POST['buyB'])){
echo "1";
}elseif(isset($_POST['Cancel'])){echo "2";
}else{
header("Location: ../index.php");
}


?>
