<?php
echo("Delete<br>");
echo $_POST['id_pracownicy'];


$servername = "sql7.freemysqlhosting.net"; 
$username = "sql7378763"; 
$password = "tKgKu1mp5I"; 
$dbname = "sql7378763";      

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id_pracownicy'];


echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
