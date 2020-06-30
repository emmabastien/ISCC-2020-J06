<!DOCTYPE html> 

<html> 
<head> 
<title>Test fonctions PHP</title> 
</head> 
<body> 


<?php 
include ('affichage.php');
?>

<?php 
include ('gestion-produit.php');
?> 

<?php 

$nom_produit = "t-shirt femme";

$couleur = "rouge"; 

$prix = 15.50;

$disponible = true;

$quantite = 10;

$nb_ajout = 5;

$nb_achat = 5;

afficher_produit ($nom_produit, $couleur, $prix, $disponible);
update_dispo ($quantite);

$C = update_dispo ($quantite);
echo "la valeur C est $C";

restockage ($quantite, $nb_ajout);

achat ($quantite, $nb_achat);

?>

<?php 
afficher_produit ($nom_produit,$couleur,$prix,$disponible);

achat ($quantite,$nb_achat);

update_dispo ($quantite);

afficher_produit ($nom_produit,$couleur,$prix,$disponible);

achat ($quantite, $nb_achat);

update_dispo ($quantite);

afficher_produit ($nom_produit,$couleur,$prix,$disponible);

restockage ($quantite, $nb_ajout);

update_dispo ($quantite);

afficher_produit ($nom_produit, $couleur,$prix,$disponible);

?> 

</body>
</html>