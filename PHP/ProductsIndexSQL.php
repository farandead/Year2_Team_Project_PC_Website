<?php

$query=mysqli_query($conn,"SELECT * FROM Product WHERE Cat_ID = '1' OR Cat_ID = '3'");

$template= "TemplateProductIndex.php";

?>
