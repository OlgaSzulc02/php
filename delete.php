<?php
echo("Delete<br>");
echo $_POST['id'];


$servername = "sql7.freemysqlhosting.net"; 
$username = "sql7374844"; 
$password = "6cxJ7qTmxi"; 
$dbname = "sql7374844";    

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Pracownicy WHERE id=".$_POST['id'];


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
