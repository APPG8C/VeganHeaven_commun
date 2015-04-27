<?php
if (isset ($_GET["variable"])) {
	$Produit = $_GET["variable"];
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
	$requete=$bdd->prepare('SELECT * FROM annonces WHERE `Produit`= ?');	
	$requete->execute(array($Produit));
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
	$Url_Image=$reponse['Url_Image'];
	$DatePublication=$reponse['DatePublication'];
	$idMember=$reponse['Members_idMembers'];
	} 
	else 
	{
	$variable = EOT; // ou toute valeur par défaut...
	} 
?>
<?php
	if(isset($_SESSION['member']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
		$requete=$bdd->prepare('SELECT `TelephoneMobile`, `TelephoneFixe`, `AdresseEmail` FROM users WHERE `id`= ?');
		$requete->execute(array($idMember));
		$reponse=$requete->fetch();
		$TelephoneMobile=$reponse['TelephoneMobile'];
		$TelephoneFixe=$reponse['TelephoneFixe'];
		$AdresseEmail=$reponse['AdresseEmail'];
	}
?>
