<?php
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
$idgr = mysql_query("SELECT id_grupy FROM grupy WHERE Nazwa_grupy = '$grupa'");
$row = mysql_fetch_row($idgr);
$usuwanie = @mysql_query("DELETE FROM `grupy` WHERE `id_grupy`='$row[0]'");
setcookie("usuwanie_grupy", "Pomyślnie usunąłeś grupę: $grupa, grupy zostaną zaktualizowane po następnym zalogowaniu", time()+10);

header("Location: usuwanie_grupy.php");
?>