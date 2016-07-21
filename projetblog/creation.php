<?php 
	include('auth.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="blog.css" type="text/css" />
		<?php
			
			include('connect/datatBase.php'); // inclue sql
			
			
			
			?>
		
		<title>blog</title>
		
	</head>
	
    <body>
		
		
		<nav>
			<img src="logo_ACS.png"/>
			
			<ol>
				<li class="lolo"><a href="index.php">Acceuil</a></li>
			</ol>
		</nav>
		
		<div class="formulaire">
		
			<form method="post" action="formulaire/auteur.php" class="auteur" name="auteur" id="auteurs">
				<FIELDSET>
					<h3>Auteur<h3>
						<div>
							<input placeholder="Prénom" class="prenom" type="text" name="prenom" />
						</div>
						
						<div>
							<input  placeholder="Nom" class="nom" type="text" name="nom"/>
						</div>
						
						<div>
							<input  placeholder="Email" class="email" type="email"  name="email"/>
						</div>
					</FIELDSET>
					<div class="">
						<button id="reset" type="reset">Annuler</button>
						<button type="submit"  id="sendBtn">Envoyer</button>
					</div>
					</form>
					
					<form method="post" action="formulaire/article.php"  name="article" id="articles"> 	
								<FIELDSET>
									<h3>Article<h3>
										
										<div>
											<label>Auteur : </label>
											<select name="id_auteurs" class="id_auteurs">
												
												<?php 
												include('formulaire/select.php');
													 ?>
											</select>
											
											<label>Catégories : </label>
											<select name="id_categorie" class="id_categorie">
												
												<?php 
													include('formulaire/select1.php');
													 ?>
											</select>
										</div>
										
										<div>
											<input placeholder="titre"  type="text" name="titre" />
										</div>
										
										<div>
											<input  placeholder="Date"  type="date" name="date" />
										</div>
										
										<div>
											<textarea rows="10" name="texte" class="texte" placeholder="Votre article"></textarea>
										</div>
									</FIELDSET>
									<div class="">
										<button id="reset" type="reset">Annuler</button>
										<button type="submit" id="sendBtn">Envoyer</button>
									</div>
									</form>
					
					<form method="post" action="formulaire/categorie.php" name="nom_categorie" class="nom_categorie" id="categories">
						<FIELDSET>
							<h3>Catégories<h3>
								<div>
									<input placeholder="Catégories" class="nom_categorie" type="text" name="nom_categorie" />
								</div>
							</FIELDSET>
							<div class="">
								<button id="reset" type="reset">Annuler</button>
								<button type="submit" id="sendBtn">Envoyer</button>
							</div>
							</form>
							
							
								</div>
							</body>
						</html>						