<?php
$osoba = $_POST['nazwa'];
$grupa = $_POST['grupy'];

$osoby = explode(" ", $osoba);


echo $osoby[0];
echo " ";
echo $grupa;
echo " ";
echo $osoby[1];
echo " ";
echo $osoby[2];
//osoby2 telefon

$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 

$id = $_COOKIE['id'];
$sql = $id.'_';

$ins = @mysql_query("use ksiazka");
//pobieranie id grupy
$idgr = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy LIKE '$sql' AND Nazwa_grupy = '$grupa'");
$row = mysql_fetch_row($idgr);

echo "<br>";
echo "id grupy = ";
echo $row[0];
echo "<br>";


$ins = @mysql_query("INSERT INTO znajomi SET ID='$id', imie='$osoby[0]', nazwisko='$osoby[1]', telefon='$osoby[2]', id_grupy='$row[0]'");
setcookie("dodanie_numeru", "Dodałeś użytkownika do grupy: $grupa", time()+10);
header("Location: dodanie_numeru_do_grupy.php");
?>