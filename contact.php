<?php
 #récupérer les inputs
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 #inclure le fichier de connexion
 require("connexion.php");
 # la requête Sql d'ajout
 $requete = "insert into contact (name, email, message) value ('$name', '$email', '$message')";
 # Exécuter la requête Sql d'ajout
 $resultat = $connexion->exec($requete);

 # Vérifier le résultat de la requête Sql d'ajout
 if($resultat)
 header("Location:acceuil.html"); //rediriger vers la page affiche.php
 else
 echo " echec d'ajout d'un nouveau message ";
?>
