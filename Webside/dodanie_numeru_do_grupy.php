<!DOCTYPE html>
<html lang="pl">
<head>
  <title>IKT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="1479835798.ico">
    <style>
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
      
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
        #form {
            text-align: center;
        }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="strona_uzytkownika.php"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="strona_uzytkownika.php">DODAJ KONTAKTY</a></li>
        <li><a href="strona_uzytkownika.php">GRUPY</a></li>
        <li><a href="strona_uzytkownika.php">USUŃ KONTAKTY</a></li>
        <li><a href="strona_uzytkownika.php">TWOJE DANE</a></li>
        <li><a href="strona_uzytkownika.php">KONTAKT</a></li>
        <li><a href="logout.php">WYLOGUJ</a></li>
      </ul>
    </div>
  </div>
</nav><br><br><br>
    
 
        <?php 
        
        
$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
$id = $_COOKIE['id'];
$zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = 0";
$wynik = mysql_query($zapytanie) or die(mysql_error());    
$sql = $id."_";
$zapytaniegrup = "SELECT Nazwa_grupy FROM grupy WHERE id_grupy LIKE '$sql'";
$wynikgrup = mysql_query($zapytaniegrup) or die(mysql_error());    
    
echo "<div id=\"form\">";       
echo "<span style=\"text-align: center;\"><h2>Wybierz znajomego którego chcesz przypisać do grupy:</h2></span>";       
echo "<div class=\"container text-center\">";    
echo "<form action=\"dodanie_numeru_do_grupy1.php\" method=\"POST\">";
    echo "<select name=\"nazwa\" style=\" width: 400px;\">";
echo "<optgroup label=\"Twoi znajomi\">";
while ( $row = mysql_fetch_row($wynik) ) {
echo "<option >" . $row[0] . " " . $row[1] . " " . $row[2] . "</option>";
}
echo "</optgroup>";
echo "</select>";    
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h2>Wybierz grupę do której chcesz przypisać znajomego:</h2>";

        echo "<select name=\"grupy\" style=\" width: 400px;\">";
        echo "<optgroup label=\"Twoje grupy\">";
while ( $rowgrup = mysql_fetch_row($wynikgrup) ) {
echo "<option >" . $rowgrup[0] . "</option>";
}
echo "</optgroup>";
echo "</select><br>";
echo "<br>";
echo "<br>";
echo "<button type=\"submit\" class=\"btn btn-success\" style=\"width: 150px;\">Dopisz do grupy</button>";    
       echo "</form></div>"; 
    echo "<br>";
if(isset($_COOKIE['dodanie_numeru'])){
    echo $_COOKIE['dodanie_numeru'];
    echo "<br>";
}
        echo "</div>";
?>
<br>
    <br>
    <div id="form">
        <h4>Powrót na stronę główną:</h4>
    <form action="strona_uzytkownika.php">
        <button type="submit" class="btn btn-primary" style="width: 150px;">Powrót</button>
        </form>
</div>

</body>
</html>

