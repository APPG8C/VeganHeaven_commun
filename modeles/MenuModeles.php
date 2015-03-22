<?php
function setTitle($texte,$texte2){
		
		echo"<head><meta charset='utf-8'/><title>$texte</title>
		<link rel='stylesheet' href='vues/StyleGraphique.css'></head>";
		
		echo"<div class='header'><h1 class='adresse'>$texte</h1><p><h2 class='slogan'>$texte2</h2></p>
		<nav>
            <ul class='menu'>
				<li class='fondLogo'><a href='Index.php'><img class='logo' src='images/VeganHeavenCherry_thumb.png' alt='image flottante'/></a>
				<p><a href ='ConnexionInscription.php'id='connexion'>Connexion</a></p></li>
                <li class='men'><a href='Index.php'>Accueil</a></li>
                <li class='men'><a href='Recherche.php'>Voir les offres</a></li>
					<ul id='menu-deroulant'class='menu'>
							<li class='men'><a href='Apropos.php'>A propos</a>
								<ul>
									<p><li class='MenuDeroulant'><a href='AideEnligne.php'>Aide en ligne</a></li>
									<li class='MenuDeroulant'><a href='FAQ.php'>FAQ</a></li>
									<li class='MenuDeroulant'><a href='Contacts.php'>Contacts</a></li></p>
								</ul>
							</li>
							<li class='men'><a href='MonEspace.php'>Mon espace</a>
								<ul>
									<p><li class='MenuDeroulant'><a href='PageDeProfil.php'>Page de profil</a></li>
									<li class='MenuDeroulant'><a href='MonCompte.php'>Mon compte</a></li>
									<li class='MenuDeroulant'><a href='MesTransactions.php'>Mes transactions</a></li>
									<li class='MenuDeroulant'><a href='Deconnexion'>Se déconnecter</a></li></p>
								</ul>
							</li>
					</ul>

                <li class='men'><a href='Forum.php'>Forum</a></li>
                <li class='men'><a href='ConnexionInscription.php'>Inscription</a></li>
            </ul>
        </nav></div>
		";
	}
	
?>