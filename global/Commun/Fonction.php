<?php
function LoadPictures($file,$name,$directory){
	if(isset($file)){
			if(move_uploaded_file($file,$directory.$name)){
			echo "Le fichier a été transféré avec succès";	
			}
			else{
			echo "Un problème est survenu pendant le transfert";
			}
	}
	else{
		echo "Vous n'avez pas choisi d'image de profil, pour en ajouter une à tous moment, cliquer sur modifier mon profil";
	}
}
?>
<?php
function nomIdentique($utilisateur)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
$requete=$bdd->prepare('SELECT`username`FROM users WHERE`username`= ?');
$requete->execute(array($utilisateur));	
$reponse=$requete->fetch();
$USER=$reponse['username'];
	if(isset($USER))
	{
	return 1;	
	}
	else{
	return 0;
	}
}
?>
<?php
function getAnnonces($IdAnnonce)
{
$ID=$_SESSION['ID'];
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
$requete=$bdd->prepare('SELECT `Produit`,`idAnnonces` FROM annonces WHERE `Members_idMembers`= ? AND `idAnnonces`= ?'  );	
$requete->execute(array($ID,$IdAnnonce));
$reponse=$requete->fetch();
$Produit=$reponse['Produit'];
$Annonce=$reponse['idAnnonces'];
if($reponse){
echo"<a href='Produits.php?variable=".$Produit."'>$Produit</a><br />";
}
}
?>

<?php
function NbAnnonces()
{
$ID=$_SESSION['ID'];
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
$requete=$bdd->prepare('SELECT COUNT(*) AS nb_Annonces FROM annonces WHERE `Members_idMembers`= ?' );	
$requete->execute(array($ID));
$reponse=$requete->fetch();
$nb_Annonces=$reponse['nb_Annonces'];
if($reponse){
return $nb_Annonces; 
}
else
{
return $nb_Annonces=0;
}
}
?>
<?php
function getIdAnnonceMax($Members_idMembers)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8','root','cedbos456');
$requete=$bdd->prepare('SELECT MAX(idAnnonces) FROM annonces WHERE `Members_idMembers`= ?' );	
$requete->execute(array($Members_idMembers));
$reponse=$requete->fetch();
$Id=$reponse['MAX(idAnnonces)'];
if($reponse){
return $Id; 
}
else
{
return $Id=0;
}
}
?>
<?php
function getOffre($idAnnonce)
{
$ID=$_SESSION['ID'];
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
$requete=$bdd->prepare('SELECT `Produit` FROM annonces WHERE `idAnnonces`= ?');	
$requete->execute(array($idAnnonce));
$reponse=$requete->fetch();
$Titre=$reponse['Produit'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$lieu_transaction=$reponse['lieu_transaction'];
$departement=$reponse['departement'];
$code_postal=$reponse['code_postal'];
$Date=$reponse['Date'];
$Description=$reponse['Description'];
$CategorieTitre=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
}

?>
<?php
function Annonces($idMembre)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
$requete=$bdd->prepare('SELECT `Produit`,`idAnnonces` FROM annonces WHERE `Members_idMembers`= ? GROUP BY `DatePublication`');  
$requete->execute(array($idMembre));

while ($donnees = $requete->fetch())
{
	$Produit=$donnees['Produit'];
	$Annonce=$donnees['idAnnonces'];
   	echo"<a href='Produits.php?variable=".$Produit."'>$Produit</a><br />";
}
}
?>