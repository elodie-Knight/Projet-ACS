 <?php
// fichier pour recuperer les données de la table auteurs
	include('datatBase.php'); // inclue sql connection phpmyadmin


  // Pilote de connexion à la base et exécution de la requête SQL:
    			$pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=utf8;",$username,$password); 
    			
  // Fin de l'exécution

 
  $id_auteurs = '';
  

 // va récuperer les données de la table auteurs
  $query = $pdo->prepare('SELECT * FROM auteurs');
  $query->execute();
  $data = $query->fetchAll();
	// boucle qui tcheck les données de la table auteurs et les affiches
  for($i=0; $i < sizeof($data); $i++)
    {
        $id_auteurs .= "<option value=".$data[$i]['id_auteurs'].">".$data[$i]['nom']."</option>";
    }
	
	echo $id_auteurs;
	
	
?>