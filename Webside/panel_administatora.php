<html>
<head>
    <meta charset="utf-8">
	<title>Panel zagłady świata</title>
    <style>
.tlo {
background-image: url(tlo.jpg)            
        }
    </style>
</head>
<body class="tlo" >
    
    <center><iframe width="1820" height="1080" src="https://www.youtube.com/embed/XdXXK_rWrhc" frameborder="0" allowfullscreen></iframe></center>
	<?php
    echo "<h3><center><font color=\"white\">Panel administatora cię wita wielki imperatorze " . $_COOKIE['nazwisko'] ."</font></center></H3>";   
?>
    <center><form action="zeslanie_żniwiarzy1.php">
  <input type="submit" value="Ześlij żniwiarzy">
        </form></center>
    
     <center><form action="logout.php">
  <input type="submit" value="Odwołaj Apokalipse">
        </form></center>
</body>
</html>
