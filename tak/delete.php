<?php
echo("Delete<br>");
echo $_POST['id_pracownicy'];

require_once("connect.php");

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id_pracownicy'];

echo $sql;

if ($conn->query($sql) === TRUE) {
    header('Location: https://olga-szulc.herokuapp.com/tak/plik2.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>