<!DOCTYPE html> 

<html> 
<head> 
<title>chaine</title> 
</head> 
<body> 

<?php

$str1 = "La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";

$a = strtolower ($str1);
echo "<p>$a</p>"; 

$b = strtoupper ($str1);
echo "<p>$b</p>"; 

$c = str_shuffle ($str1);
echo "<p>$c</p>";

$d = str_replace("la", "LA", $str1);
echo "<p>$d </p>";

$e = substr ($str1);
echo "<p>$e</p>";

$f = strlen ($str1);
echo "<p> La chaine str1 contient $f caractères </p>";

$g = str_word_count ($str1);
echo "<p> La chaine str1 contient $g mots </p>";


?>

</body>
</html>