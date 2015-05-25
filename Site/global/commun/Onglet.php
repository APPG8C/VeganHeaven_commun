<<<<<<< Updated upstream:Site/global/commun/Onglet.php
<!DOCTYPE html>
<html>
<link rel='stylesheet' href='vues/StyleGraphique.css'>
<body>
		<head>
=======

	<head>
>>>>>>> Stashed changes:global/Commun/Onglet.php
			<meta charset='utf-8'/><title>VeganHeaven !</title>
		</head>
		<div class="header">
			<h2 class="adresse">Vegan Heaven</h2>
		<nav>
            <ul class="menu">
            	<?php
            	if(isset($_SESSION['ID']))
            	{
            		echo"
		            	<div class='sectionPanier'>
		            		<ul>

		            			<li class='LogoPanier'><a href='MonCompte.php'><img src='vues/images/Panier.gif' width='60px' height='60px'/></a>
		            			
		            		</ul>
		            	</div>";
            	}
            	?>
				<div class="section" >
				<ul id="Connex">
					<p><li class="fondLogo"><a href="Accueil.php"><img src="vues/images/VeganHeavenCherry_thumb.png" /></a>
						<?php
<<<<<<< Updated upstream:Site/global/commun/Onglet.php
=======
						/*if(isset($membreConnecte))
						{
							if(!$membreConnecte)
							{
								session_start();
							}
						}*/
	
>>>>>>> Stashed changes:global/Commun/Onglet.php
						include('Fonction.php');
						if(isset($_SESSION['member']))
						{
						echo"<br/><a id='connexion' href='deconnexion.php'>Deconnexion</a></p>";
						}
						else
						{
							echo"<br/><div id='connexion'>Connexion</div></p>
						
							<ul>
									<li>		
											<form action='Accueil.php' class='form-container'method='POST'>
												<div class='form-title'>Pseudo</div>
												<input class='form-field' type='text' name='user' /><br />
												<div class='form-title'>Mot de passe</div>
												<input class='form-field' type='password' name='pass' /><br />
												<div class='submit-container'>
												<input class='submit-button' type='submit' value='Valider' />
												</div>
											</form>
									</li>
							</ul>";
						}
						?>
					</li>
				</ul>
				</div>
                <li ><a class="men" href="Accueil.php">Accueil</a></li>
                <ul id="menu-deroulant"class="menu">
						<?php
						if(isset($_SESSION['member'])){
						echo"<li ><a class='men'>Mon espace</a>
							<ul>
								<p>
								<li><a class='MenuDeroulant' href='PageDeProfil.php'>Page de profil</a></li>
								<li><a class='MenuDeroulant' href='MonCompte.php'>Mes Offres</a></li>
								</p>
							</ul>
						</li>";
						}
						?>
				</ul>
                <ul id="menu-deroulant"class="menu">
                <li ><a class="men" href="Recherche.php">Voir les offres</a>
                		<ul>
                			<p>
								<?php
								if(isset($_SESSION['member'])){
								echo"<li><a class='MenuDeroulant' href='CreationOffre.php'>Créer son offre</a></li>";
								}
								?>
							</p>
                		</ul>
                </li>
                </ul>
				
                <li ><a class="men" href="Forum.php">Forum</a></li>
				<?php
				if(!isset($_SESSION['member'])){
                echo"<li ><a class='men' href='ConnexionInscription.php'>Inscription</a></li>";
				}
				?>
				<ul id="menu-deroulant"class="menu">
					<li ><a class="men" href="FAQ.php">A propos</a>
						<ul>
							<p>
							<li><a class="MenuDeroulant" href="Contacts.php">Contacts</a></li></p>
						</ul>
					</li>
				</ul>
            </ul>
        </nav>
		</div>
<?php

if($membreConnecte)
{
	echo"
		<script>
			alert('Content de vous revoir parmis nous, $user');
		</script>
		";
}
if($MauvaisMotdePasse)
{
echo"
	<script>
		alert('Mauvais Mot de Passe');
		prompt('Mot de passe oublié ?');
	</script>
	";
}
if($ChampsVide)
{
echo"
	<script>
		alert('Veuillez remplir les deux champs');
		prompt(Etes vous inscrit ?);
	</script>
	";   
}
?>		