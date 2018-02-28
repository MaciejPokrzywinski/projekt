<?php

if (!isset($_SESSION['zalogowany'])){
  	session_destroy();
    setcookie("grupa0", time()-4000);
    setcookie("grupa1", time()-4000);
    setcookie("grupa2", time()-4000);
    setcookie("grupa3", time()-4000);
    setcookie("grupa4", time()-4000);
    setcookie("grupa5", time()-4000);
    setcookie("grupa6", time()-4000);
    setcookie("grupa7", time()-4000);
    setcookie("grupa8", time()-4000);
	setcookie("grupa9", time()-4000);
	setcookie("grupa0id", time()-4000);
    setcookie("grupa1id", time()-4000);
    setcookie("grupa2id", time()-4000);
    setcookie("grupa3id", time()-4000);
    setcookie("grupa4id", time()-4000);
    setcookie("grupa5id", time()-4000);
    setcookie("grupa6id", time()-4000);
    setcookie("grupa7id", time()-4000);
    setcookie("grupa8id", time()-4000);
	setcookie("grupa9id", time()-4000);
    
	setcookie("blad_dodania_grupy", time()-4500);
	setcookie ("imie", "", time() - 4500);
	setcookie ("nazwisko", "", time() - 4500);
	setcookie ("id", "", time() - 4500);
	setcookie ("email", "", time() - 4500);
    header("Location: index.php", "refresh: 1;" );
}else {
	session_destroy();
    session_destroy();
    setcookie("grupa0", time()-4000);
    setcookie("grupa1", time()-4000);
    setcookie("grupa2", time()-4000);
    setcookie("grupa3", time()-4000);
    setcookie("grupa4", time()-4000);
    setcookie("grupa5", time()-4000);
    setcookie("grupa6", time()-4000);
    setcookie("grupa7", time()-4000);
    setcookie("grupa8", time()-4000);
	setcookie("grupa9", time()-4000);
	setcookie("grupa0id", time()-4000);
    setcookie("grupa1id", time()-4000);
    setcookie("grupa2id", time()-4000);
    setcookie("grupa3id", time()-4000);
    setcookie("grupa4id", time()-4000);
    setcookie("grupa5id", time()-4000);
    setcookie("grupa6id", time()-4000);
    setcookie("grupa7id", time()-4000);
    setcookie("grupa8id", time()-4000);
	setcookie("grupa9id", time()-4000);
    
	setcookie("blad_dodania_grupy", time()-4500);
	setcookie ("imie", "", time() - 4500);
	setcookie ("nazwisko", "", time() - 4500);
	setcookie ("id", "", time() - 4500);
	setcookie ("email", "", time() - 4500);
    header("Location: wylogowanie.html", "refresh: 1;");
}



?>