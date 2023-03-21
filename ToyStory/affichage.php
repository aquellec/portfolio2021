<?php
 //se connecter à la base de données 
 
 $bdd = new PDO('mysql:host=localhost; dbname=mmi20b03; charset=utf8', 'mmi20b03', '@Cressonn1034');

 //préparer une requête pour récupérer tout ce qui a été mis dans la table chat
 $requete="SELECT * FROM chat ORDER BY id DESC LIMIT 10";
 //$requete="SELECT * FROM chat LIMIT 10"; (les 10 premiers)
 //$requete="SELECT * FROM chat";

 //executer la requete
 $resultat=$bdd->query($requete);

 //pour chaque message dans la table, l'afficher...
 /*
 while($ligne = $resultat->fetch()){
     echo $ligne['pseudo']. ">". $ligne['message']."</br>";
 }
 
 */




 //astuce pour mettre dans l'ordre
 $tous=""; //rien mettre dans la variable pour l'instant

 while( $ligne = $resultat->fetch() ){ 
    $tous=$ligne['pseudo']. ">". $ligne['message']."</br>".$tous;
    }
    echo $tous;

 ?>