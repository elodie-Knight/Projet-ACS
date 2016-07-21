<?php

if(!isset($page)){

	$page = $_REQUEST["page"];

}




switch ($page) {

    case "auteur":
        $sql= "SELECT * FROM auteurs";
        $affichage_article = file_get_contents('affichage/auteur.html'); // Recuperation du te,plate pour atricle
        break;
    case "categorie":
        $sql= "SELECT * FROM categories";
        $affichage_article = file_get_contents('affichage/categorie.html'); // Recuperation du te,plate pour atricle
        break;
    
    default:
  		$sql = "SELECT articles.*, auteurs.nom, auteurs.prenom, categories.nom_categorie AS nom_categorie , DATE_FORMAT(`date`,'%b %d %Y %h:%i %p') as date_dif FROM articles, auteurs, categories WHERE (auteurs.id_auteurs = articles.id_auteurs ) AND (articles.id_categorie = categories.id_categorie)";
  		
  		if(isset ($_REQUEST["id_cat"])){ 
  			$sql.= " AND articles.id_categorie = ".$_REQUEST["id_cat"];

  		}

  		if(isset ($_REQUEST["id_aut"])){
  			$sql.= " AND articles.id_auteurs = ".$_REQUEST["id_aut"];
  		}	


		$affichage_article = file_get_contents('affichage/article.html'); // Recuperation du te,plate pour atricle

}

include('connect/datatBase.php'); // Inclusion des param de connexion a la BDD
include('connect/dbdriver.php'); // Gestion des requëtes qvec PDO
     
      
$html = "";


      for($i=0; $i < sizeof($data); $i++) // check toutes les lignes de la table articles
      	{
      		$article = $affichage_article; // initialise le affichage/dossier

	      		foreach ($data[$i] as $key => $value){ // pour chaque colonne du resultat de la requete, on remplace les key par la valeur dans le affichage

					$article = str_replace("{{".$key."}}", $value, $article);

      			}

			$html .= $article;
      
      
		}


echo $html;


?>
