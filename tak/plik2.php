<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        <title>Strona</title>
</head>
    <body>
        <div class="pudelko">
            <div class="p1">
            <h3>dodawanie pracownika</h3>
<form action="insert.php" method="POST">

				
			<label>Imie:</label><input type="text" name="imie"><br>
	
			<label>Dzial:</label><input type="text" name="dzial"></br>
				
			<label>Zarobki:</label><input type="text" name="zarobki"></br>
	
			<label>Data urodzenia:</label><input type="date" name="data_urodzenia"></br>
				
			<input type="submit" value="dodaj pracownika">
</form>
<form action="delete.php" method="POST">
	<label>Podaj id:</label><input type="number" name="id_pracownicy"></br>
   <input type="submit" value="usuń pracownika">
</form>
            <?php
require_once("connect.php");
echo("<h2>Podstawowe</h2>"); 
$sql ="select * from pracownicy"; 
echo("<h3>tabelka</h3>"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){      
echo('<tr><td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td></tr>'); } 
echo('</table>'); 
?>
    
            </div>
            <div class="p2">2</div>
            <div class="p3">3</div>
        </div>
    </body>
</html>