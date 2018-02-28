<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$imie = $_POST['nameToSend'];
$numerProduktu = $_POST['productToSend'];
$tresc = $_POST['commentsToSend'];

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "maciej373.372@gmail.com";
$mail->Password = "";



$mail->From         = 'donotreply@mydomain.com'; //od kogo jest wysylane
$mail->FromName     = 'PROFI Kielce'; //nazwa firmy

$mail->AddAddress('maciej373.373@gmail.com', 'co kolwiek');  // odbiorca
$mail->IsHTML(true);
$mail->Subject = 'tytul maila'; //tytul maila
$mail->WordWrap = 50;
$mail->Body = "Zapytanie od klienta<br />Imie: $imie<br  />Numer produktu: $numerProduktu<br />Numer telefonu lub email: $numerTelefonu<br />Tresc zapytania: $tresc";
$mail->AltBody = "Zapytanie od klienta Imie: $imie mail uzytkownika produktu: $numerProduktu Tresc zapytania: $tresc";

if(!$mail->Send()) {
   echo 'Wystąpił błąd. Prosimy spróbować ponownie później';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}



echo 'Wiadomość została wysłana. Wkrótce się z tobą skontaktujemy';
?>