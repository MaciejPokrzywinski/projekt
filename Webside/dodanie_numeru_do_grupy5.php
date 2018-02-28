<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="1479835798.ico">
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  
  </style>
</head>
<body>

<div class="text-center">
 Wybierz znajomego którego chcesz przypisać do danej grupy:
        <?php 
        
        
$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
$id = $_COOKIE['id'];
$zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = 0";
$wynik = mysql_query($zapytanie) or die(mysql_error());    
$sql = $id."_";
$zapytaniegrup = "SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$sql'";
$wynikgrup = mysql_query($zapytaniegrup) or die(mysql_error());    
    
        
        
        
echo "<form action=\"dodanie_numeru_do_grupy1.php\" method=\"POST\">";
    echo "<select name=\"nazwa\" style=\"width: 250px;\">";
echo "<optgroup label=\"Twoi znajomi\">";
while ( $row = mysql_fetch_row($wynik) ) {
echo "<option >" . $row[0] . " " . $row[1] . " " . $row[2] . "</option>";
}
echo "</optgroup>";
echo "</select><br>";    

echo "Wybierz grupę do której chcesz przypisać znajomego:";
echo "<br>";
        echo "<select name=\"grupy\" style=\"width: 250px;\">";
        echo "<optgroup label=\"Twoje grupy\">";
while ( $rowgrup = mysql_fetch_row($wynikgrup) ) {
echo "<option >" . $rowgrup[0] . "</option>";
}
echo "</optgroup>";
echo "</select><br>";
echo "<br>";
echo "<button type=\"submit\" class=\"btn btn-default\">Dopisz do grupy</button>";    
       echo "</form>"; 
if(isset($_COOKIE['dodanie_numeru'])){
    echo $_COOKIE['dodanie_numeru'];
    echo "<br>";
}
?>
    
        Powrót na stronę główną:
    <form action="strona_uzytkownika.php"><br>
        <button type="submit" class="btn btn-default">Powrót do menu</button>
        </form>
        </div>






</body>
</html>