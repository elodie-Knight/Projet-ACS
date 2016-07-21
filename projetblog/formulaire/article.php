<?php
	// recupere les valeurs des input du formulaure article et les envois à la base de donnée
include('datatBase.php'); /* inclue sql la connection phpmyadmin */

	$titre = $_REQUEST['titre'] ;
	$date = $_REQUEST['date'];
	$texte =$_REQUEST['texte'] ;
	$id_auteurs = $_REQUEST['id_auteurs'];
	$id_categorie =$_REQUEST['id_categorie'] ;
	
	
	
	$errorMsg ="Vous n'avez pas rempli les champs" ;
	$error = false;
	
	if ($titre == "")
    {
		$error = true;
		$errorMsg = $errorMsg."<br/> titre";
		
		
	}
	if ($date == "")
	{
		$error = true;
		$errorMsg = $errorMsg."<br/> date";
	}
	
    if($texte == "")
    {
		$error = true;
		$errorMsg = $errorMsg."<br/> texte";
		
	}
	
	if($id_auteurs == "")
    {
		$error = true;
		$errorMsg = $errorMsg."<br/> auteurs";
		
	}
	
	if($id_categorie == "")
    {
		$error = true;
		$errorMsg = $errorMsg."<br/> categorie";
		
	}
	
	
	if($error == true){
		
		echo $errorMsg; 
		
	}
	
	else{
		// envois les valeurs à la table article avec id de la table auteurs et categories puisse qu'elles sont dans les selects / recupérer par les fichiers select et select1
		$sql = "INSERT INTO articles (titre, date, texte, id_auteurs, id_categorie) VALUES('$titre', '$date', '$texte', '$id_auteurs', '$id_categorie')";
		
		// connection
		$pdo = new PDO ("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password); 
		$query = $pdo->prepare($sql);
		$query->execute();
		
		
		
	}
	
?>
