<?php
# Définition des paramètres de connexion
 $servername = "localhost"; //adresse du serveur de la Base de données
 $username = "root"; //utilisateur de la Base de données
 $password = ""; //mot de passe de l’utilisateur
 $base = "macover"; //nom de la base de données
# Création de l’objet connexion
 $connexion = new PDO("mysql:host=$servername;dbname=$base",$username,$password);

?>