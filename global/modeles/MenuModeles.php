
<?php

/*function setTitle($texte,$texte2){
		
		echo"<head><meta charset='utf-8'/><title>$texte</title>
		<link rel='stylesheet' href='vues/StyleGraphique.css'></head>";
		
		echo"<div class='header'><h1 class='adresse'>$texte</h1><p><h2 class='slogan'>$texte2</h2></p>
		<nav>
            <ul class='menu'>
				<div class='section'>
				<ul id='Connex'>
					<p><li class='fondLogo'><a href='Index.php'><img class='logo' src='images/VeganHeavenCherry_thumb.png' /></a>
						<br /><a id='connexion'>Connexion</a></p>
							<ul>
									<li>		
											<form action='ConnexionMembres.php' class='form-container'method='POST'>
												<div class='form-title'>Pseudo</div>
												<input class='form-field' type='text' name='user' /><br />
												<div class='form-title'>Mot de passe</div>
												<input class='form-field' type='password' name='pass' /><br />
												<div class='submit-container'>
												<input class='submit-button' type='submit' value='Valider' />
												</div>
											</form>
									</li>
							</ul>
					</li>
				</ul>
				</div>
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
	}*/
?>	
<?php
/*function JourPublication($Id,$jour){
	if(isset($Id)){
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT DAY(DatePublication),DAY(NOW()),MONTH(DatePublication),MONTH(NOW()),YEAR(DatePublication),YEAR(NOW()),`Produit`,`Url_Image` FROM annonces WHERE `Members_idMembers`=? GROUP BY `DatePublication`');
	$requete->execute(array($Id));
	$reponse=$requete->fetch();
	$jourPublication=$reponse['DAY(DatePublication)'];
	$jourActuel=$reponse['DAY(NOW())'];
	$moisPublication=$reponse['MONTH(DatePublication)'];
	$moisActuel=$reponse['MONTH(NOW())'];
	$AnneePublication=$reponse['YEAR(DatePublication)'];
	$AnneeActuel=$reponse['YEAR(NOW())'];
	$Produit=$reponse['Produit'];
	$Url_Image=$reponse['Url_Image'];
	$difference=$jourActuel-$jourPublication;

	if($AnneePublication==$AnneeActuel){
		if($moisPublication==$moisActuel){
			if($difference<$jour){
				if(isset($Produit) AND isset($Url_Image)){
					return $table=array($Produit, $Url_Image);
				}
			}
				
		}
	}
	}
}
if(isset($_SESSION['ID'])){
$ID=$_SESSION['ID'];
$tab1=JourPublication($ID,5);
$tab2=JourPublication($ID+1,5);
$tab3=JourPublication($ID-1,5);
$tab4=JourPublication($ID-2,5);
$tab5=JourPublication($ID+2,5);

$Produit1=$tab1[0];
$Produit2=$tab2[0];
$Produit3=$tab3[0];
$Produit4=$tab4[0];
$Produit5=$tab5[0];

$URL1=$tab1[1];
$URL2=$tab2[1];
$URL3=$tab3[1];
$URL4=$tab4[1];
$URL5=$tab5[1];
}*/
?>
<?php
function AnnonceRecente($Id,$jour){
	if(isset($Id)){
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT DAY(DatePublication),DAY(NOW()),MONTH(DatePublication),MONTH(NOW()),YEAR(DatePublication),YEAR(NOW()) FROM annonces WHERE `idAnnonces`=?');
	$requete->execute(array($Id));
	$reponse=$requete->fetch();
	$jourPublication=$reponse['DAY(DatePublication)'];
	$jourActuel=$reponse['DAY(NOW())'];
	$moisPublication=$reponse['MONTH(DatePublication)'];
	$moisActuel=$reponse['MONTH(NOW())'];
	$AnneePublication=$reponse['YEAR(DatePublication)'];
	$AnneeActuel=$reponse['YEAR(NOW())'];
	$difference=$jourActuel-$jourPublication;

	if($AnneePublication==$AnneeActuel){
		if($moisPublication==$moisActuel){
			if($difference<$jour){
					return true;
			}		
		}
	}
}
}
?>

<?php
function JourPublication($Effectuee,$jour){
	
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requeteID=$bdd->prepare('SELECT `idAnnonces` FROM `annonces` WHERE `Effectuee`= ? ORDER BY RAND() LIMIT 1');
	$requeteID->execute(array($Effectuee));
	$ID=$requeteID->fetch();
	$idAnnonces=$ID['idAnnonces'];
		if(AnnonceRecente($idAnnonces,$jour)==true){
			$requete=$bdd->prepare('SELECT `Produit`,`Url_Image`,`Transaction` FROM `annonces` WHERE `idAnnonces`= ?');
			$requete->execute(array($idAnnonces));
			$reponse=$requete->fetch();
				$Produit=$reponse['Produit'];
				$Url_Image=$reponse['Url_Image'];
				$Transaction=$reponse['Transaction'];
				$table=array($Produit, $Url_Image,$Transaction);
		}
		if(isset($table))
		{
		return $table;
		}
		else
		{
			$requete=$bdd->prepare('SELECT `Produit`,`Url_Image`,`Transaction` FROM `annonces` WHERE `idAnnonces`= ?');
			$requete->execute(array($idAnnonces));
			$reponse=$requete->fetch();
			$Produit=$reponse['Produit'];
			$Url_Image=$reponse['Url_Image'];
			$Transaction=$reponse['Transaction'];
			$table=array($Produit, $Url_Image,$Transaction);
			return  $table;
		}
}
?>
<?php
function carroussel($Realisee,$jour){
$tab=JourPublication($Realisee,$jour);
$tab1=$tab[0];
$tab2=$tab[1];
$tab3=$tab[2];
	 if(isset($tab0) || isset($_SESSION['member'])){
		 echo"<div class='caption'>$tab3: $tab1</div>
		<a href='Produits.php?variable=".$tab1."'><img src='vues/PhotoDeProduit/$tab2' width=765px height=400px/></a>";
	}
}
?>
