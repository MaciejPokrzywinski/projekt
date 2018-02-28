<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];

$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 

echo $login. $haslo. $imie. $email;
$ins = @mysql_query("use ksiazka");

$zapytanie = "SELECT login FROM uzytkownicy WHERE login = '$login'";
$wynik = mysql_query($zapytanie) or die(mysql_error());
$row = mysql_fetch_row($wynik);
	echo $row[0];
$loginspr = $login;
	if( $loginspr = $row[0]){
    setcookie('blad_rejestracji', 'Istnieje użytkownik o takim loginie', time()+5, '/');
	echo "blad rejestracji, podany login istnieje";
	echo $row[0];
	header('Location: index.php');
}
else{
$ins2 = @mysql_query("INSERT INTO uzytkownicy SET login = '$login', haslo='$haslo', imie='$imie', nazwisko='$nazwisko',  email='$email'"); 
$id = mysql_query("SELECT ID FROM uzytkownicy WHERE login = '$login'");
$tablica = mysql_fetch_row($id);
$idd = $tablica[0];
echo $idd;
$n0 = 0;
$n1 = 1;
$n2 = 2;
$idgrupy0 = $idd.$n0;
$idgrupy1 = $idd.$n1;
$idgrupy2 = $idd.$n2;
$grupa1 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='Znajomi', id_grupy='$idgrupy0'");
$grupa2 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='Przyjaciele', id_grupy='$idgrupy1'");
$grupa3 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='Rodzina', id_grupy='$idgrupy2'");
if($ins2){
	 echo "Rekord został dodany poprawnie"; 
	 header('Location: index.php');
}else{	
 echo "Błąd nie udało się dodać nowego rekordu"; }
 header('Location: index.php');
 //wywala jakis blad ale dodaje
}
header('Location: index.php');
?>