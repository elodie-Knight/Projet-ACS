<?php
	// recupere les valeurs des input du formulaure categories et les envois à la base de donnée
	include('datatBase.php');  //inclue sql connection phpmyadmin
	
	$nom_categorie = $_REQUEST['nom_categorie'];
	
	$errorMsg ="Vous n'avez pas rempli le champ" ;
	$error = false;
	
	if($nom_categorie == "")
	{
		$error = true;
		$errorMsg = $errorMsg."<br/> nom_categorie";
		
	}
	
	if($error == true){
		
		echo $errorMsg; 
		
	}
	
	else{
		
		
		// envois les valeurs à la table categories
		$sql = "INSERT INTO categories (nom_categorie) VALUES('$nom_categorie')";
			
			
		// connection
		$pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password); 
		$query = $pdo->prepare($sql);
		$query->execute();
		
		
		
		
	}
	
?>

