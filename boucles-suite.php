<!DOCTYPE html> 

<html> 
<head> 
<title>boucles simples</title> 
</head> 
<body> 

<?php

function compter_dizaine ($maximum){
    $compteur_dizaine = 1;
    while ($compteur_dizaine <= $maximum){
      echo "$compteur_dizaine<br>";

    if ($compteur_dizaine % 100 == 0)
         echo "Ceci est une centaine<br>";

    else if ($compteur_dizaine % 10 == 0)
         echo "Ceci est une dizaine<br>";
        
    $compteur_dizaine = $compteur_dizaine +1;
    }
}

compter_dizaine (100);

?>

</body>
</html>