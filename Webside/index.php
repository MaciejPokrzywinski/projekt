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
  
  #log {
          font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
      float: left;
      margin-left: 20%; 
          
      }
  #reg {
          font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
      margin-left: 23%;
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
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-color: #EEEEEE;
      color: black;
      padding: 100px 25px;
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
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">O NAS</a></li>
        <li><a href="#services">USŁUGI</a></li>
        <li><a href="#pricing">ZALOGUJ</a></li>
        <li><a href="#pricing">DOŁĄCZ DO NAS</a></li>
        <li><a href="#contact">KONTAKT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Internetowa Ksiązka Telefoniczna</h1>
  <p>Specjalizujemy się w numerach!</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Adres E-mail" required>
    <button type="submit" class="btn btn-danger">Subskrybuj</button>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Trochę o naszej firmie</h2><br>
      <h4>Oferta skierowana jest przede wszystkim do osób ceniących sobie wygodę. Zdajemy sobie sprawę, że kombinacja wygody i mobilności powoduje, że nasza oferta trafi do wyżej wymienionych klientów. Niemniej jednak gdy ta grupa jest newralgicznym punktem naszej strategii marketingowej, to staramy się nie zaniedbywać osób opornych na nowe technologie.<br><br> Głównymi celami projektu są:<br><br>
          -	Ułatwienie procesu zarządzania danymi<br>
          <br>
          -	Skuteczne zaznaczenie obecności firmy na rynku
        </h4>
      <h3>Założenia:</h3><br>
        <p>- wygoda</p>
        <p>- mobilność</p>
        <p>- bezpieczeństwo</p>
      <br>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Nasz cel</h2><br>
      <h4><strong>MISJA:</strong> Naszym celem jest udosknalanie książki telefonicznej.</h4><br>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center" >
  <h2>USŁUGI</h2>
  <h4>Co oferujemy</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>WSPARCIE</h4>
      <p>Wspieramy naszych użytkowników 24/7.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>PIENIĄDZE</h4>
      <p>Chcesz zarabiać razem z nami? Zapytaj o wstawienie reklamy twojej strony.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>BEZPIECZEŃSTWO</h4>
      <p>Każde konto jest chronione przez najbardziej zaawansowane technologie zabezpieczeń.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>EKOLOGIA</h4>
      <p>Używamy tylko biodegradowalnego html'a</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTYFIKATY</h4>
      <p>Posiadamy certyfikaty <span style="font-weight: bold;">Energy Star,<br> ISO 14001 i ISO 9001:2008</span></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">CIĘŻKA PRACA</h4>
      <p>Każdy z naszych pracowników oferuje profesjonalne podejście do problemów i użytkowników.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->


<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid" style=" background-color: #f6f6f6;">
  <div class="text-center">
    <div><span id="log">Zaloguj</span><span id="reg">Dołącz do nas</span></div>
  </div>
    <div class="form">
  <form class="form-horizontal" style="float: left; margin-left: 15%;" action="logowanie.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="login" placeholder="Wpisz login" name="login" required>
      </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-2" for="password">Hasło:</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" id="password" placeholder="Wpisz hasło" name="haslo" required>
      </div>
    </div>
    <div class="checkbox" style="margin-left: 19%;">
      <label class="t1-label remember">
        <input type="checkbox" value="1" name="remember_me" checked="checked">
        <span>Zapamiętaj mnie</span>
      </label>
    </div>
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" formaction="logowanie.php" formmethod="POST" style="margin-left: 25%; margin-top: 10%;">Loguj</button>
        </div>
    </div>
        </form>
        <?php
	if(isset($_COOKIE['blad_logowania'])){
		echo $_COOKIE['blad_logowania'];
		setcookie('blad_logowania','',time()-3601,'/');
	}
	?>

<form class="form-horizontal" style="float: right; margin-right: 15%; " action="rejestracja.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="name">Imię:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" placeholder="Wpisz imię" name="imie" required>
      </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-4" for="surname">Nazwisko:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="surname" placeholder="Wpisz nazwisko" name="nazwisko" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="login">Login:</label>
      <div class="col-sm-7">
        <input type="login" class="form-control" id="email" placeholder="Wpisz login" name="login" required>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-7">
        <input type="email" class="form-control" id="email" placeholder="Wpisz email" name="email" required>
        </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-4" for="password">Hasło:</label>
      <div class="col-sm-7">
          <input class="form-control" type="password" id="password" placeholder="Wpisz hasło" name="haslo" required><div>

</div>
      </div>

    
     <div class="checkbox" style="margin-left: 38%;">
      <label class="t1-label remember">
        <input type="checkbox" value="0" required>
        <span>Akceptuje <a href="Warunki.html" target="_blank">warunki</a></span>
      </label>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" formaction="rejestracja.php" formmethod="POST" style="margin-left: 38%; margin-top: 10%; margin-bottom: 3%;">Rejestruj</button>
        </div>
    </div>
    <?php
	if(isset($_COOKIE['blad_rejestracji'])){
		echo $_COOKIE['blad_rejestracji'];
		setcookie('blad_rejestracji','',time()-3601,'/');
	}
	?>
      </div>
  </form>
</div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">KONTAKT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Skontaktuj się z nami a odpowiemy w ciągu 24 godzin.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Kielce, PL</p>
      <p><span class="glyphicon glyphicon-phone"></span> +41 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> kielce@gmail.com</p>
    </div>
      <form role="form" method="post">
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
          <button class="btn btn-default pull-right send"  type="submit">Wyślij</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(50.8450786, 20.6448266);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

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

