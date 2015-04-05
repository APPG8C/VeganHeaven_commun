<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Vegan Heaven !</title>
		<link rel="stylesheet" href="../images-css/StyleGraphique.css">
	</head>
	<body>
		<div class="header"><h1 class="adresse">Voici les offres</h1><p><h2 class="slogan">Fruit-yez, Pauvre fous !</h2></p>
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
                <li class="men"><a href="Recherche.php">Voir les offres</a></li>
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
                <li class="men"><a href="../ConnexionInscription/ConnexionInscription.php">Inscription</a></li>
            </ul>
        </nav>
		</div>
			<div id='divGlobal'>
				<div id="rechercheOffre">
					<legend><h2> Recherchez une catégorie </h2></legend> 
					<form action='RecherchesOffres.php' class='Formulaire-recherche'method='POST'>
						<div class='form-title'>catégories: 
						</div>
						<input class='form-field' type='text' name='catégories' /><br />
						<div class='form-title'>fruits/légumes: 
						</div>
						<input class='form-field' type='text' name='categorie-fruits' /><br />
						<div class='submit-container'>
						<input class='submit-button' id='submit-button-search' type='submit' value='rechercher' />				
						</div>
					</form>
				</div>
			
				<div id="MenuCentre">
					<h2 id='recherche-titre'> Nos catégories </h2>
					<ul class="MenuCategorie">
						<li ><a class="liste-categorie" href="#pepins">Fruits à pépins</a></li>
						<li ><a class="liste-categorie" href="#noyaux">Fruits à noyaux</a></li>
						<li ><a class="liste-categorie" href="#exotique">Fruits exotiques</a></li>
						<li ><a class="liste-categorie" href="#coque">Fruits à coques</a></li>
						<li ><a class="liste-categorie" href="#finesHerbes">Fines Herbes</a></li>
						<li ><a class="liste-categorie" href="#petitsFruits">Petits fruits</a></li>
						<li ><a class="liste-categorie" href="#baies">Baies</a></li>
						<li ><a class="liste-categorie" href="#légumes"> légumes</a></li>
					</ul>
				</div>
			</div>
	</body>
</html> 
