<?php
echo("Insert");

$servername = "sql7.freemysqlhosting.net"; 
$username = "sql7378763"; 
$password = "tKgKu1mp5I"; 
$dbname = "sql7378763";    

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki,data_urodzenia) 
       VALUES (null,".'"'.$_POST['imie'].'"'.','.$_POST['dzial'].','.$_POST['zarobki'].','.'"'.$_POST['data_urodzenia'].'"'.')';

echo "<li>".$sql;


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
