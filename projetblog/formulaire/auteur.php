<?php
	// recupere les valeurs des input du formulaure auteur et les envois à la base de donnée de la table auteurs
	include('datatBase.php'); /* inclue sql connection phpmyadmin */

	$nom = $_REQUEST['nom'];
	$prenom = $_REQUEST['prenom'];
	$email = $_REQUEST['email'] ;
	
	
	
	
	$errorMsg ="Vous n'avez pas rempli les champs" ;
	$error = false;
	
	
	if($nom == "")
	{
		$error = true;
		$errorMsg = $errorMsg."<br/> nom";
		
	}
	if($prenom == "")
	{
		$error = true;
		$errorMsg = $errorMsg."<br/> prenom";
		
	}
	if($email == "")
    {
		$error = true;
		$errorMsg = $errorMsg."<br/> email";
		
	}
	
	
	if($error == true){
		
		echo $errorMsg; 
		
	}
	
	else{
		
		
		// envois les valeurs à la table auteurs
		$sql =  "INSERT INTO auteurs ( prenom, nom, email) VALUES('$prenom', '$nom', '$email')";
		 
		//connection
		$pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password); 
		$query = $pdo->prepare($sql);
		$query->execute();
		
		
	}
	
?>

