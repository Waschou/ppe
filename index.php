<?php
	include('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Accueil Agrur</title>
		<meta charset="UTF-8" />
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div class="conteneur">
		<div class="banniere"></div>
		<?php
		if(isset($_SESSION['status']))
		{
			echo 'vous est connecté en tant que '.$_SESSION['status']; ?> <a href="connexion.php"> Se deconnecter </a><br/><br/><?php
				
			if($_SESSION['status'] == 'Producteur')
			{
				?>
				
				<div class="menu">
					<div class="barremenu1">
						<a href="#">Consulter l'ensemble de son profil</a>
					</div>
					<div class="barremenu">	
						<a href="#">Ajouter</a>
						<a href="#">Modifier</a>
						<a href="#">Supprimer</a>
						<a href="#">Associer un verger</a>
						<a href="#">Fournir informations</a>
						<a href="connexion.php">Se deconnecter</a>
					</div>
				</div>
				<?php							
			}
			elseif($_SESSION['status'] == 'Agrur')
			{
				?>
				<div class="menu">
					<ul>
						<li><a href="#">Consulter les informations d'une société</a></li>
						<li><a href="#">Donner les autorisations à une société</a></li>
						<li><a href="#">Afficher les commandes</a></li>
						<li><a href="#">Ajouter un bon de commande</a></li>
						<li><a href="#">Modifier un bon de commande</a></li>
						<li><a href="#">Supprimer un bon de commande</a></li>
					</ul>
				</div>
				<?php										 
			}
			else
			{
			
				echo 'probleme de status';
			
			}
		
		}
		else{
		
			echo 'Vous n\'êtes pas connecté. veuillez vous connecter.';
			?> <a href="connexion.php" > Connexion </a><?php
		
		}
		?>		
		</div>
		<div class="mention"></div>
	</body>
</html>