
<?php
if (isset ($_GET["variable"])) {
	$idAnnonces = $_GET["variable"];
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requete=$bdd->prepare('SELECT * FROM annonces WHERE `idAnnonces`= ?');	
	$requete->execute(array($idAnnonces));
	$reponse=$requete->fetch();
	$Titre=$reponse['Produit'];
	$Transaction=$reponse['Transaction'];
	$prix_offre=$reponse['prix_offre'];
	$lieu_transaction=$reponse['lieu_transaction'];
	$departement=$reponse['departement'];
	$code_postal=$reponse['code_postal'];
	$Date=$reponse['Date'];
	$Description=$reponse['Description'];
	$Categorie=$reponse['Categorie'];
	$Quantite=$reponse['Quantite'];
	$Url_Image=$reponse['Url_Image'];
	$DatePublication=$reponse['DatePublication'];
	$idMember=$reponse['Members_idMembers'];
	$idAnnonces=$reponse['idAnnonces'];
	$UrlImage=$reponse['Url_Image'];
	} 
	else 
	{
	$variable = EOT; // ou toute valeur par défaut...
	} 
?>
<?php
	if(isset($_SESSION['member']))
	{
		$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
		$requete=$bdd->prepare('SELECT `TelephoneMobile`, `TelephoneFixe`, `AdresseEmail` FROM users WHERE `id`= ?');
		$requete->execute(array($idMember));
		$reponse=$requete->fetch();
		$TelephoneMobile=$reponse['TelephoneMobile'];
		$TelephoneFixe=$reponse['TelephoneFixe'];
		$AdresseEmail=$reponse['AdresseEmail'];
	}
?>
