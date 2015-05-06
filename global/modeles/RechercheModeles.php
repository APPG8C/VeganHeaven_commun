<?php
	$compteur=0;
	function AnnonceAleatoire()
	{
	global $compteur;	
	for($i=0; $i<5; $i++)
	{
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requete = $bdd->query('SELECT `idAnnonces` FROM annonces ORDER BY RAND() LIMIT 1');
	while($reponse=$requete->fetch()) 
	{
		$idAnnonces=$reponse['idAnnonces'];
	}
	return $idAnnonces;
	$compteur++;
	}
	}

	function AnnonceRecherche()
	//$Produit = 'Oranges';
	{
	for($i=0; $i<5; $i++)
	{	
	$idAnnonces = AnnonceAleatoire();
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT `Produit`,`Transaction`,`prix_offre`,`code_postal`,`Description`, `Categorie`,`Url_Image`,`DatePublication` 
		FROM annonces WHERE `idAnnonces`= ?');	
	$requete->execute(array($idAnnonces));
	$reponse=$requete->fetch();
	$Produit=$reponse['Produit'];
	$Categorie=$reponse['Categorie'];
	$Transaction=$reponse['Transaction'];
	$prix_offre=$reponse['prix_offre'];
	$code_postal=$reponse['code_postal'];
	$Description=$reponse['Description'];
	$Categorie=$reponse['Categorie'];
	$Url_Image=$reponse['Url_Image'];
	$DatePublication=$reponse['DatePublication'];

	echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<img src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				prix : $prix_offre € </br>
				date de péremption : $DatePublication </br>
			</p>
		</div>

	</div>
	";
	}
	}
	
	function AnnonceUnique()
	{
		echo "$compteur";
	}
?>