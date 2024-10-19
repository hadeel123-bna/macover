<?php
#récupérer l'id de l'élément à supprimer
 $id = $_GET['id'];
require("connexion.php");
# requete
$requete =" delete from produit where id = $id";
#exécuter
$resultat = $connexion->exec($requete);
if($resultat)
 header("Location:corbille.php");
else
 echo "echec de suppression";
?>