<?php
 //se connecter à la base de données 
 
 $bdd = new PDO('mysql:host=localhost; dbname=mmi20b03; charset=utf8', 'mmi20b03', '@Cressonn1034');

 //récupérer les infos dans l'url (pseudo et message)
 $pseudo = $_GET['pseudo'];
 $message = $_GET['message'];

 //préparer la requête SQL d'ajout dans la table "chat"
 $requete="INSERT INTO chat(pseudo,message) VALUES('$pseudo', '$message')";

 //executer la requete SQL d'ajour
 $bdd->query($requete);

 //afficher un message pour dire que c'est ok
 echo "super vous venez de sauver votre message";

 ?>