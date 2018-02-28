<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<div>
 Podaj nazwę nowej grupy:
<form action="dodanie_grupy1.php" method="POST">
<input type="text" placeholder="Nazwa grupy" name="nazwa_grupy" required><br>
<button type="submit">Utwórz grupe</button>    
        </form></div>
    <div>
    <form action="strona_uzytkownika.php">
        <button type="submit">Powrót do menu</button>
        </form>
    </div>
    <?php
if(isset($_COOKIE['blad_dodania_grupy'])){
		echo $_COOKIE['blad_dodania_grupy'];
		setcookie('blad_dodania_grupy','',time()-3601,'/');}
      ?>  
</body>
</html>