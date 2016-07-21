<?php 
	include('auth.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<!-- acceuil/ article/ liste -->
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="blog.css" type="text/css" />
		
		
		<title>blog</title>
	</head>
	
    <body>
		
		<nav>
			
			<img src="logo_ACS.png"/>
			
			<ol>
				<li class="lolo"><a href="creation.php">création d'article</a></li>
			</ol>
			
			<!-- liste des article -->
			<aside class="liste">
				
				<h3>Auteurs</h3>
				<ul>
					
					
					<?php 
						$page="auteur"; 
						include('api.php'); 
					?>
				</ul>
				
				<h3>Catégories</h3>
				<ul>
					
					<?php 
						$page="categorie"; 
						include('api.php'); 
					?>
					
					
				</ul>
			</aside>
			
			
			<button onclick="window.location.href='cookie.php?p=logout'" type="submit" class="envoi" id="sendBtn">
			
			Déconnection
			
			</button>
			
			
		</nav>
		<!-- fin de liste -->
		
		<section class="article">
			
			<div id="showResult">
				
				
				<?php 
					$page=""; 
					include('api.php'); 
				?>
				
				
			</div>
			
		</section>
		
		
		
		
		
		
		<script type="text/javascript" src="jquery/jquery-2.2.3.min.js"></script><!--Appeler JQUERY avec SRC ! -->
		<script type="text/javascript">
			function filterCat(idCat){//Crée une nouvelle fonction pour filtrer les catégories
				
				$.ajax({//Appel AJAX avec en url l'API
					url : 'api.php?id_cat='+idCat,
					type : 'POST',
					dataType : 'html',
					
					complete : function(resultat, statut){
						$( '#showResult' ).html(resultat.responseText);
						
					}
					
				});
				
				
			}
		</script>	
		
	</body>
	
</html>						