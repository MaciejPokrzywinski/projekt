<?php
$id = $_COOKIE['id'];
$obechaslo = $_POST['obecnehaslo'];
$powobechaslo = $_POST['pobecnehaslo'];
$nowehaslo = $_POST['nowehaslo'];
echo "tutaj mozna bedzie zmienic haslo";

$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 

$i = @mysql_query("use ksiazka");

$haslo = mysql_query("SELECT haslo FROM uzytkownicy WHERE ID = '$id'");
$row = mysql_fetch_row($haslo);


if ($row[0] != $obechaslo) {
	setcookie('zmiana_hasla', 'Podałeś złe obecne hasło', time()+10, '/');
	header("Location: zmiana_hasla.php");
}
elseif ($row[0] != $powobechaslo) {
	setcookie('zmiana_hasla', 'obecne hasło różni się od powtórzonego', time()+10, '/');
	header("Location: zmiana_hasla.php");
}
elseif ($obechaslo == $nowehaslo) {
	setcookie('zmiana_hasla', 'Nowe hasło jest takie samo jak poprzednie', time()+10, '/');
	header("Location: zmiana_hasla.php");
}
else{
	$zmiana = mysql_query("UPDATE `uzytkownicy` SET `haslo` = '$nowehaslo' WHERE ID = '$id'");
setcookie('zmiana_hasla', 'Zmiana hasła powiodła się', time()+10, '/');
}
header("Location: zmiana_hasla.php");
?>