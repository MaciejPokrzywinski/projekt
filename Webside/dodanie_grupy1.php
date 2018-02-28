<?php
$nazwa = $_POST['nazwa_grupy'];
$id = $_COOKIE['id'];   
//echo $id;
//echo $nazwa;


$n0 = 0;
$n1 = 1;
$n2 = 2;
$n3 = 3;
$n4 = 4;
$n5 = 5;
$n6 = 6;
$n7 = 7;
$n8 = 8;
$n9 = 9;

$idgrupy0 = $id.$n0;
$idgrupy1 = $id.$n1;
$idgrupy2 = $id.$n2;
$idgrupy3 = $id.$n3;
$idgrupy4 = $id.$n4;
$idgrupy5 = $id.$n5;
$idgrupy6 = $id.$n6;
$idgrupy7 = $id.$n7;
$idgrupy8 = $id.$n8;
$idgrupy9 = $id.$n9;
$sql = $id.'_';
//echo "<br>";
//echo $idgrupy9;
$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych');
$ins = @mysql_query("use ksiazka");
$grupy2 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy2'");
$row2 = mysql_fetch_row($grupy2);
$grupy3 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy3'");
$row3 = mysql_fetch_row($grupy3);
$grupy4 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy4'");
$row4 = mysql_fetch_row($grupy4);
$grupy5 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy5'");
$row5 = mysql_fetch_row($grupy5);
$grupy6 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy6'");
$row6 = mysql_fetch_row($grupy6);
$grupy7 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy7'");
$row7 = mysql_fetch_row($grupy7);
$grupy8 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy8'");
$row8 = mysql_fetch_row($grupy8);
$grupy9 = mysql_query("SELECT id_grupy FROM grupy WHERE id_grupy = '$idgrupy9'");
$row9 = mysql_fetch_row($grupy9);


if($row3[0] != $idgrupy3){
    $ins3 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy3'");
    $grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy3'");
$tabgrup3 = mysql_fetch_row($grupy);
$grupa3 = $tabgrup3[0];
setcookie("grupa3", "$grupa3", time()+3000);
}elseif($row4[0] != $idgrupy4){
    $ins4 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy4'");
$grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy4'");
$tabgrup4 = mysql_fetch_row($grupy);
$grupa4 = $tabgrup4[0];
setcookie("grupa4", "$grupa4", time()+3000);
}elseif($row5[0] != $idgrupy5){
    $ins5 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy5'");
    $grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy5'");
$tabgrup5 = mysql_fetch_row($grupy);
    setcookie("grupa5", "$grupa5", time()+3000);
$grupa5 = $tabgrup5[0];
}elseif($row6[0] != $idgrupy6){
    $ins6 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy6'");
    $grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy6'");
$tabgrup6 = mysql_fetch_row($grupy);
$grupa6 = $tabgrup6[0];
    setcookie("grupa7", "$grupa7", time()+3000);
}elseif($row7[0] != $idgrupy7){
    $ins7 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy7'");
        $grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy7'");
$tabgrup7 = mysql_fetch_row($grupy);
$grupa7 = $tabgrup7[0];
setcookie("grupa7", "$grupa7", time()+3000);
}elseif($row8[0] != $idgrupy8){
    $ins8 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy8'");
     $grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy8'");
$tabgrup8 = mysql_fetch_row($grupy);
setcookie("grupa8", "$grupa8", time()+3000);
$grupa8 = $tabgrup8[0];
}elseif($row9[0] != $idgrupy9){
    $ins9 = @mysql_query("INSERT INTO grupy SET Nazwa_grupy='$nazwa', id_grupy='$idgrupy9'");
        $grupy = mysql_query("SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$idgrupy9'");
$tabgrup9 = mysql_fetch_row($grupy);
$grupa9 = $tabgrup9[0];
setcookie("grupa9", "$grupa9", time()+3000);
}elseif($row9[0] = $idgrupy9){
 echo "nie mozesz utworzyc wiecej grup";   
    setcookie("blad_dodania_grupy", "stworzyłeś już maksymalną ilość grup nie mozesz utworzyc wiekszej ilosci grup", time()+10);
}


header("Location: strona_uzytkownika.php");
?>