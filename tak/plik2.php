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
	<label>Podaj id:</label><input type="number" name="id_pracownicy"</br>
   <input type="submit" value="usuń pracownika">
</form>
            <?php

echo("<h2>Zadania</h2>"); 
require_once("connect.php");
    $sql ="select * from pracownicy"; 
echo("<h3>Pracownicy"); 
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
?>
    
            </div>
            <div class="p2">2</div>
            <div class="p3">3</div>
        </div>
    </body>
</html>