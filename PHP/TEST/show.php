<?php
require "../connect_db.php";

$sql = "SELECT * FROM TESTUPLOAD WHERE NAME='jk'";
$sth = $conn->query($sql);
$result=mysqli_fetch_array($sth);
echo $result['img'];
echo '<img src="data:image/jpg;base64,'.base64_encode( $result['img'] ).'"/>';

?>
