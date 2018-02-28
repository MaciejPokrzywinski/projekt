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
        .dane {
            padding-left: 300px;
            padding-right: 300px;
            padding-bottom: 15px;
        }
        #dane1{
            padding-left: 300px;
            padding-right: 300px;
        }
      
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
      text-align: center;
      padding-top: 25px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-color: #EEEE;
      color: black;
      padding: 65px 25px 55px;
      font-family: Montserrat, sans-serif;
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
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
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
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
      .form {
          margin-top: 5%;
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
        <li><a href="#jumbo">DODAJ KONTAKTY</a></li>
        <li><a href="#group">GRUPY</a></li>
        <li><a href="#services">USUŃ KONTAKTY</a></li>
        <li><a href="#data">TWOJE DANE</a></li>
        <li><a href="#contact">KONTAKT</a></li>
        <li><a href="logout.php">WYLOGUJ</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="jumbo" class="jumbotron text-center">
    <h2 >Podaj dane osoby:</h2><br>
  <div class="dane">
<form action="dodanie_numeru.php" method="POST">
<input type="text" class="form-control text-center" placeholder="Imię" name="imie" required><br>
<input type="text" class="form-control text-center" placeholder="Nazwisko" name="nazwisko" required><br>
<input type="number" class="form-control text-center" placeholder="Numer telefonu" name="telefon" required><br>
    <button type="submit" class="btn btn-primary">Dodaj kontakt</button>
	<a href="edycja_numeru.php" class="btn btn-warning">Edytuj kontakt</a>
<button type="reset" class="btn btn-danger">Wyczyść</button>
    
      </form></div></div>

<!-- Container (About Section) -->
    
<div id="group" class="container-fluid text-center">
    <h2>Podaj nazwę nowej grupy:</h2><br>
    <div id="dane1">
<form action="dodanie_grupy1.php" method="POST">
<input type="text" class="form-control text-center" placeholder="Nazwa grupy" name="nazwa_grupy" required><br>
    <button type="submit" class="btn btn-primary">Utwórz grupe</button>
	<a href="dodanie_numeru_do_grupy.php" class="btn btn-success">Dodaj do grupy</a>
    <a href="edycja_grupy.php" class="btn btn-warning">Edytuj grupe</a>
	<a href="usuwanie_grupy.php" class="btn btn-danger">Usuń grupę</a>

        </form></div>
    </div>

<?php 
  
	$db_user = "root";
$db_pass = "";
$db_name = "ksiazka";
$db_server = "localhost";
$connection = @mysql_connect($db_server, $db_user, $db_pass) or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ksiazka', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
$id = $_COOKIE['id'];
 $zapytanie1 = mysql_query("select database ksiazka");
    
    
	 echo "<div id=\"menucentralne\">";
	  echo "<h2>Menu grup</h2>";
	
  echo "<ul class=\"nav nav-tabs\">";
  echo "<li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Twoje grupy</a></li>";
  echo "<li><a data-toggle=\"tab\" href=\"#menu1\">" . $_COOKIE['grupa0'] . "</a></li>";
  if(isset($_COOKIE['grupa1'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu2\">" . $_COOKIE['grupa1'] . "</a></li>";}
  if(isset($_COOKIE['grupa2'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu3\">" . $_COOKIE['grupa2'] . "</a></li>";}
  if(isset($_COOKIE['grupa3'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu4\">" . $_COOKIE['grupa3'] . "</a></li>";}
  if(isset($_COOKIE['grupa4'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu5\">" . $_COOKIE['grupa4'] . "</a></li>";}
  if(isset($_COOKIE['grupa5'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu6\">" . $_COOKIE['grupa5'] . "</a></li>";}
  if(isset($_COOKIE['grupa6'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu7\">" . $_COOKIE['grupa6'] . "</a></li>";}
  if(isset($_COOKIE['grupa7'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu8\">" . $_COOKIE['grupa7'] . "</a></li>";}
  if(isset($_COOKIE['grupa8'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu9\">" . $_COOKIE['grupa8'] . "</a></li>";}
  if(isset($_COOKIE['grupa9'])){ echo "<li><a data-toggle=\"tab\" href=\"#menu10\">" . $_COOKIE['grupa9'] . "</a></li>";}
  echo "</ul>";
  
  echo "<div class=\"tab-content\">";
    echo "<div id=\"home\" class=\"tab-pane fade in active text-center\">";
     echo "<h3>Twoje grupy</h3>";
      echo "<p>Dzięki temu menu możesz w łatwy i przyjemny sposów przeglądać swoje grupy znajomych!<p>";
    echo "</div>";
    echo "<div id=\"menu1\" class=\"tab-pane fade text-center\">";
     echo "<h3>" . $_COOKIE['grupa0'] . "</h3>";
$gr0 = $_COOKIE['grupa0id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr0";
 $wynik = mysql_query($zapytanie) or die(mysql_error());
 

 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
     
  echo  "</div>";
   if(isset($_COOKIE['grupa1'])){ echo "<div id=\"menu2\" class=\"tab-pane fade text-center\">";
     echo "<h3>" . $_COOKIE['grupa1'] . "</h3>";
                                 
  $gr1 = $_COOKIE['grupa1id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr1";
 $wynik = mysql_query($zapytanie) or die(mysql_error());

 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";                              
echo  "</div>"; }
  if(isset($_COOKIE['grupa2'])){ echo "<div id=\"menu3\" class=\"tab-pane fade text-center\">"; 
     echo "<h3>" . $_COOKIE['grupa2'] . "</h3>"; 
$gr2 = $_COOKIE['grupa2id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr2";
 $wynik = mysql_query($zapytanie) or die(mysql_error());

 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
                                
   echo "</div>"; }
if(isset($_COOKIE['grupa3'])){ echo "<div id=\"menu4\" class=\"tab-pane fade text-center\">";
    echo  "<h3>" . $_COOKIE['grupa3'] . "</h3>";
$gr3 = $_COOKIE['grupa3id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr3";
 $wynik = mysql_query($zapytanie) or die(mysql_error());


 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
   echo "</div>"; }
if(isset($_COOKIE['grupa4'])){ echo "<div id=\"menu5\" class=\"tab-pane fade text-center\">";
     echo "<h3>" . $_COOKIE['grupa4'] . "</h3>";
                              
    $gr4 = $_COOKIE['grupa4id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr4";
 $wynik = mysql_query($zapytanie) or die(mysql_error());
 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
   echo "</div>";}
if(isset($_COOKIE['grupa5'])){echo "<div id=\"menu6\" class=\"tab-pane fade text-center\">";
     echo "<h3>" . $_COOKIE['grupa5'] . "</h3>";
$gr5 = $_COOKIE['grupa5id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr5";
 $wynik = mysql_query($zapytanie) or die(mysql_error());
 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
   echo "</div>";}
if(isset($_COOKIE['grupa6'])){echo "<div id=\"menu7\" class=\"tab-pane fade text-center\">";
     echo "<h3>" . $_COOKIE['grupa6'] . "</h3>";
    $gr6 = $_COOKIE['grupa6id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr6";
 $wynik = mysql_query($zapytanie) or die(mysql_error());
 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
    echo "</div>"; }
if(isset($_COOKIE['grupa7'])){echo "<div id=\"menu8\" class=\"tab-pane fade text-center\">";
     echo "<h3>" . $_COOKIE['grupa7'] . "</h3>";
        $gr7 = $_COOKIE['grupa7id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr7";
 $wynik = mysql_query($zapytanie) or die(mysql_error());
 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
   echo "</div>";}
if(isset($_COOKIE['grupa8'])){	echo "<div id=\"menu9\" class=\"tab-pane fade text-center\">";
    echo "<h3>" . $_COOKIE['grupa8'] . "</h3>";
 $gr8 = $_COOKIE['grupa8id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr8";
 $wynik = mysql_query($zapytanie) or die(mysql_error());
 //echo "<p>";
 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
    echo "</div>";}
    if(isset($_COOKIE['grupa9'])){	echo "<div id=\"menu10\" class=\"tab-pane fade text-center\">";
    echo "<h3>" . $_COOKIE['grupa9'] . "</h3>";
            $gr9 = $_COOKIE['grupa9id'];
 $zapytanie = "SELECT imie, nazwisko, telefon FROM znajomi WHERE ID = $id AND id_grupy = $gr9";
 $wynik = mysql_query($zapytanie) or die(mysql_error());

 echo "<table class=\"table table-bordered\"><tr>";
 echo "<thead>";
 echo "<th style=\" width: 500px;\"><strong>Imie</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Nazwisko</strong></th>";
 echo "<th style=\" width: 500px;\"><strong>Telefon</strong></th>";
 echo "</tr>";
 echo "<tbody>";
 while ( $row = mysql_fetch_row($wynik)) {
    echo "<tr>";
    echo "<th>" . $row[0] . "</th>";
    echo "<th>" . $row[1] . "</th>";
    echo "<th>" . $row[2] . "</th>";
    echo "</tr>";
 }
    echo "</thead>";
    echo "</tbody>";
 echo "</table>";
    echo "</div>";}
  echo "</div>";
 ?>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center" style="background-color: #EEEEEE;" >
    <h2>Wybierz numer do usunięcia</h2>
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
    
        
        
        
echo "<form action=\"usuwanie_numeru.php\" method=\"POST\">";
    echo "<select name=\"nazwa\" style=\"width: 250px;\">";
echo "<optgroup label=\"Twoi znajomi\">";
while ( $row = mysql_fetch_row($wynik) ) {
echo "<option >" . $row[0] . " " . $row[1] . " " . $row[2] . "</option>";
}
echo "</optgroup>";
echo "</select><br>";    
 
echo "<button type=\"submit\" class=\"btn btn-danger\" style=\"width: 250px;\">Usuń numer</button>";    
       echo "</form>"; 
echo "<br>";
if(isset($_COOKIE['usuwanie_numeru'])){
    echo $_COOKIE['usuwanie_numeru'];
    echo "<br>";
    echo "</div>";
}
?>
</div>

     <!-- Container (Group Section) -->
<div id="data" class="container-fluid" style="background-color: white;">
    <div style="background-color: white; margin-left:200px; margin-right:200px; padding-left: 250px;">
  <p><span>Imię: <?php echo "<span style=\"margin-left:100px;\">"; echo $_COOKIE['imie']; echo "</span>" ?></span></p>
 <p><span id="">Nazwisko: <?php echo "<span style=\"margin-left:65px;\">"; echo $_COOKIE['nazwisko']; echo "</span>"; ?></span></p>
    <p><span id="">E-mail: <?php echo "<span style=\"margin-left:87px;\">"; echo $_COOKIE['email']; echo "</span>"; ?></span><span id=""style="margin-left: 215px;"><a href="zmiana_adresu_email.php">Zmień e-mail</a></span></p>
    <p><span style="">Hasło:<span style="margin-left:93px;">*******</span></span><span id="" style="margin-left: 289px;"><a href="zmiana_hasla.php">Zmień hasło</a></span></p>
</div>   
</div>

    
    
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid" style="background-color: #EEEEEE;">
  <h2 class="text-center">KONTAKT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Skontaktuj się z nami a odpowiemy w ciągu 24 godzin.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Kielce, PL</p>
      <p><span class="glyphicon glyphicon-phone"></span> +41 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> kielce@gmail.com</p>
    </div>
      <form>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" name="name" placeholder="Imie" type="text" required>
        </div>
        <div class="col-sm-6 form-group" >
          <input class="form-control" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" name="comments" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Wyślij</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

<div id="googleMap" style="height:50px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5038.418288809284!2d20.647828997373246!3d50.84581124364562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68648106e01e961c!2sBiedronka!5e0!3m2!1spl!2spl!4v1481105150662" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

