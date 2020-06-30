<!DOCTYPE html> 

<html> 
<head> 
<title>boucles simples</title> 
</head> 
<body> 

<?php


function compter ($maximum) {
    $compteur = 1;
    while ($compteur < $maximum){ 
        echo "$compteur<br>"; 
        $compteur = $compteur + 1;
    }
}	
compter (10);

function compteur_for ($maximum) {

    for ($compteur = 1; $compteur < $maximum; $compteur = $compteur +1)
{
    echo "$compteur<br>";
}
}
compteur_for (10);

?>

</body>
</html>