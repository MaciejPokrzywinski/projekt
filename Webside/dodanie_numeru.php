<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$telefon = $_POST['telefon'];
$id = $_COOKIE['id'];

$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 

$ins = @mysql_query("use ksiazka");
$ins2 = @mysql_query("INSERT INTO znajomi SET ID='$id', imie='$imie', nazwisko='$nazwisko', telefon='$telefon'");
 if($ins2) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
header("Location: strona_uzytkownika.php");
?>