<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formatowanie dat</h1>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-OlgaSzulc02">github</a>
  
    <div class="nav">
      <a href="index.php">Strona Główna</a>
  </div>

<?php 
$servername = "sql7.freemysqlhosting.net"; 
$username = "sql7374844"; 
$password = "6cxJ7qTmxi"; 
$dbname = "sql7374844";  

$conn= new mysqli($servername,$username,$password,$dbname);  
    
 $sql = "select imie, date_format(data_urodzenia, '%W-%m-%Y') as data from pracownicy";
echo("<h3>Wyświetl nazwy dni w dacie urodzenia</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql1 = "set lc_time_names = 'pl_PL'";
    $sql2 = "select date_format(curdate(), '%W') as data";
echo("<h3>Wypisz dzisiejszą nazwę dnia po polsku</h3>");
    echo("<li>".$sql1);
    echo("<li>".$sql2);
$result = mysqli_query($conn, $sql1);  
$result = mysqli_query($conn, $sql2);
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
      
 $sql = "select imie, date_format(data_urodzenia, '%w-%M-%Y') as data from pracownicy";
echo("<h3>Wyświetl nazwy miesięcy w dacie urodzenia</h3>");
    echo("<li>".$sql);
$result = mysqli_query($conn, $sql);  
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>imie</th><th>data</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");     
  echo("<tr>");     
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("<tr>"); 
  echo("</tr>"); } 
echo('</table>'); 
    
$sql = "SELECT curtime(4) as data"; 
echo("<h3>Obecna, dokładna godzina (z dokładnością do milisekund)</h3>");
    echo("<li>".$sql);    
$result = mysqli_query($conn, $sql);
echo('<table border="1">');
echo('<th>Data</th>');
while($row=mysqli_fetch_assoc($result)){
    echo('<tr>');
    echo('<td>'.$row['data'].'</td>');
    echo('</tr>'); }
 echo('</table>');
    
    
?>
  </body>
</html>
