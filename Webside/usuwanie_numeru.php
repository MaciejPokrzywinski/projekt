<?php 
$osoba = $_POST['nazwa'];

$osoby = explode(" ", $osoba);

echo $osoby[0];
echo " ";
echo $osoby[1];
echo " ";
echo $osoby[2];

$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
$id = $_COOKIE['id'];
echo " ";
echo $id;
$ins = @mysql_query("use ksiazka");
$usuz = @mysql_query("DELETE FROM `znajomi` WHERE ID = '$id' AND imie = '$osoby[0]' AND nazwisko = '$osoby[1]' AND  telefon = '$osoby[2]'");

setcookie("usuwanie_numeru", "usunąłeś znajomego: $osoby[0] $osoby[1]", time()+10);
header("Location: strona_uzytkownika.php");
?>
