<html>
<head>
    <meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css">
        <title>Strona</title>
</head>
    <body>
        <div class="pudelko">
            <div class="p1">
            <?php

echo("<h2>Zadania</h2>"); 
require_once("connect.php");
    $sql ="select imie from pracownicy where (dzial=2)"; 
echo("<h3>Pracownicy tylko z działu 2</h3>"); 
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