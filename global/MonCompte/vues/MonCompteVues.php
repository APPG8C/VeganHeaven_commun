<!DOCTYPE html>
<html>
     <body>
	 <head><meta charset="utf-8"/>
		<title>Vegan Heaven !</title>
		<link rel="stylesheet" href="../images-css/StyleGraphique.css">
		</head>
		
		<div class="header"><h1 class="adresse">Vos échanges</h1><p><h2 class="slogan">Chacun y trouve son compte</h2></p>
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
									<li class="MenuDeroulant"><a href="MonCompte.php">Mon compte</a></li>
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
		<div class="TabTransactions " >
                <table >
                    <tr>
                        <td>
                            Fruit/Légume
                        </td>
                        <td >
                            Image
                        </td>
                        <td>
                            Description
                        </td>
						<td>
                            Echangé contre:
                        </td>
						<td>
                            Prix fixé:
                        </td>
						<td>
                           Supprimer
                        </td>
                    </tr>
                    <tr>
                        <td >
                            element 1
                        </td>
                        <td>
                            element 1
                        </td>
                        <td>
							element 1
                        </td>
						<td >
                            element 1
                        </td>
						<td >
                            element 1
                        </td>
						<td >
                            element 1
                        </td>
                    </tr>
                    <tr>
                        <td >
                            element 2
                        </td>
                        <td>
                            element 2
                        </td>
                        <td>
                            element 2
                        </td>
						<td>
                            element 2
                        </td>
						<td>
                            element 2
                        </td>
						<td>
                            element 2
                        </td>
                    </tr>
                    <tr>
                        <td >
                            element 2
                        </td>
                        <td>
                            element 2
                        </td>
                        <td>
                            element 2
                        </td>
						<td>
                            element 2
                        </td>
						<td>
                            element 2
                        </td>
						<td>
                            element 2
                        </td>
                    </tr>
                    <tr>
                        <td >
                            element 3
                        </td>
                        <td>
                            element 3
                        </td>
                        <td>
                            element 3
                        </td>
						<td>
                            element 3
                        </td>
						<td>
                            element 3
                        </td>
						<td>
                            element 3
                        </td>
                    </tr>
                </table>
				<p class="annonce"><a href="CreationOffre.php"type="submit"class="controls"/>Creér une annonce</a><p>
            </div>
     </body>
    </html>
