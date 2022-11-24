<?php
require "../connect_db.php";
$filename="Desktop/wal.jpg";
$sql= "INSERT INTO TESTUPLOAD ( NAME, img) 
VALUES ('tEST','$filename')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "OK";

?>
