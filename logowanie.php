<?php
$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych');
	
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$i = @mysql_query("use ksiazka");

$imie = mysql_query("SELECT imie, nazwisko, ID , email FROM uzytkownicy WHERE login = '$login'");
$row0 = mysql_fetch_row($imie);
$imie = $row0[0];
setcookie("imie", "$imie", time()+3600);
$nazwisko = $row0[1];
setcookie("nazwisko", "$nazwisko", time()+3600);

$ident = $row0[2];
setcookie("id", "$ident", time()+3600);

$mail = $row0[3];
setcookie("email", "$mail", time()+3000);

//test grup
//pierwszy cookies
$idgrup = $row0[2];
$n0 = 0;
$idg = $idgrup.$n0;
setcookie("grupa0id", "$idg", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg'");
$tabgrup0 = mysql_fetch_row($grupy);
$grupa0 = $tabgrup0[0];
setcookie("grupa0", "$grupa0", time()+3000);
//drugi cookies
$n1 = 1;
$idg1 = $idgrup.$n1;
setcookie("grupa1id", "$idg1", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg1'");
$tabgrup1 = mysql_fetch_row($grupy);
$grupa1 = $tabgrup1[0];
setcookie("grupa1", "$grupa1", time()+3000);
//trzeci cookies
$n2 = 2;
$idg2 = $idgrup.$n2;
setcookie("grupa2id", "$idg2", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg2'");
$tabgrup2 = mysql_fetch_row($grupy);
$grupa2 = $tabgrup2[0];
setcookie("grupa2", "$grupa2", time()+3000);
//trzeci cookies
$n3 = 3;
$idg3 = $idgrup.$n3;
setcookie("grupa3id", "$idg3", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg3'");
$tabgrup3 = mysql_fetch_row($grupy);
$grupa3 = $tabgrup3[0];
setcookie("grupa3", "$grupa3", time()+3000);
//czwarty cookies
$n4 = 4;
$idg4 = $idgrup.$n4;
setcookie("grupa4id", "$idg4", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg4'");
$tabgrup4 = mysql_fetch_row($grupy);
$grupa4 = $tabgrup4[0];
setcookie("grupa4", "$grupa4", time()+3000);
//piąty cookies
$n5 = 5;
$idg5 = $idgrup.$n5;
setcookie("grupa5id", "$idg5", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg5'");
$tabgrup5 = mysql_fetch_row($grupy);
$grupa5 = $tabgrup5[0];
setcookie("grupa5", "$grupa5", time()+3000);
//szósty cookies
$n6 = 6;
$idg6 = $idgrup.$n6;
setcookie("grupa6id", "$idg6", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg6'");
$tabgrup6 = mysql_fetch_row($grupy);
$grupa6 = $tabgrup6[0];
setcookie("grupa6", "$grupa6", time()+3000);
//siódmy cookies
$n7 = 7;
$idg7 = $idgrup.$n7;
setcookie("grupa7id", "$idg7", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg7'");
$tabgrup7 = mysql_fetch_row($grupy);
$grupa7 = $tabgrup7[0];
setcookie("grupa7", "$grupa7", time()+3000);
//ósmy cookies
$n8 = 8;
$idg8 = $idgrup.$n8;
setcookie("grupa8id", "$idg8", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg8'");
$tabgrup8 = mysql_fetch_row($grupy);
$grupa8 = $tabgrup8[0];
setcookie("grupa8", "$grupa8", time()+3000);
//dziewiąty cookies
$n9 = 9;
$idg9 = $idgrup.$n9;
setcookie("grupa9id", "$idg9", time()+3000);
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idg9'");
$tabgrup9 = mysql_fetch_row($grupy);
$grupa9 = $tabgrup9[0];
setcookie("grupa9", "$grupa9", time()+3000);
//koniec testu grup
$ins = @mysql_query("use ksiazka");
$result = mysql_query("SELECT login ,haslo, Admin FROM uzytkownicy WHERE login = '$login'");
$row = mysql_fetch_row($result);



if ($row[0] != $login) {
	setcookie('blad_logowania', 'Podales zly login', time()+5, '/');
	echo $row[0];
	echo "<br>";
	echo $login;
	//header("Location: index.php");
}
elseif ($row[1] != $haslo) {
	setcookie('blad_logowania', 'Podales zly login lub haslo', time()+5, '/');
	header("Location: index.php");
}
elseif ($row[2] != 0) {
	header("Location: panel_administatora.php");
}
else{
	session_start();
	$_SESSION['zalogowany'] = 'Jestes zalogowany';
	echo $_SESSION['zalogowany'];

header("Location: strona_uzytkownika.php");
	echo <<< NAZWA
	<form action='logout.php' methot='POST'>
	<input type='submit' value='wyloguj' />	
	
NAZWA;
}
?>