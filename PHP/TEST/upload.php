<?php
require "../connect_db.php";

$sql= "INSERT INTO ImageTable (Id, Name, Photo) 
SELECT 1, 'test', BulkColumn 
FROM Openrowset( Bulk 'Desktop\wall.jpg', Single_Blob) as image";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "OK";

?>
