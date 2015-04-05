<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8"/>
		<title>Mon profil</title>
		<link rel="stylesheet" href="../images-css/StyleGraphique.css">   
    </head>
	<body>
	<div class="header"><h1 class="adresse">Page de profil</h1><p><h2 class="slogan">Que chacun ramene sa fraise</h2></p>
		<nav>
            <ul class="menu">
				<div class="section">
				<ul id="Connex">
					<p><li class="fondLogo"><a href="../Index.php"><img class="logo" src="../images-css/images/ContactVeganHeavenCherry_thumb.png" /></a>
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
									<li class="MenuDeroulant"><a href="Contacts/images/Contacts.php">Contacts</a></li></p>
								</ul>
							</li>
							<li class="men"><a href="MonEspace.php">Mon espace</a>
								<ul>
									<p><li class="MenuDeroulant"><a href="PageDeProfil.php">Page de profil</a></li>
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
    <section id="bodyprofil"> 
        <div id="header">
            <h1 class="titles" id="votre">Ma page de profil</h1>
            <img id="image" src="../images-css/images/Contact.gif"/>
        </div>
        
        <div class="left" class="dive">
            <h2 class="titles">Moi</h2>
            <img id="photoleft" src="../images-css/images/Contact.gif"/>

            <h4 style="text-align:center">Date d'inscription: 23/03/2015</h4>

            <ol><h4>Mes fruits préférés</h4>
                <li>Les pommes</li>
                <li>Les oranges</li>
                <li>Les figues</li>
            </ol>

            <ol><h4>Mes légumes préférés</h4>
                <li>Les poivrons</li>
                <li>Les tomates</li>
                <li>Les herbes</li>
            </ol>
        </div>

        <div class="right" class="dive">
            <h2 class="titles">Gérer mon compte</h2>

            <ul><h4>Modifier mes informations de profil</h4>
                <a class="modification" href=""><li>Actualiser mes informations personnelles</li></a>
                <a class="modification" href=""><li>Changer ma photo de profil</li></a>
                <a class="modification" href=""><li>Changer mes fruits préférés</li></a>
            </ul>

            <ul><h4>Gérer mes offres</h4>
                <a class="modification" href=""><li>Ajouter une offre</li></a>
                <a class="modification" href=""><li>Supprimer une offre</li></a>
                <a class="modification" href=""><li>Voir mes offres</li></a>
            </ul>

            <table id="tablecontact">
                <thead>
                    <tr>
                        <th colspan="3" style="text-align:center; text-decoration:underline">Mes contacts préférés</th>
                    </tr>
                </thaed>

                <tbody>
                    <tr>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                    </tr>
                    <tr>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                    </tr>
                    <tr>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="../images-css/images/Contact.gif"></a></td>
                    
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:center; text-decoration:underline none; font-size:12px;"><strong><a style="color:white" id="tablemodification" href="">Ajouter/supprimer des contacts préférés</a></strong></td>
                    </tr>
                </tbody>
            </table>

        </div>
        
        <div class="center" class="dive">
            <h2 class="titles">Vos informations</h2>
            <ul>Informations générales
                    <li>Nom Prénon</li>
                    <li>Âge</li>
                </ul>


                <ul>Informations de contacts
                    <li>Adresse</li>
                    <li>Adresse mail</li>
                    <li>Téléphone</li>
                </ul>

                <ul>Notes et commentaires des utilisateurs
                    <li>Moyenne des notes: 5/5</li>
                    <li>Avis : klm:"Plutôt sympa et une grande disponibilité pour les échanges"</li>
                </ul>

            <table id="maptable">
                <thead>
                    <tr>
                        <th>Ma location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                             <img id="mapphoto" src="../images-css/images/map.PNG"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
	</body>
    </html>