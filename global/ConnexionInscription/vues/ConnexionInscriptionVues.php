<!DOCTYPE html>
<html>
<body>
		<head><meta charset="utf-8"/>
		<title>Vegan Heaven !</title>
		<link rel="stylesheet" href="../images-css/StyleGraphique.css">
		</head>
		
		<div class="header"><h1 class="adresse">Inscription et Connexion</h1><p><h2 class="slogan">Rejoignez-nous</h2></p>
		<nav>
            <ul class="menu">
				<div class="section">
				<ul id="Connex">
					<p><li class="fondLogo"><a href="../Index.php"><img class="logo" src="../images-css/images/VeganHeavenCherry_thumb.png" /></a>
						<br /><a id="connexion">Connexion</a></p>
							<ul>
									<li>		
											<form action="../ConnexionMembres/ConnexionMembres.php" class="form-container"method="POST">
												<div class="form-title">Pseudo</div>
												<input class="form-field" type="text" name="user" /><br />
												<div class="form-title">Mot de passe</div>
												<input class="form-field" type="password" name="pass" /><br />
												<div class="submit-container">
												<input class="submit-button" type="submit" value="Valider" />
												</div>
											</form>
									</li>
							</ul>
					</li>
				</ul>
				</div>
                <li class="men"><a href="../Index.php">Accueil</a></li>
                <li class="men"><a href="../Recherche/Recherche.php">Voir les offres</a></li>
					<ul id="menu-deroulant"class="menu">
							<li class="men"><a href="Apropos/Apropos.php">A propos</a>
								<ul>
									<p><li class="MenuDeroulant"><a href="../AideEnligne/AideEnligne.php">Aide en ligne</a></li>
									<li class="MenuDeroulant"><a href="FAQ/FAQ.php">FAQ</a></li>
									<li class="MenuDeroulant"><a href="Contacts/Contacts.php">Contacts</a></li></p>
								</ul>
							</li>
							<li class="men"><a href="MonEspace.php">Mon espace</a>
								<ul>
									<p><li class="MenuDeroulant"><a href="../PageDeProfil/PageDeProfil.php">Page de profil</a></li>
									<li class="MenuDeroulant"><a href="../MonCompte/MonCompte.php">Mon compte</a></li>
									<li class="MenuDeroulant"><a href="../MesTransactions/MesTransactions.php">Mes transactions</a></li>
									<li class="MenuDeroulant"><a href="../Deconnexion/Deconnexion">Se déconnecter</a></li></p>
								</ul>
							</li>
					</ul>
                <li class="men"><a href="../Forum/Forum.php">Forum</a></li>
                <li class="men"><a href="ConnexionInscription.php">Inscription</a></li>
            </ul>
        </nav>
		</div>
		<section>
			<form action="../InformationMembres/InformationMembres.php" method="POST">
			<legend><h2>Inscription</h2></legend>
				<label>Pseudo: <input type="text" name="username"/></label>				
				<label>Adresse : <input type="text" name="Adresse"/></label>
				<label>Date de naissance : <input type="int" name="DateDeNaissance"/></label>
				<label>Téléphone mobile: <input type="int" name="TelephoneMobile"/></label>
				<label>Téléphone fixe: <input type="int" name="TelephoneFixe"/></label>
				<label>Adresse email: <input type="string" name="AdresseEmail"/></label>
				<label>Mot de passe: <input type="password" name="password"/></label>			
				<label>Confirmation Mot de passe : <input type="password" name="repeatpassword"/></label>
			<p><input type="submit"class="controls"/></p>
			</form>
		</section>
     </body>

    </html>