<!DOCTYPE html> 

<html> 
<head> 
<title>affichage</title> 
</head> 
<body> 

<?php

function afficher_titre ($nom_produit){
    echo "<h1>Fiche produit :$nom_produit</h1>";
}


function afficher_description ($couleur, $prix){
    echo "Couleur : $couleur, Prix: $prix";
}


function afficher_produit ($nom_produit,$couleur,$prix,$disponible){

    if ($disponible == true){

    afficher_titre ($nom_produit); 
    afficher_description ($couleur,$prix);}
    
    if ($disponible == false){
    echo "<p> Le produit  $nom_produit n'est malheuresement plus disponible </p>";}
}


?> 
</body>
</html>
