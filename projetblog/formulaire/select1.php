<?php
	// fichier pour recuperer les données de la table categories
	include('datatBase.php'); // inclue sql connection phpmyadmin
	
	
	// Pilote de connexion à la base et exécution de la requête SQL:
	$pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=utf8;",$username,$password); 
	
	// Fin de l'exécution
	
	
	$id_categorie = '';
	 // va récuperer les données de la table categories
	$query = $pdo->prepare('SELECT * FROM categories');
	$query->execute();
	$data2 = $query->fetchAll();
	// boucle qui tcheck les données de la table categories et les affiches
	for($i=0; $i < sizeof($data2); $i++)
    {
       $id_categorie .= "<option value=".$data2[$i]['id_categorie'].">".$data2[$i]['nom_categorie']."</option>";
	}
	echo $id_categorie;
	

	
	
	
?>