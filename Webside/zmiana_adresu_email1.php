<?php
$id = $_COOKIE['id'];
$staryadres = $_POST['staryemail'];
$nowyadres = $_POST['nowyemail'];
echo "tutaj mozna bedzie zmienic e-mail";

$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 


$i = @mysql_query("use ksiazka");

$email = mysql_query("SELECT email FROM uzytkownicy WHERE ID = '$id'");
$row = mysql_fetch_row($email);


if ($row[0] != $staryadres) {
	setcookie('zmiana_email', 'Obecny adres e-mail różni się od podanego', time()+10, '/');
	header("Location: zmiana_adresu_email.php");
}
elseif ($row[0] == $nowyadres) {
	setcookie('zmiana_email', 'Nowy adres nie różni się od starego', time()+5, '/');
	header("Location: zmiana_adresu_email.php");
}
else{
	$zmiana = mysql_query("UPDATE `uzytkownicy` SET `email` = '$nowyadres' WHERE ID = '$id'");

setcookie('zmiana_email', 'Zmiana adresu e-mail powiodła się', time()+10, '/');
}
header("Location: zmiana_adresu_email.php");
?>