<?php
$nowa_nazwa = $_POST['nazwa_grupy'];
$grupa = $_POST['grupy'];
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
$idgr = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy LIKE '$sql' AND Nazwa_grupy = '$grupa'");
$row = mysql_fetch_row($idgr);

echo "<br>";
echo "id grupy = ";
echo $row[0];
echo "<br>";
echo "nowa nazwa grupy: ". $grupa . "<br>";
echo "stara nazwa grupy: " . $nowa_nazwa . "<br>";


$ins = @mysql_query("UPDATE grupy SET Nazwa_grupy='$nowa_nazwa' WHERE id_grupy = '$row[0]'");
setcookie("zmiana_nazwy_grupy", "Zmieniłeś nazwę grupy na: $nowa_nazwa <br>
Zmiany będą dostępne po następnym logowaniu", time()+10);
header("Location: edycja_grupy.php");
?>