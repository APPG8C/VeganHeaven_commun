
<?php
function setTitle($page,$valeur,$texte,$texte2){
	$page=$valeur;
	if ($valeur=true){
		echo"<title>$texte</title>";
		echo"<header class='header'><h1 class='adresse'>$texte</h1><p><h2 class='slogan'>$texte2</h2></p>
		<nav>
            <!--<img src='bloggif_54ddf2c4e18c5.jpeg'  alt='Logo VeganHeaven' />-->
            <link rel='stylesheet' href='StyleGraphique.css' />
            <a href='Accueil.php'><img class='logo' src='images/VeganHeavenCherry_thumb.png' alt='image flottante'/></a>
            <ul class='menu'>
                <!--<li> <img src='images/VeganHeavenCherry_thumb.png' alt='image flottante'/>-->
                <li class='men'><a href='Accueil.php'>Accueil</a></li>
                <li class='men'><a href='Recherche.php'>Voir les offres</a></li>
                <li class='men'><a href='FAQ.php'>A propos</a></li>
                <li class='men'><a href='Forum.php'>Forum</a></li>
                <li class='men'><a href='ConnexionInscription.php'>Connexion/Inscription</a></li>
					
					<ul id='menu-deroulant' class='menu'>
						<li class='men'><a href='MonEspace.php'>Mon espace</a>
							<ul>
								<p><li class='MenuDeroulant'><a href='PageDeProfil.php'>Page de profil</a></li>
								<li class='MenuDeroulant'><a href='MonCompte.php'>Mon compte</a></li>
								<li class='MenuDeroulant'><a href='MesTransactions.php'>Mes transactions</a></li>
								<li class='MenuDeroulant'><a href='Deconnexion'>Se déconnecter</a></li></p>
							</ul>
						</li>
					</ul>
            </ul>
        </nav></header>
		
		";
	}
}
?>

<?php
function setImage($page,$valeur,$Image){
	$page=$valeur;
	if ($valeur=true){
		echo "<img class='couverture' src='$Image' alt='Couverture'/>";
	}
}
?>
