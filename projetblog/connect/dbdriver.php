<?php	

	// Pilote de connexion à la base et exécution de la requête SQL:
		$pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=UTF8",$username,$password); 
		$query = $pdo->prepare($sql);
		$query->execute();
		$data = $query->fetchAll();
	// Fin de l'exécution

?>