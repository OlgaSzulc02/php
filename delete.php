<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("connect.php");
echo("Delete" . "<br>");
echo $_POST['id'];
echo "<br>";

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];

if ($conn->query($sql) === TRUE) {
  header('Location: https://olga-szulc.herokuapp.com/danedobazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
