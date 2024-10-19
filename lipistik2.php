<?php
// Charger le contenu du fichier HTML
$htmlContent = file_get_contents('lipistik.html');

// Créer un nouvel objet DOMDocument
$dom = new DOMDocument;

// Charger le HTML dans l'objet DOMDocument
@$dom->loadHTML($htmlContent);

// Utiliser DOMXPath pour effectuer des requêtes XPath
$xpath = new DOMXPath($dom);

// Récupérer le contenu des balises div avec l'attribut name
$nom = $xpath->query('//div[@name="nam"]')->item(0)->nodeValue;
$prix = $xpath->query('//div[@name="pri"]')->item(0)->nodeValue;

 #inclure le fichier de connexion
 require("connexion.php");
 # la requête Sql d'ajout
 $requete = "insert into produit (nom, prix) value ('$nom', '$prix')";
 # Exécuter la requête Sql d'ajout
 $resultat = $connexion->exec($requete);

 # Vérifier le résultat de la requête Sql d'ajout
 if($resultat)
 header("Location:corbille.php"); //rediriger vers la page affiche.php
 else
 echo "echec d'ajout d'un nouveau produit";
?>

