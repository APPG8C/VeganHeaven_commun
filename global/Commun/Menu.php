		<head>
			<meta charset='utf-8'/><title>VeganHeaven !</title>
			<link rel='stylesheet' href='vues/StyleGraphique.css'>
		</head>
		<div class="header"><h1 class="adresse">Vegan Heaven !</h1><p><h2 class="slogan">Besoin d'un bon avocat ?</h2></p>
		<nav>
            <ul class="menu">
				<div class="section">
				<ul id="Connex">
					<p><li class="fondLogo"><a href="Accueil.php"><img class="logo" src="vues/images/VeganHeavenCherry_thumb.png" /></a>
						<?php
						include('Fonction.php');
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
                <li ><a class="men" href="Accueil.php">Accueil</a></li>
                <ul id="menu-deroulant"class="menu">
                <li ><a class="men" href="Recherche.php">Voir les offres</a>
                		<ul>
                			<p>
                				<li><a class="MenuDeroulant" href="CategorieProduit.php">Recherche par catégorie de produit</a></li>
								<li><a class="MenuDeroulant" href="CategorieAgriculteur.php">Recherche par agriculteurs</a></li>
								<?php
								if(isset($_SESSION['member'])){
								echo"<li><a class='MenuDeroulant' href='CreationOffre.php'>Créer son offre</a></li>";
								}
								?>
							</p>
                		</ul>
                </li>
                </ul>
					<ul id="menu-deroulant"class="menu">
							<li ><a class="men" href="Apropos.php">A propos</a>
								<ul>
									<p>
									<li><a class="MenuDeroulant" href="FAQ.php">Aide en ligne</a></li>
									<li><a class="MenuDeroulant" href="Contacts.php">Contacts</a></li></p>
								</ul>
							</li>
							<?php
							if(isset($_SESSION['member'])){
							echo"<li ><a class='men'>Mon espace</a>
								<ul>
									<p>
									<li><a class='MenuDeroulant' href='PageDeProfil.php'>Page de profil</a></li>
									<li><a class='MenuDeroulant' href='MonCompte.php'>Mes Offres</a></li>
									<li><a class='MenuDeroulant' href='MesTransactions.php'>Mes transactions</a></li>
									</p>
								</ul>
							</li>";
							}
							?>
					</ul>
                <li ><a class="men" href="Forum.php">Forum</a></li>
				<?php
				if(!isset($_SESSION['member'])){
                echo"<li ><a class='men' href='ConnexionInscription.php'>Inscription</a></li>";
				}
				?>
            </ul>
        </nav>
		</div>