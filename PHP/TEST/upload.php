<?php
require "../connect_db.php";

$sql= "INSERT INTO ImageTable (Id, Name, Photo) 
SELECT 1, 'test', BulkColumn 
FROM Openrowset( Bulk 'Desktop\wall.jpg', Single_Blob) as image";

echo "OK";

?>
