		<head>
			<meta charset='utf-8'/><title>Vegan Heaven !</title>
			<link rel='stylesheet' href='vues/StyleGraphique.css'>
		</head>
		<div class="header"><h1 class="adresse">Vegan Heaven !</h1><p><h2 class="slogan">Besoin d'un bon avocat ?</h2></p>
		<nav>
            <ul class="menu">
				<div class="section">
				<ul id="Connex">
					<p><li class="fondLogo"><a href="Accueil.php"><img class="logo" src="vues/images/VeganHeavenCherry_thumb.png" /></a>
						<?php
						if(isset($_SESSION['member']))
						{
						echo"<br /><a id='connexion' href='deconnexion.php'>Deconnexion</a></p>";
						}
						else
						{
							echo"<br /><a id='connexion'>Connexion</a></p>
						
							<ul>
									<li>		
											<form action='commun/modeles.php' class='form-container'method='POST'>
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
                <li class="men"><a href="Accueil.php">Accueil</a></li>
                <li class="men"><a href="Recherche.php">Voir les offres</a></li>
					<ul id="menu-deroulant"class="menu">
							<li class="men"><a href="Apropos.php">A propos</a>
								<ul>
									<p><li class="MenuDeroulant"><a href="AideEnligne.php">Aide en ligne</a></li>
									<li class="MenuDeroulant"><a href="FAQ.php">FAQ</a></li>
									<li class="MenuDeroulant"><a href="Contacts.php">Contacts</a></li></p>
								</ul>
							</li>
							<li class="men"><a href="MonEspace.php">Mon espace</a>
								<ul>
									<p>
									<li class="MenuDeroulant"><a href="PageDeProfil.php">Page de profil</a></li>
									<li class="MenuDeroulant"><a href="MonCompte.php">Mon compte</a></li>
									<li class="MenuDeroulant"><a href="MesTransactions.php">Mes transactions</a></li>
									<li class="MenuDeroulant"><a href="Deconnexion">Se déconnecter</a></li>
									</p>
								</ul>
							</li>
					</ul>
                <li class="men"><a href="Forum.php">Forum</a></li>
                <li class="men"><a href="ConnexionInscription.php">Inscription</a></li>
            </ul>
        </nav>
		</div>