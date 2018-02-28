<?php
$osoba = $_POST['nazwa'];
$nimie = $_POST['nowe_imie'];
$nnazwisko = $_POST['nowe_nazwisko'];
$ntelefon = $_POST['nowy_telefon'];

$osoby = explode(" ", $osoba);

echo "stare imie:<br> ";
echo $osoby[0];
echo "stare nazwisko:<br> ";
echo $osoby[1];
echo "stary numer:<br> ";
echo $osoby[2];

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
echo "<br>";
echo "id uzytkownika = ";
echo $id;
echo "<br>";
if(empty($nimie)){
	$imie = $osoby[0];
}else{
	$imie = $nimie;
}
if(empty($nnazwisko)){
	$nazwisko = $osoby[1];
}else{
	$nazwisko = $nnazwisko;
}
if(empty($ntelefon)){
	$telefon = $osoby[2];
}else{
	$telefon = $ntelefon;
}

echo "<br>Zmiany jakie zostaną wprowadzone: <br>";
echo "nowe imie: " . $imie . "<br>";
echo "nowe nazwisko: " . $nazwisko . "<br>";
echo "nowy telefon: " . $telefon . "<br>";

$ins = @mysql_query("UPDATE znajomi SET imie='$imie', nazwisko='$nazwisko', telefon='$telefon' WHERE ID = '$id' AND imie='$osoby[0]' AND nazwisko='$osoby[1]'");
setcookie("edycja_kontaktu", "Zmiany zostały zapisane", time()+10);
header("Location: edycja_numeru.php");
?>