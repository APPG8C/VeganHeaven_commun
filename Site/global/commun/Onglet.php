<!DOCTYPE html>
<html>
<link rel='stylesheet' href='vues/StyleGraphique.css'>
<body>
		<head>
			<meta charset='utf-8'/><title>VeganHeaven !</title>
		</head>
		<div class="header">
			<h2 class="adresse">Vegan Heaven</h2>
		<nav>
            <ul class="menu">
                <li ><a class="men" href="globalControleur.php?page=Accueil">Accueil</a></li>
                <ul id="menu-deroulant"class="menu">
						<?php
						if(isset($_SESSION['member'])){
						echo"<li ><a class='men'>Mon espace</a>
							<ul>
								<p>
								<li><a class='MenuDeroulant' href='globalControleur.php?page=PageDeProfil'>Profil</a></li>
								<li><a class='MenuDeroulant' href='globalControleur.php?page=MonCompte'> Panier</a></li>
								</p>
							</ul>
						</li>";
						}
						?>
				</ul>
                <ul id="menu-deroulant"class="menu">
                <li ><a class="men" >Annonces</a>
                		<ul>
                			<p>
								<?php
								if(isset($_SESSION['member'])){
								echo"<li><a class='MenuDeroulant' href='globalControleur.php?page=CreationOffre'>Créer</a></li>";
								}
								?>
								<li><a class="MenuDeroulant" href="globalControleur.php?page=Recherche">Rechercher</a></li>
							</p>
                		</ul>
                </li>
                </ul>
				
                <li ><a class="men" href="globalControleur.php?page=Forum">Forum</a></li>
				<ul id="menu-deroulant"class="menu">
					<li ><a class="men">Aide</a>
						<ul>
							<p>
							<li><a class="MenuDeroulant" href="globalControleur.php?page=FAQ">A propos</a></li>
							<li><a class="MenuDeroulant" href="globalControleur.php?page=Contacts">Contacts</a></li>
							</p>
						</ul>
					</li>
				</ul>
				<div class="section" >
				<ul id="Connex">
					<p><li class="fondLogo"><a href="globalControleur.php?page=Accueil"><img src="vues/images/VeganHeavenCherry_thumb.png" /></a>
						<?php
						include('Fonction.php');
						if(isset($_SESSION['member']))
						{
						echo"<br/><a id='connexion' href='globalControleur.php?page=Deconnexion'>Deconnexion</a></p>";
						}
						else
						{
							echo"<br/><span id='connexion'>Connexion</span> /<span><a id='inscript' href='globalControleur.php?page=ConnexionInscription'> Inscription</a></span></p>
						
							<ul>
									<li>		
											<form action='globalControleur.php?page=Accueil' class='form-container'method='POST'>
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
            </ul>
        </nav>
        <div class="rechercheMenu">
        	<form action='globalControleur.php?page=Recherche' class='formSearch' method='POST'>
					<input class='inputSearch' type="text" name="rechercheMenu" placeholder="Un mot clé, exemple: orange ou échange "  />
					<input class='buttonSearch'  type='submit' value='Rechercher' />
					<?php
					if(isset($_SESSION['member']))
					{
					echo"
						<span class='bouttonPanier'><a class='LogoPanier' href='globalControleur.php?page=MonCompte'> <img src='vues/images/panier.gif' width='30px' height='30px'/></a></span>
						";
					}
					?>
			</form>
        </div>
	</div>
<?php

if($membreConnecte)
{
	echo"
		<script>
			alert('Bonjour, $user');
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